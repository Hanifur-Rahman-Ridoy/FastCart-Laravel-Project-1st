<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'status'];
    protected static $category;
    protected static $image, $imageName, $imageUrl, $directory;
    protected static $categoryRow;
    protected static $updateImage;


    public static function getImage($request)
    {
        self::$image = $request->file('image');
        if (self::$image) {
            self::$imageName = 'categoryImage-' . time() . '.' . self::$image->getClientOriginalExtension();
            self::$directory = 'images/categoryImage/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory . self::$imageName;
            return self::$imageUrl;
        } else {
            return '';
        }
    }

    public static function saveNewCategory($request)
    {

        self::$category =  new Category();
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = self::getImage($request);
        self::$category->status = $request->status;
        self::$category->save();
    }

    public static function saveUpdateCategory($request)
    {


        self::$categoryRow = Category::find($request->id);

        if (file_exists($request->image)) {

            if (self::$categoryRow->image != null || self::$categoryRow->image != '') {

                unlink(self::$categoryRow->image);
            }

            self::$updateImage = self::getImage($request);
        } else {
            self::$updateImage = self::$categoryRow->image;
        }

        self::$categoryRow->name = $request->name;
        self::$categoryRow->description = $request->description;
        self::$categoryRow->image = self::$updateImage;
        self::$categoryRow->status = $request->status;
        self::$categoryRow->save();
    }
}
