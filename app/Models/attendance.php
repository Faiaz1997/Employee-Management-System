<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    use HasFactory;
    private static $checkOut;
    public static function checkOut($req){
        self::$checkOut = new attendance();
        self::$checkOut->userId = session('id');
        self::$checkOut->status = '0';
        self::$checkOut->checkin = $req->checkin;
        self::$checkOut->checkout = Carbon::now();
        self::$checkOut->workhour = Carbon::now()->diffInHours(session('checkin'));
        self::$checkOut->save();

    }
}
