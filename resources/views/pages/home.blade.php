@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div class="container my-5">
  <h1 class="text-center mb-5">Selamat Datang di Bagus Fatihuddin- 2301040016 Group</h1>
<div class="row g-0">

     {{-- Looping setiap data post dari controller --}}
    @foreach ($posts as $post)
    <div class="col-md-6">
<div class="card h-100 rounded-0 border-0">
        <div class="row g-0 h-100">
{{--
            Konten ditampilkan di bagian kiri UNTUK card nomor 2 dan 3
            (urutan ditentukan oleh $loop->iteration)
          --}}
          @if($loop->iteration == 2 || $loop->iteration == 3)
          <div class="col-md-6" style="background-color: {{ $loop->iteration == 1 ? '#FFF4E6' : ($loop->iteration == 2 ? '#E0F7FA' : ($loop->iteration == 3 ? '#FFF9C4' : '#F3E5F5')) }};">
            <div class="card-body d-flex flex-column justify-content-between h-100 p-4">
              <div>
                <h5 class="card-title fw-bold mb-3">{{ $post['title'] }}</h5>
                <p class="card-text small text-muted mb-3">{{ $post['subtitle'] ?? '' }}</p>
                <p class="card-text small">{{ $post['content'] }}</p>
              </div>
{{-- Icon Sosial Media --}}
              <div class="d-flex gap-2 mt-3">
                <a href="#" class="btn btn-sm rounded-circle border" style="width: 35px; height: 35px; padding: 0; display: flex; align-items: center; justify-content: center;">
                  <i class="bi bi-facebook"></i>
                </a>
                <a href="#" class="btn btn-sm rounded-circle border" style="width: 35px; height: 35px; padding: 0; display: flex; align-items: center; justify-content: center;">
                  <i class="bi bi-twitter"></i>
                </a>
                <a href="#" class="btn btn-sm rounded-circle border" style="width: 35px; height: 35px; padding: 0; display: flex; align-items: center; justify-content: center;">
                  <i class="bi bi-youtube"></i>
                </a>
                <a href="#" class="btn btn-sm rounded-circle border" style="width: 35px; height: 35px; padding: 0; display: flex; align-items: center; justify-content: center;">
                  <i class="bi bi-instagram"></i>
                </a>
              </div>
            </div>
          </div>
          @endif

          {{-- Gambar --}}
          <div class="col-md-6">
            <img src="{{ asset($post['image']) }}"
                 class="img-fluid h-100 w-100"
                 style="object-fit: cover;"
                 alt="{{ $post['title'] }}">
          </div>

          {{--
            Konten ditampilkan setelah gambar UNTUK card 1 dan 4
          --}}
          @if($loop->iteration == 1 || $loop->iteration == 4)
          <div class="col-md-6" style="background-color: {{ $loop->iteration == 1 ? '#FFF4E6' : ($loop->iteration == 2 ? '#E0F7FA' : ($loop->iteration == 3 ? '#FFF9C4' : '#F3E5F5')) }};">
            <div class="card-body d-flex flex-column justify-content-between h-100 p-4">
              <div>
                <h5 class="card-title fw-bold mb-3">{{ $post['title'] }}</h5>

{{-- Hanya satu subtitle --}}
<p class="card-text small text-muted mb-3">{{ $post['subtitle'] ?? '' }}</p>

<p class="card-text small">{{ $post['content'] }}</p>
              </div>

              {{-- Icon Sosial Media --}}
              <div class="d-flex gap-2 mt-3">
                <a href="#" class="btn btn-sm rounded-circle border" style="width: 35px; height: 35px; padding: 0; display: flex; align-items: center; justify-content: center;">
                  <i class="bi bi-facebook"></i>
                </a>
                <a href="#" class="btn btn-sm rounded-circle border" style="width: 35px; height: 35px; padding: 0; display: flex; align-items: center; justify-content: center;">
                  <i class="bi bi-twitter"></i>
                </a>
                <a href="#" class="btn btn-sm rounded-circle border" style="width: 35px; height: 35px; padding: 0; display: flex; align-items: center; justify-content: center;">
                  <i class="bi bi-youtube"></i>
                </a>
                <a href="#" class="btn btn-sm rounded-circle border" style="width: 35px; height: 35px; padding: 0; display: flex; align-items: center; justify-content: center;">
                  <i class="bi bi-instagram"></i>
                </a>
              </div>
            </div>
          </div>
          @endif

        </div>
</div>
    </div>
    @endforeach

  </div>

  {{-- Jumlah total franchise di bawah halaman --}}
  <div class="text-center mt-5">
    <h5>Total Franchise: {{ $totalPost }}</h5>
  </div>

</div>

@endsection
