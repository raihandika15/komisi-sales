@extends('layouts.app')

<link rel="shortcut icon" href="/img/logo-icon-plus.png">
<link rel="stylesheet" href="/css/P_tender.css">
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
                      <a class="nav-link " aria-current="page" href="status_pengajuan">
                        <span data-feather="activity"></span>
                        Status Pengajuan
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pengajuan_komisi">
                        <span data-feather="file-plus"></span>
                        Pengajuan Komisi
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pengajuan_manual">
                        <span data-feather="file-text"></span>
                        Pengajuan Komisi Manual
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="pengajuan_tender">
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
                        <h1 class="h3"><b>Pengajuan Tender</b></h1>
                  </div>
                </div>
                <div class="card-body">
                  <form action="/pengajuan_tender_start" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                      <h5 style="color: blue">Pengajuan Tender</h5>
                      <label for="formFile" class="form-label">Upload Bukti Menang Tender (Format PDF)</label>
                      <input class="form-control" type="file" id="formFile" name="file">
                    </div>
                    <div class="row g-3 mb-2">
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Email</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="email">
                      </div>
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="name">
                      </div>
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="cust_name">
                      </div>
                    </div>
                    <div class="row g-3 mb-2">
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Segment</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="segment">                  
                      </div>
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Tanggal Tender</label>
                        <input type="date" class="form-control" id="formGroupExampleInput" placeholder="" name="date">
                      </div>
                    </div>
                    <div class="row g-3 mb-2">
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Layanan</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="layanan">
                      </div>
                      <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Nilai Tender</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="nilai_tender">
                      </div>
                    </div>
                    <div class="mb-2">
                      <label for="formGroupExampleInput" class="form-label">Lokasi Tender</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="lokasi_tender">
                    </div>
                    <input type="Submit" class="btn btn-primary mt-4 mb-4" style="border-radius: 10px;">
                  </form>
                </div>
              </div>
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