<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UnitController extends Controller
{

    protected $rowDelete;

    public function addUnit()
    {
        return view('admin.unit.unit');
    }
    public function unitList()
    {
        return view('admin.unit.unit-list', ['units' => Unit::orderBy('id', 'DESC')->get()]);
    }
    public function newUnit(Request $request)
    {
        Unit::saveNewUnit($request);
        return redirect()->back()->with('message', 'save successfully');
    }
    public function deleteUnit($id){
       $this->rowDelete = Unit::find($id);
       $this->rowDelete->delete();
        return redirect()->back()->with('message','Delete Successfully');
    }
    public function editUnit($id){

        return view('admin.unit.unit-edit',['unit' => Unit::find($id)]);

    }
    public function updateUnit(Request $request){

       Unit::saveUpdateUnit($request);
       return redirect('/unit-list')->with('message','Update Successfully');
    }
}
