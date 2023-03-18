<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    
    public function addUnit(){
    return view('admin.unit.unit');
    }
    public function unitList(){
    return view('admin.unit.unit-list');
    }
    public function nelwUnit(Request $request){}
}
