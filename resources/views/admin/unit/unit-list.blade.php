@extends('admin.master')
@section('title')

admin | unit list
    
@endsection
@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>All Units</h5>
                        <form class="d-inline-flex">
                            <a href="{{ route('add-unit') }}"
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
                                        <th class="text-center">Unit Name</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Apple</td>
                                        <td>Lorem ipsum dolor</td>
                                        <td>Published</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="order-detail.html">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                   
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