<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $fillable = ['category_id', 'name', 'description', 'image', 'status'];
    protected static $subCategory, $updateSubCategory;
    protected static $image, $imageName, $directory, $imageUrl, $updateImage;

    public static function getImage($request)
    {

        self::$image = $request->file('image');
        if (self::$image) {
            self::$imageName = 'SubcategoryImage-' . time() . '.' . self::$image->getClientOriginalExtension();
            self::$directory = 'Images/subCategoryImage/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory . self::$imageName;
            return self::$imageUrl;
        } else {
            return '';
        }
    }

    public static function saveNewSubcategory($request)
    {

        self::$subCategory = new Subcategory();
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name = $request->name;
        self::$subCategory->description = $request->description;
        self::$subCategory->image = self::getImage($request);
        self::$subCategory->status = $request->status;
        self::$subCategory->save();
    }


    public static function saveUpdateSubcategory($request)
    {

        self::$updateSubCategory = Subcategory::find($request->id);

        if (file_exists($request->file('image'))) {
            if (file_exists(self::$updateSubCategory->image)) {

                unlink(self::$updateSubCategory->image);
            }
            self::$updateImage = self::getImage($request);
        } else {
            self::$updateImage = self::$updateSubCategory->image;
        }

        self::$updateSubCategory->category_id = $request->category_id;
        self::$updateSubCategory->name = $request->name;
        self::$updateSubCategory->description = $request->description;
        self::$updateSubCategory->image = self::$updateImage;
        self::$updateSubCategory->status = $request->status;
        self::$updateSubCategory->save();
    }



    public function category()
    {

        return $this->belongsTo('App\Models\Category');
    }
}
