<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FastCartAdminController extends Controller
{
    public function dashboardView(){
        return view('admin.home.home');
    }
}
