<?php

namespace App\Models;

use App\Core\Traits\SpatieLogsActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class UserInfo extends Model
{
    use SpatieLogsActivity;

    protected $fillable = [
        'user_id',
        'avatar',
        'phone',
        'mobile',
        'address',
        'area',
        'bio',
    ];

    /**
     * Prepare proper error handling for url attribute
     *
     * @return string
     */
    // public function getAvatarUrlAttribute()
    // {
    //     // if file avatar exist in storage folder
    //     $avatar = public_path(Storage::url($this->avatar));
    //     if (is_file($avatar) && file_exists($avatar)) {
    //         // get avatar url from storage
    //         return Storage::url($this->avatar);
    //     }

    //     // check if the avatar is an external url, eg. image from google
    //     if (filter_var($this->avatar, FILTER_VALIDATE_URL)) {
    //         return $this->avatar;
    //     }

    //     // no avatar, return blank avatar
    //     return asset(theme()->getMediaUrlPath().'avatars/blank.png');
    // }
    public function getAvatarUrlAttribute()
    {
        return $this->avatar ? '/'.$this->avatar : asset(theme()->getMediaUrlPath().'avatars/blank.png');
    }

    /**
     * User info relation to user model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
