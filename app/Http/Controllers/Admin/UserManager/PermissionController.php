<?php

namespace App\Http\Controllers\Admin\UserManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Yajra\Datatables\Datatables;
class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = trans('Permissions');
        return view('pages.dashboard.apps.user-manager.permissions', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRolePermissions()
    {
        $permissions = Permission::all()->pluck('name')->toArray();

        $otherWords = array_unique(array_map(function ($permission) {
            $words = explode(' ', $permission);
            array_shift($words);
            return implode('', $words);
        }, $permissions));

        // dd($otherWords);
        return response()->json([$otherWords]);
    }
    public function getPermissions()
    {
        $array_permissions = Permission::all();

        $permissions = [];

        foreach ($array_permissions as $permission) {
            $data['id'] = $permission->id;
            $data['name'] = $permission->name;
            $data['roles'] = $permission->roles->pluck('name');
            $data['create_at'] = $permission->created_at;
            $permissions[] = $data;
        }
        return Datatables::of($permissions)->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
