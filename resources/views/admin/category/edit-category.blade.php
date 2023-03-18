@extends('admin.master')

@section('title')

admin | Category
    
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
                                <h5>Edit Category</h5>
                            

                            <form class="theme-form theme-form-2 mega-form" action="{{ route('update-category') }}" method="post" enctype="multipart/form-data" >
                                @csrf

                                 <input class="form-control" type="hidden"
                                           name="id" value="{{ $category->id }}">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text"
                                            placeholder="Category Name" name="name" value="{{ $category->name }}">
                                        
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Description</label>
                                    <div class="col-sm-9">
                                        <textarea id="editor" name="description">{!! $category->description !!}</textarea>
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Image</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form-choose" type="file" name="image" >
                                    </div>
                                    </div>
                               

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Status</label>
                                    <div class="col-sm-9">
                                        <div class="col-md-8">

                                            <label for=""><input type="radio" name="status" value="1" {{ $category->status == 1 ? 'checked':'' }}> Published</label>
                                            <label for=""><input type="radio" name="status" value="0" {{ $category->status == 0 ? 'checked':'' }}> Unpublished</label>
                                            
                                        </div>
                                </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0"></label>
                                    <div class="col-sm-9">
                                        <div class="col-md-8">
                                            <button class="btn text-white theme-bg-color" name="btn" >Update</button>
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