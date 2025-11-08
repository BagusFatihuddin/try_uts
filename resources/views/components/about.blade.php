@extends('layouts.main')

@section('title','about us')

@section('content')


<h1 style="text-align: center; margin-top: 50px">About Us</h1>

<div class="d-flex justify-content-center">
    <div class="d-flex flex-column">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('img/NarutoKecil.png') }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Bagus Fatihuddin</h5>
        <p class="card-text">2301040016</p>
        <p class="card-text"><small class="text-body-secondary">Programmer 1 Master Programmer alias bosnya</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Muhammad Said</h5>
        <p class="card-text">2301040040</p>
        <p class="card-text"><small class="text-body-secondary">Programmer 2 ternaknya programmer 1</small></p>
      </div>
    </div>
    <div class="col-md-4">
      <img src="{{ asset('img/Kucing.jpg')}}" class="img-fluid rounded-start" alt="...">
    </div>
  </div>
</div>
</div>
</div>

@endsection
