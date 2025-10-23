<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }
public function handleLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'Sandy' && $password === '123') {
            return redirect()->route('dashboard', ['username' => $username]);
        } else {
            $request->session()->flash('error', 'Login Gagal! Username atau Password salah.');
            return redirect()->route('login');
        }
    }
public function showDashboard(Request $request)
    {
        $username = $request->query('username', 'Tamu');
        return view('dashboard', compact('username'));
    }

    public function showProfile(Request $request)
    {
        $username = $request->query('username', 'Tamu');
        return view('profile', compact('username'));
    }

public function showPengelolaan(Request $request)
    {
        $username = $request->query('username', 'Tamu');

        $data_barang = [
            ['id' => 1, 'nama' => 'Laptop Asus', 'stok' => 15, 'harga' => 12000000],
            ['id' => 2, 'nama' => 'Mouse Gaming', 'stok' => 50, 'harga' => 450000],
            ['id' => 3, 'nama' => 'Keyboard Mekanik', 'stok' => 30, 'harga' => 900000],
            ['id' => 4, 'nama' => 'Monitor 27"', 'stok' => 10, 'harga' => 3500000],
            ['id' => 5, 'nama' => 'Intel Core i7-14700K', 'stok' => 15, 'harga' => 6500000],
            ['id' => 6, 'nama' => 'NVIDIA GeForce RTX 4070 Ti', 'stok' => 8, 'harga' => 16200000],
            ['id' => 7, 'nama' => 'Kingston Fury Beast 32GB DDR5', 'stok' => 45, 'harga' => 1850000],
            ['id' => 8, 'nama' => 'Monitor Samsung 32" Curved 4K', 'stok' => 5, 'harga' => 7800000],
            ['id' => 9, 'nama' => 'SSD Samsung 990 Pro 1TB NVMe', 'stok' => 60, 'harga' => 1500000],
            ['id' => 10, 'nama' => 'Casing NZXT H7 Flow Mid-Tower', 'stok' => 22, 'harga' => 1400000],
            ['id' => 11, 'nama' => 'Power Supply Corsair RM850e', 'stok' => 35, 'harga' => 1750000],
            ['id' => 12, 'nama' => 'Motherboard ASUS ROG Z790', 'stok' => 12, 'harga' => 5200000],
        ];

        return view('pengelolaan', compact('data_barang', 'username'));
    }
}
