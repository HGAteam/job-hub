<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    use HasFactory;
    protected $table = 'user_statuses';
    protected $fillable=[
        'user_id',
        'is_online',
        'last_activity',
        'last_activity_at',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
