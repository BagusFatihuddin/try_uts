@extends('layouts.main')

@section('title', 'Home')

@section('content')

<h1>Selamat Datang di Bagus Fatihuddin 2301040016</h1>
<div class="container my-4">

  <div class="row gx-3 gy-3">

    @foreach ($posts as $post)
    <div class="col-md-6">
      <a href="/posts/{{ $post['id'] }}" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
          <div class="row g-0">

            {{-- Gambar --}}
            <div class="col-md-4">
              <img src="{{ asset($post['image']) }}" class="img-fluid rounded-start" alt="{{ $post['title'] }}">
            </div>

            {{-- Isi Card --}}
            <div class="col-md-8">
              <div class="card-body text-start">
                <h5 class="card-title">{{ $post['title'] }}</h5>
                <p class="card-text">{{ $post['content'] }}</p>
                <p class="card-text">
                  <small class="text-muted">Product ID: {{ $post['id'] }}</small>
                </p>
              </div>
            </div>

          </div>
        </div>
      </a>
    </div>
    @endforeach

  </div>

</div>
@endsection
