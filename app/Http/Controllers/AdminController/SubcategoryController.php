<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{

  protected $subCategory, $category;

  public function addSubCategory()
  {
    return view('admin.sub_category.sub-category', [
      'categoryName' => Category::orderBy('id', 'DESC')->get(),
    ]);
  }
  public function subCategoryList()
  {

    return view('admin.sub_category.sub-category-list', [
      'subCategory' => Subcategory::orderBy('id', 'DESC')->get(),
    ]);
  }
  public function newSubcategory(Request $request)
  {
    Subcategory::saveNewSubcategory($request);
    return redirect()->back()->with('message', 'Save Successfully');
  }
  public function deleteSubcategory($deleteId)
  {
    $this->subCategory = Subcategory::find($deleteId);

    if (file_exists($this->subCategory->image)) {
      unlink($this->subCategory->image);
    }

    $this->subCategory->delete();
    return redirect()->back()->with('message', 'Delete Successfully');
  }

  public function editSubcategory($editId)
  {
    $this->subCategory = Subcategory::find($editId);
    return view('admin.sub_category.edit-sub-category', [
      'subcategory' => $this->subCategory,
      'categoryData' => Category::all(),
    ]);
  }
  public function updateSubcategory(Request $request){
    Subcategory::saveUpdateSubcategory($request);
    return redirect('/sub-category-list')->with('message','Update Successfully');
  }
}
