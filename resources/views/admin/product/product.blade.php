@extends('admin.master')
@section('title')

admin | product
    
@endsection

@section('body')

 <!-- New Product Add Start -->
 <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Product Information</h5>
                            </div>

                            <form class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Product
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text"
                                            placeholder="Product Name">
                                    </div>
                                </div>

                                

                                <div class="mb-4 row align-items-center">
                                    <label
                                        class="col-sm-3 col-form-label form-label-title">Category</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100" name="state">
                                            <option disabled>Category Menu</option>
                                            <option>Electronics</option>
                                            <option>TV & Appliances</option>
                                            <option>Home & Furniture</option>
                                            <option>Another</option>
                                            <option>Baby & Kids</option>
                                            <option>Health, Beauty & Perfumes</option>
                                            <option>Uncategorized</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label
                                        class="col-sm-3 col-form-label form-label-title">Subcategory</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100" name="state">
                                            <option disabled>Subcategory Menu</option>
                                            <option>Ethnic Wear</option>
                                            <option>Ethnic Bottoms</option>
                                            <option>Women Western Wear</option>
                                            <option>Sandels</option>
                                            <option>Shoes</option>
                                            <option>Beauty & Grooming</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label
                                        class="col-sm-3 col-form-label form-label-title">Brand</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100">
                                            <option disabled>Brand Menu</option>
                                            <option value="puma">Puma</option>
                                            <option value="hrx">HRX</option>
                                            <option value="roadster">Roadster</option>
                                            <option value="zara">Zara</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">Unit</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100">
                                            <option disabled>Unit Menu</option>
                                            <option>Kilogram</option>
                                            <option>Pieces</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Regular Price</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text"
                                            placeholder="Product Name">
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Selling Price</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text"
                                            placeholder="Product Name">
                                    </div>
                                </div>
                               
                                
                               
                                <div class="row align-items-center">
                                    <label
                                        class="col-sm-3 col-form-label form-label-title">Status</label>
                                    <div class="col-sm-9">
                                        <label for=""><input type="radio" name="status" value="1" checked> Published</label>
                                        <label for=""><input type="radio" name="status" value="0" > Unpublished</label>
                                    </div>
                                </div>

                                 <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Short Description</label>
                                <div class="col-sm-9">
                                    <div class="bs-example">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                          
                            
                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-3 mb-0">Product Long
                                    Description</label>
                                <div class="col-sm-9">
                                    <div class="bs-example">
                                        <textarea id="editor"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Images</label>
                                <div class="col-sm-9">
                                    <div class="bs-example">
                                        <input class="form-control form-choose" type="file"
                                        id="formFile" multiple>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Images</label>
                                <div class="col-sm-9">
                                    <div class="bs-example">
                                        <input class="form-control form-choose" type="file"
                                        id="formFile" multiple>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Images</label>
                                <div class="col-sm-9">
                                    <div class="bs-example">
                                        <button class="btn text-white theme-bg-color">Add
                                            Value</button>
                                    </div>
                                </div>
                            </div>
                          
                           
                           
                           

                                

                            </form>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection