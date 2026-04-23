<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formdaftar()
    {
        return view('register'); // nama blade.php
    }

   public function kirim(Request $rekues) {
        $first_name = $rekues->input('first_name');
        $last_name = $rekues->input('last_name');
        return view('welcome', ['first_name' => $first_name, 'last_name' => $last_name]);
    }
}