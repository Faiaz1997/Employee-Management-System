<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{   use HasFactory;
    private static $users;
    public static function userAdded($req){
        self::$users = new users();
        self::$users->name = $req->name;
        self::$users->email = $req->email;
        self::$users->password = bcrypt($req->password) ;
        self::$users->role = $req->role;
        self::$users->save();
    }
   
}
