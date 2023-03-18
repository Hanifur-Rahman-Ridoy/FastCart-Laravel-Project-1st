<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $brand;
    public function addBrand()
    {
        return view('admin.brand.brand');
    }
    public function brandList()
    {
        return view('admin.brand.brand-list',['brand' => Brand::orderBy('id','DESC')->get() ]);
    }
    public function newBrand(Request $request)
    {

        Brand::saveNewBrand($request);
        return redirect()->back()->with('message', 'Save Succesfully');
    }
  
    public function deleteBrand($deleteId){

        $this->brand = Brand::find($deleteId);
        if(file_exists($this->brand->image)){
            unlink($this->brand->image);
        }
        $this->brand->delete();
        return redirect()->back()->with('message', 'Delete Successfully');
    }
    public function editBrand($editId){

       
        return view('admin.brand.brand-edit',['brand' =>  Brand::find($editId) ]);
    }
    public function updateBrand(Request $request){

        Brand::saveUpdateBrand($request);
        return redirect('/brand-list')->with('message', 'Update Successfully');

    }

}
