@extends('layouts.template')

@section('content')
    <h1 class="text-center">Donasi</h1>
    <hr class="border-success border-4 opacity-50">
    <div class="d-md-flex">
        <div class="side-content">
            <form action="" class="card mt-3 p-3 p-md-5" method="post">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nama :</label>
                    <div class="col-sm-10 mt-3">
                        <input type="text" class="form-control" id="name" name="name" autocomplete="off">
                    </div>
                    <label for="email" class="col-sm-2 col-form-label">Email :</label>
                    <div class="col-sm-10 mt-3">
                        <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                    </div>
                    <label for="no_telepon" class="col-sm-2 col-form-label">No Telepon :</label>
                    <div class="col-sm-10 mt-3">
                        <input type="number" class="form-control" id="no_telepon" name="no_telepon" autocomplete="off">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="type" class="col-sm-2 col-form-label">Metode Pembayaran :</label>
                    <div class="col-sm-10">
                        <select name="role" id="role" class="form-select" onchange="showModal()">
                            <option selected hidden disabled>Pilih Metode Yang Digunakan</option>
                            <option>Online Payment</option>
                            <option>Transfer via Rek</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Kirim</button>
            </form>
        </div>
        <div class="right-content mt-5 mt-md-3 ms-md-3">
            <table class="table table-bordered table-striped w-100">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Nominal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>1</td>
                        <td>Muklis Makmur Santoso</td>
                        <td>Rp. 200.000.000</td>
                    </tr>
                    <tr class="text-center">
                        <td>2</td>
                        <td>Muklis Makmur Yanto</td>
                        <td>Rp. 400.000.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="onlinePaymentModal" tabindex="-1" aria-labelledby="onlinePaymentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="onlinePaymentModalLabel">Online Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ URL::asset('img/bca.png') }}" alt="" class="mb-3" width="150">
                        <h5 class="text-center mb-3">9094 4349 4393 4349</h5>
                        <img src="{{ URL::asset('img/mandiri.png') }}" alt="" class="mb-3" width="150">
                        <h5 class="text-center mb-3">9094 4349 4393 4349</h5>
                        <h4 class="text-center">Atas Nama: "Masjid Nurul Amir"</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viaRekModal" tabindex="-1" aria-labelledby="viaRekModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viaRekModalLabel">Via Rek</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-around">
                    <div style="width: 50%;">
                        <img src="{{ URL::asset('img/qris.png') }}" class="card-img-top" alt="..." width="100%">
                        <div class="card-body text-center">
                            <p class="card-text">OVO</p>
                        </div>
                    </div>
                    <div style="width: 50%;">
                        <img src="{{ URL::asset('img/qris.png') }}" class="card-img-top" alt="..." width="100%">
                        <div class="card-body text-center">
                            <p class="card-text">QRIS</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- Add additional buttons if needed -->
                </div>
            </div>
        </div>
    </div>

    @push('script')
    <script>
        function showModal() {
            const selectedValue = document.getElementById('role').value;

            // Hide all modals
            $('#onlinePaymentModal').modal('hide');
            $('#viaRekModal').modal('hide');

            // Show the selected modal
            if (selectedValue === 'Online Payment') {
                $('#onlinePaymentModal').modal('show');
            } else if (selectedValue === 'Transfer via Rek') {
                $('#viaRekModal').modal('show');
            }
        }
    </script>
@endpush

@endsection
