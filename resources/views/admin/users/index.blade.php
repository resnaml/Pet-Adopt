@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>User Master Data</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
            
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-striped" id="petTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    
                                    <td>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                            <a href="{{ route('admin.users.show', [$user->id]) }}"
                                                class="btn btn-success btn-sm btn-icon" data-toggle="tooltip"
                                                data-placement="top" title="Detail"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('admin.users.edit', [$user->id]) }}"
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
