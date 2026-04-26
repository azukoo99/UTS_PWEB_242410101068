<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        session(['username' => $request->username]);

        return redirect('/dashboard');
    }

    public function dashboard()
    {
        $username = session('username');

        $produk = [
            [
                'nama' => 'Tongkol',
                'harga' => 20000,
                'stok' => 10,
                'gambar' => 'images/tongkol.png'
            ],
            [
                'nama' => 'Lele',
                'harga' => 15000,
                'stok' => 20,
                'gambar' => 'images/lele.png'
            ],
            [
                'nama' => 'Hiu',
                'harga' => 50000,
                'stok' => 5,
                'gambar' => 'images/hiu.png'
            ],
        ];

        return view('dashboard', compact('username', 'produk'));
    }

    public function pengelolaan()
    {
        $username = session('username');

        $produk = [
            [
                'nama' => 'Tongkol',
                'harga' => 20000,
                'stok' => 10,
                'gambar' => 'images/tongkol.png'
            ],
            [
                'nama' => 'Lele',
                'harga' => 15000,
                'stok' => 20,
                'gambar' => 'images/lele.png'
            ],
            [
                'nama' => 'Hiu',
                'harga' => 50000,
                'stok' => 5,
                'gambar' => 'images/hiu.png'
            ],
        ];

        return view('pengelolaan', compact('username', 'produk'));
    }

    public function profile()
    {
        $username = session('username');
        return view('profile', compact('username'));
    }
}
