@extends('backend.master')

@section('content')
    <div class="pagetitle">
        <h1>Blank Page</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Dashbaord</h5>
                        <p>The bustling marketplace overflowed with vibrant sights and sounds. Spices, their aroma a heady
                            mix of sweet and pungent, filled the air. Merchants hawked their wares in a cacophony of
                            languages, their voices competing with the rhythmic clang of a blacksmith's hammer. Sunlight
                            streamed through gaps in the colorful awnings overhead, casting dappled patterns on the dusty
                            cobbles. A lone camel, laden with woven rugs and exotic fruits, ambled through the throng, its
                            large, intelligent eyes taking in the scene with calm indifference. Every corner held a new
                            wonder, a testament to the rich tapestry of cultures woven together in this vibrant trading hub.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
