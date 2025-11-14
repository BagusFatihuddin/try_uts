<?php

namespace App\Models;

class Post {

    // Fungsi untuk mengambil semua data post
    public static function data() {
        return [
            [
                'id' => 1,
                'title' => 'Laptop Lenovo ThinkPad X1',
                'subtitle' => 'Laptop Bisnis Premium',
                'content' => 'Laptop bisnis ringan dan tangguh, cocok untuk profesional.',
                'image' => 'img/laptop1.jpg',
            ],
            [
                'id' => 2,
                'title' => 'Asus ROG Strix G15',
                'subtitle' => 'Laptop Gaming',
                'content' => 'Laptop gaming dengan performa tinggi dan desain futuristik.',
                'image' => 'img/laptop2.jpg',
            ],
            [
                'id' => 3,
                'title' => 'MacBook Air M2',
                'subtitle' => 'Ringan dan Cepat',
                'content' => 'Laptop elegan dengan chip Apple M2, ringan dan cepat.',
                'image' => 'img/laptop3.jpg',
            ],
            [
                'id' => 4,
                'title' => 'HP Pavilion 14',
                'subtitle' => 'Laptop Harian Stylish',
                'content' => 'Laptop harian dengan desain stylish dan baterai tahan lama.',
                'image' => 'img/laptop4.jpg',
            ],
        ];
    }
 // Menghitung jumlah total post
    public static function count() {
        return count(self::data());
    }
}
