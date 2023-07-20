@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Transaksi</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.transaksi.index') }}">Transaksi</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    
                    <h4>Transaksi Tabel</h4>
                    
                </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="petTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Type</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Offer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        {{-- <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $pet->name }}</td>
                                            <td>{{ $pet->type }}</td>
                                            <td>{{ $pet->birth }}</td>
                                            <td>Rp {{ number_format($pet->price, 0) }}</td>
                                            <td>
                                                <form action="{{ route('admin.pet.destroy', $pet->id) }}" method="POST">
                                                    <a href="{{ route('admin.pet.show', [$pet->id]) }}"
                                                        class="btn btn-success btn-sm btn-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Detail"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route('admin.pet.edit', [$pet->id]) }}"
                                                        class="btn btn-primary btn-sm btn-icon" data-toggle="tooltip"
                                                        data-placement="top" title="Edit"><i class="fas fa-pen"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm btn-icon"
                                                        data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr> --}}
                                    
                                </tbody>
                            </table>
                            </div>
                        
                </div>
            </div>
        </div>
    </section>
@endsection
