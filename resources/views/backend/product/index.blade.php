@extends('backend.master')


@section('content')
    <div class="pagetitle">
        <h1>Product List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Product</li>
            </ol>
        </nav>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Products</h5>

                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product</th>
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
                                    <td>Adidash</td>
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
                                    <td>Apple Watch</td>
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
                                    <td>Green Tea</td>
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
                                    <td>Oakley glass</td>
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
