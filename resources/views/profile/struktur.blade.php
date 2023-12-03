@extends('layouts.template')

@section('content')
    <div class="judul">
        <center>
            <h1>Struktur Organisasi</h1>
            <h2>Masjid Nurul Amir</h2>
        </center>
    </div>

    <div class="org-structure">
        <div class="level">
            <div class="member">
                <img src="{{ URL::asset('img/sedekah.jpg') }}" alt="" >
                <p>Ketua</p>
            </div>
        </div>

        <div class="level">
            <div class="member">
                <img src="{{ URL::asset('img/sedekah.jpg') }}" alt="" >
                <p>Bendahara</p>
            </div>

            <div class="member">
                <img src="{{ URL::asset('img/sedekah.jpg') }}" alt="" >
                <p>Sekretaris</p>
            </div>
        </div>

        <div class="level2">
            <div class="member">
                <img src="{{ URL::asset('img/sedekah.jpg') }}" alt="" >
                <p>Anggota 1</p>
            </div>
    
            <div class="member">
                <img src="{{ URL::asset('img/sedekah.jpg') }}" alt="" >
                <p>Anggota 2</p>
            </div>
    
            <div class="member">
                <img src="{{ URL::asset('img/sedekah.jpg') }}" alt="" >
                <p>Anggota 3</p>
            </div>
    
            <div class="member">
                <img src="{{ URL::asset('img/sedekah.jpg') }}" alt="" >
                <p>Anggota 4</p>
            </div>
    
            <div class="member">
                <img src="{{ URL::asset('img/sedekah.jpg') }}" alt="" >
                <p>Anggota 5</p>
            </div>
        </div>
        
    </div>
@endsection
