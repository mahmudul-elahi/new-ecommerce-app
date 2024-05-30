@extends('backend.master')


@section('content')
    <div class="pagetitle">
        <h1>Category List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                <strong>Success!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif


                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="card-title">Categories</h5>
                            </div>
                            <div>
                                <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-primary">
                                    <i class="bi bi-plus-circle"></i> Add Category
                                </a>
                            </div>
                        </div>

                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <img style="width: 50px;" src="{{ asset('assets/backend/img/product-1.jpg') }}"
                                            alt="">
                                    </td>
                                    <td>Shoe</td>
                                    <td>
                                        <span class="badge rounded-pill bg-success">Active</span>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('admin.category.edit', 1) }}" class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <img style="width: 50px;" src="{{ asset('assets/backend/img/product-2.jpg') }}"
                                            alt="">
                                    </td>
                                    <td>Watch</td>
                                    <td>
                                        <span class="badge rounded-pill bg-danger">InActive</span>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <img style="width: 50px;" src="{{ asset('assets/backend/img/product-3.jpg') }}"
                                            alt="">
                                    </td>
                                    <td>Tea</td>
                                    <td>
                                        <span class="badge rounded-pill bg-success">Active</span>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('admin.category.edit', 1) }}" class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <img style="width: 50px;" src="{{ asset('assets/backend/img/product-4.jpg') }}"
                                            alt="">
                                    </td>
                                    <td>Sun glass</td>
                                    <td>
                                        <span class="badge rounded-pill bg-success">Active</span>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('admin.category.edit', 1) }}" class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
