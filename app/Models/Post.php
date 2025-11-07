<?php

namespace App\Models;

class Post {
    public static function data() {
        return [
            [
                'id' => 1,
                'title' => 'Laptop Lenovo ThinkPad X1',
                'content' => 'Laptop bisnis ringan dan tangguh, cocok untuk profesional.',
                'image' => 'img/laptop1.jpg',
            ],
            [
                'id' => 2,
                'title' => 'Asus ROG Strix G15',
                'content' => 'Laptop gaming dengan performa tinggi dan desain futuristik.',
                'image' => 'img/laptop2.jpg',
            ],
            [
                'id' => 3,
                'title' => 'MacBook Air M2',
                'content' => 'Laptop elegan dengan chip Apple M2, ringan dan cepat.',
                'image' => 'img/laptop3.jpg',
            ],
            [
                'id' => 4,
                'title' => 'HP Pavilion 14',
                'content' => 'Laptop harian dengan desain stylish dan baterai tahan lama.',
                'image' => 'img/laptop4.jpg',
            ],
            [
                'id' => 5,
                'title' => 'Acer Aspire 5',
                'content' => 'Laptop ekonomis dengan performa solid untuk pelajar.',
                'image' => 'img/laptop5.jpg',
            ],
            [
                'id' => 6,
                'title' => 'Dell XPS 13',
                'content' => 'Laptop premium dengan bezel tipis dan build kualitas tinggi.',
                'image' => 'img/laptop6.jpg',
            ],
        ];
    }

    public static function caridata($id) {
        $posts = self::data();

        foreach ($posts as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
        }
        return null;
    }

    public static function count() {
        return count(self::data());
    }
}
