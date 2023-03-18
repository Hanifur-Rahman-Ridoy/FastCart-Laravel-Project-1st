<?php

namespace App\Http\Controllers\FrontController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FastCartFrontController extends Controller
{
    public function homeView()
    {
        return view('front.home.home');
    }
}
