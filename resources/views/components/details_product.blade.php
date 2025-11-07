@extends('layouts.main')

@section('title', 'Detail Produk')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="row g-0">
                    {{-- Bagian gambar --}}
                    <div class="col-md-5">
                        <img src="{{ asset($post['image']) }}" class="img-fluid rounded-start" alt="Gambar Produk">
                    </div>

                    {{-- Bagian detail --}}
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title">{{ $post['title'] }}</h3>
                            <p class="card-text">{{ $post['content'] }}</p>
                            <p class="card-text"><small class="text-muted">ID Produk: {{ $post['id'] }}</small></p>

                            <a href="/product" class="btn btn-secondary mt-3">← Kembali</a>
                            <a href="#" class="btn btn-primary mt-3">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
