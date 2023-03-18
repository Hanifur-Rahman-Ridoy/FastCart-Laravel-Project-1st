@extends('admin.master')

@section('title')

admin | Edit sub category
    
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
                                <h5>Edit Sub Category</h5>
                            

                            <form class="theme-form theme-form-2 mega-form" action="{{ route('update-sub-category') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden"
                                            name="id" value="{{ $subcategory->id }}">
                                <div class="mb-4 row align-items-center">
                                    <label
                                        class="col-sm-3 col-form-label form-label-title">Category Name</label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100" name="category_id">
                                           
                                            @foreach ($categoryData as $category )
                                            <option value="{{ $category->id }}"
                                                 {{ $category->id == $subcategory->category->id ? 'selected':'' }}
                                                 >{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Sub Category Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text"
                                            placeholder="Sub Category Name" name="name" value="{{ $subcategory->name }}">
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Sub Category Description</label>
                                    <div class="col-sm-9">
                                        <textarea id="editor" name="description">{!! $subcategory->description !!}</textarea>
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Image</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form-choose" type="file" id="formFileMultiple" name="image">
                                    </div>
                                    </div>
                               

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Status</label>
                                    <div class="col-sm-9">
                                        <div class="col-md-8">
                                            <label for=""><input type="radio" name="status" value="1" {{ $subcategory->status == 1 ? 'checked':'' }}> Published</label>
                                            <label for=""><input type="radio" name="status" value="0" {{ $subcategory->status == 0 ? 'checked':'' }}> Unpublished</label>
                                        </div>
                                </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0"></label>
                                    <div class="col-sm-9">
                                        <div class="col-md-8">
                                            <button class="btn text-white theme-bg-color">Update
                                            </button>
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