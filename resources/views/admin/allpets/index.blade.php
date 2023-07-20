@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>All Pets</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.transaksi.index') }}">All Pets</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                @foreach ($pets as $pet)
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $pet->name . ' ' . $pet->type }} </h4>
                            <span>{{ \Carbon\Carbon::parse($pet->birth)->diff(\Carbon\Carbon::now())->format('%y year, %m month dan %d day') }}
                                </span>
                        </div>
                        <div class="card-body">
                        <img src="{{ asset('/img/pets/' . $pet->photo) }}" width="150" height="150">
                        </div>
                        <div class="card-footer">
                            <h5><span>Rp {{ number_format($pet->price, 0)}}</h5>
                            <a 
                            {{-- href="{{ route('admin.pet.show', [$pet->id]) }}" --}}
                                class="btn btn-success btn-sm btn-icon" data-toggle="tooltip"
                                data-placement="top" title="Beli"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
