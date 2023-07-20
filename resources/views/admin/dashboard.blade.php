@extends('layouts.admin.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-stats">
          <div class="card-stats-title">Pets Statistics</div>
          <div class="card-stats-items">
            <div class="card-stats-item">
              <div class="card-stats-item-count">{{ $pets['anjing'] }}</div>
              <div class="card-stats-item-label">Anjing</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">{{ $pets['kucing'] }}</div>
              <div class="card-stats-item-label">Kucing</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">{{ $pets['kelinci'] }}</div>
              <div class="card-stats-item-label">Kelinci</div>
            </div>
          </div>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-paw"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Pets</h4>
          </div>
          <div class="card-body">
            {{ $pets['total'] }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 mb-4">
      <div class="hero bg-primary text-white">
        <div class="hero-inner">
          <h2>Welcome Back!</h2>
          <p class="lead">This page is a place to manage posts, categories and more.</p>
        </div>
      </div>
    </div>
  </div>
  </section>
@endsection