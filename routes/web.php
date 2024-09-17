<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Beranda']);
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Moch. Avin',
        'nrp' => '50252221061',
        'kelas' => 'PBKK - D',
        'title' => 'About'
    ]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => $post['title'], 'post' => $post]);
});

Route::get('contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'website' => 'https://moch-avin.netlify.app/',
        'linkedin' => 'https://linkedin.com/in/moch-avin/',
        'instagram' => 'https://www.instagram.com/avin004/'
    ]);
});
