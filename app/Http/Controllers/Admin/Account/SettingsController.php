<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\SettingsEmailRequest;
use App\Http\Requests\Account\SettingsInfoRequest;
use App\Http\Requests\Account\SettingsPasswordRequest;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $info = auth()->user()->info;
        $title = trans('Account');
        // get the default inner page
        return view('pages.dashboard.account.settings.settings', compact('info','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SettingsInfoRequest $request)
    {
        // save user name
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
        ]);

        auth()->user()->update($validated);

        // save on user info
        $info = UserInfo::where('user_id', auth()->user()->id)->first();

        if ($info === null) {
            // create new model
            $info = new UserInfo();
        }

        // attach this info to the current user
        $info->user()->associate(auth()->user());

        foreach ($request->only(array_keys($request->rules())) as $key => $value) {
            if (is_array($value)) {
                $value = serialize($value);
            }
            $info->$key = $value;
        }

        // include to save avatar
        if ($avatar = $this->upload()) {
            $info->avatar = $avatar;
        }

        if ($request->boolean('avatar_remove')) {
            Storage::delete($info->avatar);
            $info->avatar = null;
        }

        $info->save();

        return redirect()->intended('dashboard/account/settings');
    }

    /**
     * Function for upload avatar image
     *
     * @param  string  $folder
     * @param  string  $key
     * @param  string  $validation
     *
     * @return false|string|null
     */
    public function upload($folder = '/library/uploads/avatars', $key = 'avatar', $validation = 'image|mimes:jpeg,jpg|max:5000000|sometimes')
    {
        request()->validate([$key => $validation]);

        $file = null;

        if (request()->hasFile($key)) {

            $file = Storage::disk('public')->putFile($folder, request()->file($key), 'public');
        }

        return $file;
    }

    /**
     * Function to accept request for change email
     *
     * @param  SettingsEmailRequest  $request
     */
    public function changeEmail(SettingsEmailRequest $request)
    {
        // prevent change email for demo account
        if ($request->input('current_email') === 'demo@demo.com') {
            return redirect()->intended('dashboard/account/settings');
        }

        auth()->user()->update(['email' => $request->input('email')]);

        if ($request->expectsJson()) {
            return response()->json($request->all());
        }

        return redirect()->intended('dashboard/account/settings');
    }

    /**
     * Function to accept request for change password
     *
     * @param  SettingsPasswordRequest  $request
     */
    public function changePassword(SettingsPasswordRequest $request)
    {
        // prevent change password for demo account
        if ($request->input('current_email') === 'demo@demo.com') {
            return redirect()->intended('dashboard/account/settings');
        }

        auth()->user()->update(['password' => Hash::make($request->input('password'))]);

        if ($request->expectsJson()) {
            return response()->json($request->all());
        }

        return redirect()->intended('dashboard/account/settings');
    }
}
