<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'url',
        'type',
        'size',
        'dimensions',
    ];

    public function user(){
        return $this->belongsto(User::class);
    }
}
