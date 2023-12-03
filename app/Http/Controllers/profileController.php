<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function sejarah()
    {
        return view('profile.sejarah');
    }

    public function struktur()
    {
        return view('profile.struktur');
    }

    public function marhaba()
    {
        return view('profile.kegiatan.marhaba');
    }

    public function pengajian()
    {
        return view('profile.kegiatan.pengajian');
    }

    public function shalawat()
    {
        return view('profile.kegiatan.shalawat');
    }


    public function beranda()
    {
        $url = 'https://api.myquran.com/v1/sholat/jadwal/1222/' . now()->year . '/' . now()->format('m/d');
        $response = Http::get($url);
        $prayerTimes = $response->json()['data'];
        return view('home', compact('prayerTimes'));
    }

    public function artikel() 
    {
        return view('artikel');
    }
}
