@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>All Pets</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.pets.index') }}">All Pets</a> 
                </div>
            </div>
        </div>

        <form action="">
            <div class="form-group">
                <label for="">Tipe Kucing</label>
                <select name="breed.id" class="form-control">
                    <option value="beng">Bengala</option>
                    <option value="aege">Aegean</option>
                    <option value="Kelinci">Kelinci</option>
                </select>
            </div>
        </form>

        <div class="section-body">
            <div class="row">
                @foreach ($pets as $pet)
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $pet->id }} </h4>
                        </div>
                        <div class="card-body">
                        <img src="{{ $pet->url }}" width="190" height="200">
                        </div>
                        <div class="card-footer">
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
