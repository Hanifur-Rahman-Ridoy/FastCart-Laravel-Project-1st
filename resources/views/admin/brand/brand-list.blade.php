@extends('admin.master')
@section('title')

admin | brand list
    
@endsection
@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>All Brands</h5>
                        <form class="d-inline-flex">
                            <a href="{{ route('add-brand') }}"
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
                                    @foreach ($brand as $data )
                                        
                                   
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{!! $data->description !!}</td>
                                        <td>
                                            <div class="table-image">
                                                <img src="{{ $data->image != '' || $data->image != null ? asset($data->image) : asset('/images/deafult_images/No-Image.jpg') }}" class="img-fluid"
                                                    alt="img">
                                            </div>
                                        </td>
                                        <td>{{ $data->status == 1 ? 'Published' : 'Unpublished' }}</td>


                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="order-detail.html">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('edit-brand',['editId' =>$data->id]) }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('delete-brand',['deleteId' =>$data->id]) }}" >
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