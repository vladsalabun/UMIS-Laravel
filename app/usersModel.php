<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usersModel extends Model
{
    
    // Назва таблиці, з якої потрібно брати дані:
    protected $table = 'users';
    
    public static function getAllUsers()
    {
        return usersModel::paginate(1);
    }
}
