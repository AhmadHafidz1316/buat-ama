<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masjid Nurul Amir</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <style>
        nav {
            position: sticky;
            top: 0;
            left: 0;
            margin-left: 10rem;
            margin-right: 10rem;
        }

        .dropend .dropdown-toggle {
            margin-left: 1em;
        }

        .dropdown .dropdown-menu {
            display: none;
        }

        .dropdown:hover>.dropdown-menu,
        .dropend:hover>.dropdown-menu {
            display: block;
            margin-top: .125em;
            margin-left: .125em;
        }

        .bg-img {
            position: relative;
            background-image: url('{{ URL::asset('img/pr_masjidnew.png') }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 600px;
        }

        .bg-img::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Warna hitam dengan opasitas 0.5 untuk efek overlay gelap */
            z-index: 0;
        }

        .content {
            position: relative;
            z-index: 1;
            /* Menempatkan konten di atas latar belakang gambar */
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
            /* Teks berwarna putih */
        }


        @media screen and (min-width:767px) {
            .dropend:hover>.dropdown-menu {
                position: absolute;
                top: 0;
                left: 100%;
            }

            .dropend .dropdown-toggle {
                margin-left: .5em;
            }
        }

        @media screen and (max-width:766px) {
            nav {
                margin: 20px;
            }

            iframe {
                width: 300px;
                height: 150px
            }
        }

        body {
            background-color: #fff;


            position: relative;
            background-image: url('{{ URL::asset('img/pr_masjidnew.png') }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 600px;
        }

        .bg-img::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Warna hitam dengan opasitas 0.5 untuk efek overlay gelap */
            z-index: 0;
        }

        .content {
            position: relative;
            z-index: 1;
            /* Menempatkan konten di atas latar belakang gambar */
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
            /* Teks berwarna putih */
        }

        .org-structure {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .level {
            display: flex;
            gap: 20px;
        }

        .level2 {
            display: flex;
            gap: 20px;
        }

        .member {
            text-align: center;
        }

        .member img {
            max-width: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        /* Additional styling for the modal */
        /* Tambahkan gaya untuk modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Nurul Amir</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('artikel.artikel') }}">Artikel</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a></li>
                        <li><a class="dropdown-item" href="{{ route('struktur') }}">Struktur</a></li>
                        <li class="nav-item dropend">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color: black">
                                Kegiatan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('kegiatan.pengajian') }}">Pengajian</a></li>
                                <li><a class="dropdown-item" href="{{ route('kegiatan.shalawat') }}">Sholawat</a></li>
                                <li><a class="dropdown-item" href="{{ route('kegiatan.marhaba') }}">Marhaba</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('galery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('donatur') }}">Donatur</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

    <footer class="bg-success text-white py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4 mx-auto mt-3">
                    <h2>Lokasi</h2>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.994492917599!2d106.84324177478899!3d-6.647602764984923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c894ca8adb01%3A0x8aa712ee13dd902!2sMasjid%20Nurul%20Amir!5e0!3m2!1sid!2sid!4v1701497302286!5m2!1sid!2sid"
                            width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 mx-auto mt-3">
                    <h2>Kontak</h2>
                    <p class="text-center"><a href=""
                            class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i
                                class="fab fa-whatsapp"></i> +62xxxxxxxxxx</a></p>
                    <p class="text-center"><a href=""
                            class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i
                                class="fas fa-phone"></i> +62xxxxxxxxxx</a></p>
                    <p class="text-center"><a href=""
                            class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i
                                class="fab fa-instagram"></i> Nurul_amir</a></p>
                    <p class="text-center"><a href=""
                            class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i
                                class="fab fa-facebook"></i> nurul_amir</a></p>
                    <p class="text-center"><a href=""
                            class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i
                                class="fas fa-envelope"></i> nurul_amir</a></p>
                </div>
                <div class="col-md-12 col-lg-4 col-xl-4 mx-auto mt-3 text-center">
                    <h2>Logo</h2>
                </div>
            </div>
        </div>
        <hr class="mb-4">
        <div class="row align-items-center">
            <p>Copyright 2023</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // Durasi animasi dalam milidetik
        });
    </script>
    @stack('script')
</body>

</html>
