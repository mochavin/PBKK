<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'website' => 'https://moch-avin.netlify.app/',
        'linkedin' => 'https://linkedin.com/in/moch-avin/',
        'instagram' => 'https://www.instagram.com/avin004/'
    ]);
});
