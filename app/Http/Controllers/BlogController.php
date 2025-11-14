<?php

namespace App\Http\Controllers;
use App\Models\Post; //import Post model supaya bisa dipanggil langsung.

use Illuminate\Http\Request;

class BlogController extends Controller
{
        public function home() {
  //Post merujuk ke nama filenya, data() adalah fungsi di filenya
            $posts = Post::data();
        $totalPost = Post::count();
 // Mengirim data ke view pages/home.blade.php
            return view('pages.home', compact('posts', 'totalPost'));
        }
 //halaman tentang
    public function about()
{

    // Data programmer dibuat manual dalam bentuk array
    // Ini akan dikirim ke view sebagai $programmers
    $programmers = [
            [
                "nama" => "Bagus Fatihuddin",
                "nim" => "2301040016",
                "bio" => "Programmer 1 Master programmer alias bossnya.",
                "img" => "img/NarutoKecil.png",
            ],
            [
                "nama" => "Muhammad Said",
                "nim" => "2301040040",
                "bio" => "Programmer 2 ternaknya programmer 1.",
                "img" => "img/Kucing.jpg",
            ],
        ];

        // Mengirim array $programmers ke view components/about.blade.php
    return view('components.about', compact('programmers'));
}
}
