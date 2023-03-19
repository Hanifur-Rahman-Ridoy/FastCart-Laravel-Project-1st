@extends('admin.master')

@section('title')

admin | edit unit
    
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
                                <h5>Edit Unit Information</h5>
                            

                            <form class="theme-form theme-form-2 mega-form" action="{{ route('update-unit') }}" method="post">
                                @csrf
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Unit Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text"
                                            placeholder="Category Name" name="name" value="{{ $unit->name }}">
                                        <input class="form-control" type="hidden"
                                             name="id" value="{{ $unit->id }}">
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Unit Description</label>
                                    <div class="col-sm-9">
                                        <textarea id="editor" name="description">{!! $unit->description !!}</textarea>
                                    </div>
                                </div>
                               
                               

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Status</label>
                                    <div class="col-sm-9">
                                        <div class="col-md-8">
                                            <label for=""><input type="radio" name="status" value="1" {{ $unit->status == 1 ? 'checked':'' }}> Published</label>
                                            <label for=""><input type="radio" name="status" value="0" {{ $unit->status == 0 ? 'checked':'' }}> Unpublished</label>
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