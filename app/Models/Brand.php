<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'status'];
    protected static $brand,$brandRow;
    protected static $image, $imageName, $directory, $imageUrl,$updateImage;

    public static function getImage($request)
    {
        self::$image = $request->file('image');
        if (self::$image) {
            self::$imageName = 'brandImage-' . time() . '.' . self::$image->getClientOriginalExtension();
            self::$directory = 'images/brandImages/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = (self::$directory . self::$imageName);
            return self::$imageUrl;
        } else {
            return '';
        }
    }

    public static function saveNewBrand($request)
    {

        self::$brand = new Brand();
        self::$brand->name = $request->name;
        self::$brand->description = $request->description;
        self::$brand->image = self::getImage($request);
        self::$brand->status = $request->status;
        self::$brand->save();
    }
    public static function saveUpdateBrand($request)
    {

        
        self::$brandRow = Brand::find($request->id);

        if (file_exists($request->image)) {

            if (self::$brandRow->image != null || self::$brandRow->image != '') {

                unlink(self::$brandRow->image);
            }

            self::$updateImage = self::getImage($request);
        } else {
            self::$updateImage = self::$brandRow->image;
        }

        self::$brandRow->name = $request->name;
        self::$brandRow->description = $request->description;
        self::$brandRow->image = self::$updateImage;
        self::$brandRow->status = $request->status;
        self::$brandRow->save();
    }

    
    
    
    
}
