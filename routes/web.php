<?php

use App\Http\Controllers\AdminController\BrandController;
use App\Http\Controllers\AdminController\CategoryController;
use App\Http\Controllers\AdminController\FastCartAdminController;
use App\Http\Controllers\AdminController\ProductController;
use App\Http\Controllers\AdminController\SubcategoryController;
use App\Http\Controllers\AdminController\UnitController;
use App\Http\Controllers\FrontController\FastCartFrontController;
use Illuminate\Support\Facades\Route;




// Front Routes


Route::get('/', [FastCartFrontController::class, 'homeView'])->name('home-view');





// Admin Routes
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    //Root Route
    Route::get('/dashboard', [FastCartAdminController::class, 'dashboardView'])->name('dashboardHome');


    // Category Route
    Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('add-category');
    Route::post('/new-category', [CategoryController::class, 'newCategory'])->name('new-category');
    Route::get('/category-list', [CategoryController::class, 'categoryList'])->name('category-list');
    Route::get('/edit-category/{editId}', [CategoryController::class, 'editCategory'])->name('edit-category');
    Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('update-category');
    Route::get('/delete-category/{deleteId}', [CategoryController::class, 'deleteCategory'])->name('delete-category');



    // Sub Category Route
    Route::get('/add-sub-category', [SubcategoryController::class, 'addSubCategory'])->name('add-sub-category');
    Route::get('/sub-category-list', [SubcategoryController::class, 'subCategoryList'])->name('sub-category-list');
    Route::post('/new-subcategory', [SubcategoryController::class, 'newSubcategory'])->name('new-subcategory');
    Route::get('/delete-sub-category/{deleteId}', [SubcategoryController::class, 'deleteSubcategory'])->name('delete-sub-category');
    Route::get('/edit-sub-category/{editId}', [SubcategoryController::class, 'editSubcategory'])->name('edit-sub-category');
    Route::post('/update-sub-category', [SubcategoryController::class, 'updateSubcategory'])->name('update-sub-category');

    // Brand Route
    Route::get('/add-brand', [BrandController::class, 'addBrand'])->name('add-brand');
    Route::get('/brand-list', [BrandController::class, 'brandList'])->name('brand-list');
    Route::post('/new-brand', [BrandController::class, 'newBrand'])->name('new-brand');
    Route::get('/delete-brand/{deleteId}', [BrandController::class, 'deleteBrand'])->name('delete-brand');
    Route::get('/edit-brand/{editId}', [BrandController::class, 'editBrand'])->name('edit-brand');
    Route::post('/update-brand', [BrandController::class, 'updateBrand'])->name('update-brand');

    // Unit Route
    Route::get('/add-unit', [UnitController::class, 'addUnit'])->name('add-unit');
    Route::get('/unit-list', [UnitController::class, 'unitList'])->name('unit-list');
    Route::post('/add-unit', [UnitController::class, 'newUnit'])->name('new-unit');
    Route::get('/delete-unit/{deleteId}', [UnitController::class, 'deleteUnit'])->name('delete-unit');
    Route::get('/edit-unit/{editId}', [UnitController::class, 'editUnit'])->name('edit-unit');
    Route::post('/update-unit', [UnitController::class, 'updateUnit'])->name('update-unit');

    // Products Route
    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add-product');
    Route::get('/product-list', [ProductController::class, 'productList'])->name('product-list');
});
