@extends('layouts.template')

@section('content')
    <div class="container mt-5 mb-5">
        <h2 class="text-center">Artikel</h2>
        
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="row">
                        <div class="col-md-4">
                            <div class="card mt-3">
                                <a href="{{ route('artikel.art1') }}">
                                    <img src="{{ URL::asset('img/pr_masjidnew.png') }}" class="img-fluid" alt="Gambar Artikel">
                                </a>
                                <div class="card-body text-center">
                                    <h3 class="card-title mt-3">Tes</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                    <p class="card-text">17 Agustus 2045</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mt-3">
                                <a href="{{ route('artikel.art2') }}">
                                    <img src="{{ URL::asset('img/pr_masjidnew.png') }}" class="img-fluid" alt="Gambar Artikel">
                                </a>
                                <div class="card-body text-center">
                                    <h3 class="card-title mt-3">Tes3</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, adipisci.</p>
                                    <p class="card-text">Besok</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mt-3">
                                <a href="{{ route('artikel.art3') }}">
                                    <img src="{{ URL::asset('img/pr_masjidnew.png') }}" class="img-fluid" alt="Gambar Artikel">
                                </a>
                                <div class="card-body text-center">
                                    <h3 class="card-title mt-3">Tes3</h3>
                                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p class="card-text">30 Februari 2034</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mt-3">
                                <a href="{{ route('artikel.art4') }}">
                                    <img src="{{ URL::asset('img/pr_masjidnew.png') }}" class="img-fluid" alt="Gambar Artikel">
                                </a>
                                <div class="card-body text-center">
                                    <h3 class="card-title mt-3">Tes4</h3>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                                    <p class="card-text">3 Desember 2023</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mt-3">
                                <a href="{{ route('artikel.art5') }}">
                                    <img src="{{ URL::asset('img/pr_masjidnew.png') }}" class="img-fluid" alt="Gambar Artikel">
                                </a>
                                <div class="card-body text-center">
                                    <h3 class="card-title mt-3">Tes5</h3>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                                    <p class="card-text">3 Desember 2023</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mt-3">
                                <a href="{{ route('artikel.art6') }}">
                                    <img src="{{ URL::asset('img/pr_masjidnew.png') }}" class="img-fluid" alt="Gambar Artikel">
                                </a>
                                <div class="card-body text-center">
                                    <h3 class="card-title mt-3">Tes6</h3>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                                    <p class="card-text">3 Desember 2023</p>
                                </div>
                            </div>
                        </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </div>
@endsection