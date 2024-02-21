<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function login() {
        return view("login");
    }

    public function buku(){
        return view("buku");
    }

}