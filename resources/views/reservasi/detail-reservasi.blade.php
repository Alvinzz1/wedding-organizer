@extends('dashboard.layout')
@section('content')

<main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Reservasi</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Detail Reservasi</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="/login" class="nav-link text-white font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Login</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <!-- Dropdown items -->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body px-4 pt-4 pb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mb-3">Informasi Reservasi</h6>
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <th scope="row" class=" text-secondary text-xs font-weight-bolder opacity-10">Nama Pasangan</th>
                                                <td class="text-xs font-weight-bold">: {{ $reservasi->name }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class=" text-secondary text-xs font-weight-bolder opacity-10">Nomor WhatsApp</th>
                                                <td class="text-xs font-weight-bold">: {{ $reservasi->telp }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class=" text-secondary text-xs font-weight-bolder opacity-10">Tanggal</th>
                                                <td class="text-xs font-weight-bold">: {{date('d-m-Y', strtotime($reservasi->reservation_date)) }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class=" text-secondary text-xs font-weight-bolder opacity-10">Waktu</th>
                                                <td class="text-xs font-weight-bold">: {{ $reservasi->reservation_time }} am</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class=" text-secondary text-xs font-weight-bolder opacity-10">Jumlah Person</th>
                                                <td class="text-xs font-weight-bold">: {{ $reservasi->person }} Orang</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class=" text-secondary text-xs font-weight-bolder opacity-10">Message</th>
                                                <td class="text-xs font-weight-bold">: {{ $reservasi->message }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6 class="mb-3">Pesan Konfirmasi</h6>
                                <form id="konfirmasiForm">
                                    <div class="mb-3">
                                        <label for="message" class="form-label text-secondary text-xs font-weight-bolder opacity-10">Pesan:</label>
                                        <textarea class="form-control text-xs font-weight-bold" id="message" rows="4">Reservasi Anda telah dikonfirmasi. Kami tunggu kehadiran Anda.</textarea>
                                    </div>
                                    @php
                                    $pesan = "Dear, " . $reservasi->name . "\n\nReservasi Anda telah berhasil dikonfirmasi. Kami dengan senang hati menantikan kedatangan Anda di Zayn Wedding!\n\nDetail Reservasi:\n- Tanggal: " . date('d-m-Y', strtotime($reservasi->reservation_date)) . "\n- Waktu: " . $reservasi->reservation_time . " am\n- Jumlah Orang: " . $reservasi->person . " Orang\n\nMessage: " . $reservasi->message . "\n\nMohon datang tepat waktu dan see you ♥️.";
    $wa_link = "https://wa.me/" . $reservasi->telp . "?text=" . urlencode($pesan);
@endphp

<a href="{{$wa_link}}" class="btn btn-primary float-end">
    Kirim Konfirmasi
</a>

                                </form>
                                <a href="{{ route('reservasi') }}"><button type="back" class="btn btn-primary">Back</button></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>



@endsection
