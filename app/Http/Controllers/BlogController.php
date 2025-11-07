<?php

namespace App\Http\Controllers;
use App\Models\Post; //import Post model supaya bisa dipanggil langsung.

use Illuminate\Http\Request;

class BlogController extends Controller
{
        public function home() {
            return view('pages.home');
        }


        public function product()
    {
        $posts = Post::data(); //Post merujuk ke nama filenya, data() adalah fungsi di filenya
        $totalPost = Post::count();
        return view('components.product-card', compact('posts', 'totalPost'));  // fungsi view() bawaan php, buat nammpilin 'home'
      
    }

//  $posts = Post::data(); Hasilnya adalah di bahawa

//     $posts = [
//     ['id' => 1, 'title' => 'UBG', 'content' => 'komputer'],
//     ['id' => 2, 'title' => 'unram', 'content' => 'teknik sipil'],
//     ['id' => 3, 'title' => 'uin', 'content' => 'agama'],
// ];

    
    // single kalo diklik satu2
    public function product_details($id)
    {
        $post = Post::caridata($id);
        $posts = Post::data(); //Post merujuk ke nama filenya, data() adalah fungsi di filenya

        if (!$post) {
            abort(404);
        }

        return view('components.details_product', compact('post', 'posts'));
    }

    //halaman tentang
    public function about()
    {
        $info = [
            'name' => 'deva',
            'bio' => 'penulis.'
        ];

        return view('about', compact('info'));
    }
}
