<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{

    protected $category;

    public function addCategory()
    {

        return view('admin.category.category');
    }

    public function newCategory(Request $request)
    {

        Category::saveNewCategory($request);
        return redirect()->back()->with('message', 'Save Successfully');
    }
    public function categoryList()
    {


        return view('admin.category.category-list', ['category' => Category::all()]);
    }

    public function editCategory($editId)
    {

        return view('admin.category.edit-category', ['category' => Category::find($editId)]);
    }
    public function updateCategory(Request $request)
    {

        Category::saveUpdateCategory($request);
        return redirect('/category-list')->with('message', 'Update Successfully');
    }
    public function deleteCategory($deleteId)
    {
        $this->category = Category::find($deleteId);
        if (file_exists($this->category->image)) {
            unlink($this->category->image);
        }
        $this->category->delete();
        return redirect()->back()->with('message', 'Delete Successfully');
    }




   



}
