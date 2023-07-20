@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pets Master Data</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Pets Data</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Pets Data Table</h4>
                    <a href="{{ route('admin.pet.create') }}" class="text-right"><span class="badge badge-primary"><i
                                class="fas fa-paw"></i> Add New Pet</span></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-striped" id="petTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Birth</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pets as $pet)
                                <tr>
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('csslibraries')
    <link rel="stylesheet" href="{{ asset('assets/css/libraries/') }}datatables.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/libraries/') }}dataTables.bootstrap4.min.css">
@endsection
@section('jsSpecific')
    <script src="{{ asset('assets/js') }} /libraries/datatables.min.js"></script>
    <script src="{{ asset('assets/js') }} /libraries/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('assets/js') }} /libraries/dataTables.select.min.js"></script>
    <script src="{{ asset('assets/js') }} /libraries/jquery-ui.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="assets/js/page/modules-datatables.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#petTable').DataTable();
        });
    </script>
@endsection
