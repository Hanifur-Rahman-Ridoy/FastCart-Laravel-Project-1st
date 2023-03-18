<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 

    public function addProduct(){
        return view('admin.product.product');
    }
    public function productList(){
        return view('admin.product.product-list');
    }
}
