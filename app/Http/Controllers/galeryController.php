<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galeryController extends Controller
{
    public function index() {
        return view('galery');
    }
}
