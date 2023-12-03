<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artikelController extends Controller
{
    public function show1() {
        return view('artikel.art1');
    }
    public function show2() {
        return view('artikel.art2');
    }
    public function show3() {
        return view('artikel.art3');
    }
    public function show4() {
        return view('artikel.art4');
    }
    public function show5() {
        return view('artikel.art5');
    }
    public function show6() {
        return view('artikel.art6');
    }
}
