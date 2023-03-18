@extends('admin.master')
@section('title')

admin | category list
    
@endsection
@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>All Categories</h5>
                        <form class="d-inline-flex">
                            <a href="" data-bs-toggle="modal" data-bs-target="#categoryModal"
                                class="align-items-center btn btn-theme d-flex">
                                <i data-feather="plus-square"></i>Add New
                            </a>
                        </form>
                    </div>

                    <div class="table-responsive category-table ">
                        <div>
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <td>SL</td>
                                        <th class="text-center">Brand Name</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Brand Image</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                               
                                    @foreach ($category as $category )
                                        
                                   
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{!! $category->description !!}</td>
                                        <td>
                                            <div class="table-image">
                                                <img src="{{ $category->image != '' || $category->image != null ? asset($category->image) : asset('/images/deafult_images/No-Image.jpg') }}" class="img-fluid"
                                                    alt="img">
                                            </div>
                                        </td>
                                        <td>{{ $category->status == 1 ? 'Published' : 'Unpublished' }}</td>


                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="order-detail.html">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('edit-category', ['editId' => $category->id]) }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('delete-category', ['deleteId' => $category->id]) }}" >
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                   
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection