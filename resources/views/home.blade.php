@extends('layouts.template')

@section('content')
    {{-- pembuka home --}}
    <div class="bg-img">
        <div class="container-fluid">
            <div class="row">
                <div
                    class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 content p-4 text-center mt-5 d-flex align-items-center">
                    <div class="text-white mt-5">
                        <p class="mt-3 fs-1">LOGO</p>
                        <h1 class="mt-2">Masjid Nurul Amir</h1>
                        <hr class="border-light border-4 opacity-50">
                        <h3 class="mt-2 text1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum corporis dolor
                            quos officiis aliquid et voluptas velit fugit nobis sint?
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- penutup home --}}

    {{-- Jadwal Sholat --}}
    <div class="container mt-4">
        <div class="row justify-content-evenly mb-4">
            <div class="col-md-4 text-center">
                <div class="fs-4">Time</div>
                <h2 class="mt-2" id="current-time"></h2>
            </div>

            <div
                class="col-md-4 box p-3 bg-success text-white bg-opacity-25 border-bottom border-success border-opacity-50 rounded">
                <h2 class="p-3 text-center">Jadwal Sholat</h2>
            </div>

            <div class="col-md-4 text-center">
                <div class="text-center fs-4" id="namaHari"></div>
            </div>
        </div>

        <hr class="border-success border-4 opacity-50 mb-5">
    </div>
    {{-- penutup jadwal sholat --}}

    {{-- pembuka card jadwl solat --}}
    <div class="container mt-5" data-aos="fade-left">
        <div class="row" id="jadwalSholat">
            <!-- Top Row -->
            <div class="col-md-4 mb-4">
                <div class="card bg-success text-white shadow-lg">
                    <div class="card-body text-center">
                        <h5 class="card-title fs-5">Shubuh</h5>
                        <p class="card-text fs-5">{{ $prayerTimes['jadwal']['subuh'] }} AM</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card bg-success text-white shadow-lg">
                    <div class="card-body text-center">
                        <h5 class="card-title fs-5">Zuhur</h5>
                        <p class="card-text fs-5">{{ $prayerTimes['jadwal']['dzuhur'] }} PM</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card bg-success text-white shadow-lg">
                    <div class="card-body text-center">
                        <h5 class="card-title fs-5">Ashar</h5>
                        <p class="card-text fs-5">{{ $prayerTimes['jadwal']['ashar'] }} PM</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Row -->
            <div class="col-md-6 mb-4">
                <div class="card bg-success text-white shadow-lg">
                    <div class="card-body text-center">
                        <h5 class="card-title fs-5">Maghrib</h5>
                        <p class="card-text fs-5">{{ $prayerTimes['jadwal']['maghrib'] }} PM</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card bg-success text-white shadow-lg">
                    <div class="card-body text-center">
                        <h5 class="card-title fs-5">Isya</h5>
                        <p class="card-text fs-5">{{ $prayerTimes['jadwal']['subuh'] }} PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Penutup jadwal sholat 5 waktu --}}

    {{-- bagian donasi --}}
    <div class="d-flex flex-column flex-md-row bg-success bg-opacity-50 p-4" data-aos="fade-right">
        <div class="img-1 ms-3">
            <img src="{{ asset('img/pr_masjidnew.png') }}" alt=""
                class="img-fluid rounded border border-success-subtle" style="max-width: 300px;">
        </div>

        <div class="content-2 mx-3 mx-md-5 mt-3 mt-md-0">
            <h2 class="text-white fs-2">Sedekah, Infaq & Shadaqoh</h2>
            <hr class="border-light border-4 opacity-50">
            <p class="text-white fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim eveniet dolorum aliquam
                inventore culpa vel asperiores distinctio, maiores esse earum nulla quisquam voluptas, neque soluta
                ipsum veniam totam ad cumque labore eum expedita doloribus a error voluptates! Magni aut, eveniet
                reprehenderit aliquam voluptatibus ad hic impedit optio odio voluptatem omnis!</p>
            <button type="submit" class="btn btn-success text-white">Donasi</button>
        </div>
    </div>
    {{-- penutup donasi --}}

    {{-- pembuka artikel dan kegiatan --}}
    <div class="container mt-5 mb-5" data-aos="fade-up">
        <h2 class="text-center">Articles & Events</h2>
        <hr class="border-success border-4 opacity-50">

        {{-- Bagian artikel --}}
        <div class="row mt-4">
            <div class="col-md-6">
                <h2 class="text-center mb-3"><a href="" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Articles</a></h2>

                <div class="card mb-2 bg-success bg-opacity-50">
                    <div class="row g-0 text-white">
                        <div class="col-md-5">
                            <img src="{{ asset('img/pr_masjidnew.png') }}" class="img-fluid rounded" alt="Gambar Artikel">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h3 class="card-title">Angger Masuk Angin</h3>
                                <hr class="border-light border-3 opacity-50">
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt,
                                    ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2 bg-success bg-opacity-50">
                    <div class="row g-0 text-white">
                        <div class="col-md-5">
                            <img src="{{ asset('img/pr_masjidnew.png') }}" class="img-fluid rounded" alt="Gambar Artikel">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h3 class="card-title">Angger Masuk Angin</h3>
                                <hr class="border-light border-3 opacity-50">
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt,
                                    ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center mt-3"><a href="{{ route('artikel.artikel') }}" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Selengkapnya</a></p>
            </div>

            {{-- Bagian events --}}
            <div class="col-md-6">
                <h2 class="text-center mb-3"><a href="" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Events</a></h2>
            
                <div class="card mb-3 bg-success bg-opacity-50">
                    <div class="row g-0 text-white">
                        <div class="col-md-2 d-flex align-items-center text-center">
                            <h1>18 Des</h1>
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h3 class="card-title">Angger Masuk Angin</h3>
                                <hr class="border-light border-3 opacity-50">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/lokasi.png') }}" alt="" class="me-2" width="15">
                                    <span class="lokasi">Lokasi - Masjid Nurul Amir</span>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <img src="{{ asset('img/time.png') }}" alt="" class="me-2" width="15">
                                    <span class="lokasi">10.00 - 15.00 WIB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="card mt-3 bg-success bg-opacity-50 mt-4" >
                    <div class="row g-0 text-white">
                        <div class="col-md-2 d-flex align-items-center text-center">
                            <h1 class="">18 Des</h1>
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h3 class="card-title">Angger Masuk Angin</h3>
                                <hr class="border-light border-3 opacity-50">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/lokasi.png') }}" alt="" class="me-2" width="15">
                                    <span class="lokasi">Lokasi - Masjid Nurul Amir</span>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <img src="{{ asset('img/time.png') }}" alt="" class="me-2" width="15">
                                    <span class="lokasi">10.00 - 15.00 WIB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <p class="text-center mt-4"><a href="#" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Selengkapnya</a></p>
            </div>
            
        </div>
    </div>
@endsection

@push('script')
<script>
    function updateClock() {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();

        // Tambahkan angka 0 di depan jam, menit, dan detik jika kurang dari 10
        hours = (hours < 10 ? "0" : "") + hours;
        minutes = (minutes < 10 ? "0" : "") + minutes;
        seconds = (seconds < 10 ? "0" : "") + seconds;

        var timeString = hours + ":" + minutes + ":" + seconds;

        document.getElementById("current-time").innerText = timeString;
    }

    // Memanggil fungsi updateClock setiap detik
    setInterval(updateClock, 1000);

    // Memanggil fungsi updateClock pada awal untuk menghindari jeda pertama kali
    updateClock();

    document.addEventListener("DOMContentLoaded", function() {
        // Array nama hari
        const namaHariArray = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

        // Mendapatkan indeks hari saat ini (0 untuk Minggu, 1 untuk Senin, dst.)
        const indeksHariSaatIni = new Date().getDay();

        // Mendapatkan nama hari saat ini dari array
        const namaHariSaatIni = namaHariArray[indeksHariSaatIni];

        // Menetapkan teks ke elemen dengan id "namaHari"
        document.getElementById("namaHari").innerText = namaHariSaatIni;
    });
</script>
@endpush
