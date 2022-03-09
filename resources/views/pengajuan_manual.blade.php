@extends('layouts.app')

<link rel="shortcut icon" href="/img/logo-icon-plus.png">
<link rel="stylesheet" href="/css/P_manual.css">
@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-primary sidebar collapse">
                <div class="position-sticky">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page">
                        <span data-feather="navigation"></span>
                        Navigasi
                      </a><hr style="color: #fff">
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="home">
                        <span data-feather="home"></span>
                        Dashboard
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pengajuan_komisi">
                        <span data-feather="file-plus"></span>
                        Pengajuan Komisi
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="pengajuan_manual">
                        <span data-feather="file-text"></span>
                        Pengajuan Komisi Manual
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pengajuan_tender">
                        <span data-feather="bar-chart-2"></span>
                        Pengajuan Tender
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pelanggan_baru">
                        <span data-feather="user"></span>
                        Pengajuan Pelanggan Baru
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="rekap_komisi">
                        <span data-feather="clipboard"></span>
                        Rekap Komisi
                      </a>
                    </li>
                  </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="overflow: auto" id="main">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mt-2">
                        <h1 class="h3"><b>Pengajuan Komisi Manual</b></h1>
                  </div>
                </div>
                <div class="card-body">
                  <form action="/pengajuan_manual_start" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                      <h5 style="color: blue">Pengajuan Komisi Manual</h5>
                      <label for="formFile" class="form-label">Upload file (Format PDF)</label>
                      <input class="form-control" type="file" id="formFile" name="file">
                    </div>

                    <div class="row g-3 mb-2">
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Email</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="email">
                      </div>
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="cust_name">
                      </div>
                    </div>

                    <div class="row g-3 mb-2">
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Nomor PA</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="no_pa">                  
                      </div>
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Nomor AL</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="no_al">
                      </div>
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Type</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="ar_type">
                      </div>
                    </div>

                    <div class="row g-3 mb-2">
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Layanan</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="layanan">
                      </div>
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Kapasitas</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="kapasitas">
                      </div>
                    </div>

                    <div class="mb-2">
                      <label for="formGroupExampleInput" class="form-label">Address Originating</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="address_ori">
                    </div>

                    <div class="mb-2">
                      <label for="formGroupExampleInput" class="form-label">Address Terminating</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="address_term">
                    </div>

                    <div class="row g-3 mb-2">
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Nomor BAA</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="baa_id">
                      </div>
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Nomor Dokumen Penagihan</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="no_dok">
                      </div>
                    </div>

                    <div class="row g-3 mb-2">
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Price Lama</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="price_lama">
                      </div>
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Biaya Sewa</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="biaya_sewa">
                      </div>
                    </div>

                    <div class="row g-3 mb-2">
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Biaya Instalasi</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="biaya_instal">
                      </div>
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Biaya Deaktivasi</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="biaya_deactive">
                      </div>
                    </div>

                    <input type="submit" class="btn btn-primary mt-2" style="border-radius: 10px;">
                  </form>
                </div>
              </div>

                {{-- @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                    <p>{{ $message }}</p>
                  </div>
                @endif --}}

            </main>
        </div>
    </div>

    {{-- Footer --}}
    {{-- <div class="footer" width="100%">
      <div class="col text-center" style="font-size: 12px">
        <p>Copyright &copy; 2022 PT Indonesia Comnets Plus. All Rights Reserved.</p>
      </div>
    </div> --}}
@endsection