@extends('backend.master')


@section('content')
    <div class="pagetitle">
        <h1>Product Update</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Product</a></li>
                <li class="breadcrumb-item active">Edit Product</li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Products</h5>
                        <div class="row">
                            <div class="col-md-7">
                                <form method="POST" action="{{ route('admin.product.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf


                                    <div class="row mb-3">
                                        <label for="product_name" class="col-sm-2 col-form-label">Product</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="product_name" name="product_name"
                                                placeholder="Enter Name">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="product_price" class="col-sm-2 col-form-label">Price</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="product_price"
                                                name="product_price" placeholder="Enter price">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="category_id" class="col-sm-2 col-form-label">Category</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" id="category_id" name="category_id">
                                                <option selected value="">Select Category</option>
                                                <option value="1">Adidash</option>
                                                <option value="0">Nike</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="gender_id" class="col-sm-2 col-form-label">Gender</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" id="gender_id" name="gender_id">
                                                <option selected value="">Select Gender</option>
                                                <option value="1">Man</option>
                                                <option value="2">Woman</option>
                                                <option value="3">Kids</option>
                                            </select>
                                        </div>
                                    </div>




                                    <div class="row mb-3">
                                        <label for="product_description" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea type="text" class="form-control" id="product_description" name="product_description"
                                                placeholder="Enter description" style="height: 100px"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="product_image" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="product_image" type="file"
                                                id="product_image">
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
