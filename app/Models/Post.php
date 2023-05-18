<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $table = 'users';
    protected $guarded = "users";

    protected $fillable = [
        'user_id',
        'slug',
    ];

    public function User()
    {
        return $this->hasOne(User::class);
    }

}
