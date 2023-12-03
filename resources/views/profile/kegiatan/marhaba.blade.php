@extends('layouts.template')

@section('content')
    <div class="text-center mt-5">
        <h1>Kegiatan Rutin</h1>
        <hr class="border-success border-4 opacity-75">
        <h2>
            <a href="" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                Marhabanan
            </a>
        </h2>
    </div>

    <div class="container mt-5">
        <div class="row d-flex align-items-center bg-success bg-opacity-50 p-4 rounded shadow-lg">
            <div class="col-md-4">
                <img src="{{ asset('img/rutin.png') }}" alt="" class="img-fluid rounded">
            </div>
            <div class="col-md-8 text-white">
                <div class="body-text mt-4">
                    <h2>Marhabanan</h2>
                    <hr class="border-light border-3 opacity-50">

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam illo reprehenderit ea saepe
                        repudiandae, doloribus eaque harum reiciendis consequatur possimus voluptate repellat ab quam magnam
                        deleniti cumque expedita debitis odio temporibus porro. At, odio excepturi alias dignissimos nulla
                        repellat quam expedita. Sed dolorem consectetur eaque libero reiciendis eius eveniet exercitationem
                        labore nisi tempore officiis, molestiae rerum sit repellendus dolor quod repellat fuga nihil
                        voluptatum placeat atque aliquid, sapiente ducimus cupiditate. Consequatur laboriosam neque labore,
                    </p>
                </div>
                <div class="col-md-4 icon mt-3 text-center">
                    <p class="fs-5 col-md-10"><i class="far fa-clock fa-lg"></i> Senin | 18.00 - 20.00</p>
                    <p class="fs-5 col-md-5"><i class="far fa-user fa-lg"></i> Laki-laki</p>
                </div>
            </div>
        </div>
    </div>
@endsection