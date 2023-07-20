@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pet Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('admin.pet.index') }}">Pets Data</a></div>
                <div class="breadcrumb-item">Pet Profile</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $pet->name . ' ' . $pet->type }}</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col sm-12">
                            <div class="chocolat-parent">
                                <a href="{{ asset('/img/pets/' . $pet->photo) }}" class="chocolat-image"
                                    title="{{ $pet->name . ' ' . $pet->type }}">
                                    <div data-crop-image="285">
                                        <img alt="image" src="{{ asset('/img/pets/' . $pet->photo) }}"
                                            class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col sm-12">
                            <div>
                                <h5>Age</h5>
                                <span>{{ \Carbon\Carbon::parse($pet->birth)->diff(\Carbon\Carbon::now())->format('%y year, %m month dan %d day') }}
                                    ({{ Carbon\Carbon::parse($pet->birth)->format('d M Y') }})</span>
                            </div>
                            <div class="mt-4">
                                <h5>Price</h5>
                                <span>Rp {{ number_format($pet->price, 0)}}</span>
                            </div>
                            <div class="mt-4">
                                <h5>Description</h5>
                                <span>{{ $pet->desc}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('csslibraries')
    <link rel="stylesheet" href="{{ asset('assets/') }}/css/libraries/chocolat.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
@endsection
@section('jsSpecific')
    <script src="{{ asset('assets/js') }} /libraries/jquery.chocolat.min.js"></script>
    <script src="{{ asset('assets/js') }} /libraries/jquery-ui.min.js"></script>
@endsection
