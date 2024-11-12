<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menangani route '/': Menampilkan pesan 'Selamat Datang'
    public function index()
    {
        return 'Selamat Datang';
    }

    // Menangani route '/about': Menampilkan Nama dan NIM
    public function about()
    {
        return 'Nama: Lentina Abrila Putri, NIM: 2241760120';
    }

    // Menangani route '/articles/{id}': Menampilkan halaman artikel berdasarkan ID
    public function articles($id)
    {
        return "Halaman Artikel dengan Id {$id}";  // Menampilkan ID yang diberikan dalam URL
    }
}