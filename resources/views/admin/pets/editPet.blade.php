@extends('layouts.admin.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Pets Master Data</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
      <div class="breadcrumb-item active"><a href="{{ route('admin.pet.index') }}">Pets Data</a></div>
      <div class="breadcrumb-item">Add New Pet</div>
    </div>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-header">
        <h4>Edit Pets Data</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('admin.pet.update', $pet->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Pet Name</label>
                <select name="name" class="form-control @error('name') is-invalid @enderror" required>
                    <option value="Anjing" {{ $pet->name == 'Anjing' ? 'selected' : '' }}>Anjing</option>
                    <option value="Kucing" {{ $pet->name == 'Kucing' ? 'selected' : '' }}>Kucing</option>
                    <option value="Kelinci" {{ $pet->name == 'Kelinci' ? 'selected' : '' }}>Kelinci</option>
                </select>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Pet Type</label>
                <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ $pet->type }}" required>
                @error('type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Birth Date</label>
                <input type="date" name="birth" class="form-control @error('birth') is-invalid @enderror" value="{{ $pet->birth }}" required>
                @error('birth')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Price</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                    </div>
                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" aria-label="Amount (to the nearest dollar)" value="{{ $pet->price }}" required>
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                @error('type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control h-50" rows="5" name="desc" >{{ $pet->desc }}</textarea>
            </div>
            <div class="form-group">
                <label>Photo</label>
                <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror">
                @error('photo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button class="btn btn-primary" type="submit">Save</button>
            <a href="{{ route('admin.pet.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
      </div>
    </div>  
  </div>
  </section>
@endsection