{{-- HALAMAN UTAMA PRODUCT --}}

@extends('layouts.main')

@section('title', 'Product')

@section('content')
    <h1>My Blog</h1>
    <div class="row justify-content-center w-full items-center bg-amber-400">
    @foreach($posts as $post)

    <div class="card my-4" style="width: 18rem;">
      <img class="card-img-top" src="{{ $post['image'] }}" alt="Card image">
      <div class="card-body">
        <h5 class="card-title">{{ $post['title'] }}</h5>
        <p class="card-text">{{ $post['content'] }}</p>
        <a href="/post/{{ $post['id'] }}" class="btn btn-primary">Read More →</a>
      </div>
    </div>
    @endforeach

    </div>

    <h2>
        jumkah post adalah: {{ $totalPost }}
    </h2>
@endsection