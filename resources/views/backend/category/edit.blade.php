@extends('backend.master')


@section('content')
    <div class="pagetitle">
        <h1>Category Update</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Category</a></li>
                <li class="breadcrumb-item active">Edit Category</li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Categories</h5>
                        <div class="row">
                            <div class="col-md-7">
                                <form method="POST" action="{{ route('admin.category.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf


                                    <div class="row mb-3">
                                        <label for="category_name" class="col-sm-2 col-form-label">Category</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="category_name"
                                                name="category_name" placeholder="Enter category name">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="category_image" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="category_image" type="file">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="category_status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" id="category_status" name="category_status">
                                                <option selected value="">Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">InActive</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="d-flex gap-2">
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            <i class="bi bi-patch-check"></i>
                                            Create
                                        </button>

                                        <a href="{{ route('admin.category.index') }}" class="btn btn-sm btn-danger">
                                            Back
                                            <i class="bi bi-box-arrow-right"></i>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
