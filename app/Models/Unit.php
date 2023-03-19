<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'status'];
    protected static $units;

    public static function saveNewUnit($request)
    {

        self::$units = new Unit();
        self::$units->name = $request->name;
        self::$units->description = $request->description;
        self::$units->status = $request->status;
        self::$units->save();
    }
    public static function saveUpdateUnit($request)
    {

        self::$units = Unit::find($request->id);
        self::$units->name = $request->name;
        self::$units->description = $request->description;
        self::$units->status = $request->status;
        self::$units->save();
    }
}
