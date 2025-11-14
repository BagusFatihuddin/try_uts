@extends('layouts.main')
@section('title', 'About Us')

@section('content')

<div class="container my-5">
  <h1 class="text-center mb-5">About Us</h1>
{{-- Looping setiap programmer dari controller --}}
    @foreach ($programmers as $index => $p)
    <div class="col-12">
      <div class="card rounded-0 border-0">
        <div class="row g-0">

          {{-- Jika index bernilai genap maka gambar diletakkan di bagian kiri --}}
          @if($index % 2 == 0)
            <div class="col-md-6">
              <img src="{{ asset($p['img'] ?? 'img/NarutoKecil.png') }}"
                   class="img-fluid h-100 w-100"
                   style="object-fit: cover; min-height: 400px;"
                   alt="{{ $p['nama'] }}">
            </div>
          @endif

          {{-- Konten --}}
          <div class="col-md-6"
               style="background-color: {{ $index % 2 == 0 ? '#D1F2EB' : '#E8F8F5' }};">
            <div class="card-body d-flex flex-column justify-content-between p-5" style="min-height: 400px;">

                {{-- Data utama programmer --}}
              <div>
                <h5 class="card-title fw-bold mb-3">{{ $p['nama'] }}</h5>
                <p class="card-text text-muted mb-3">{{ $p['nim'] }}</p>
                <p class="card-text small">{{ $p['bio'] ?? '' }}</p>
              </div>

              {{-- Social Media Icons --}}
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

          {{-- Jika index bernilai ganjil maka gambar diletakkan di bagian kanan --}}
          @if($index % 2 == 1)
            <div class="col-md-6">
              <img src="{{ asset($p['img'] ?? 'img/Kucing.jpg') }}"
                   class="img-fluid h-100 w-100"
                   style="object-fit: cover; min-height: 400px;"
                   alt="{{ $p['nama'] }}">
            </div>
          @endif

        </div>
      </div>
    </div>
    @endforeach

  </div>
{{-- Tombol kembali ke halaman home --}}
  <div class="text-center mt-5">
    <a href="/" class="btn btn-primary px-4 py-2">
      <i class="bi bi-arrow-left me-2"></i>Back to Home
    </a>
  </div>
</div>

@endsection
