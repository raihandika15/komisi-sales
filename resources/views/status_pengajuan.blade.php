@extends('layouts.app')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

<link rel="stylesheet" href="/css/status_pengajuan.css">
<link rel="shortcut icon" href="/img/logo-icon-plus.png">
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
                  <a class="nav-link" aria-current="page" href="home">
                    <span data-feather="home"></span>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="status_pengajuan">
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

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="card">
            <div class="card-header">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mt-2">
                    <h1 class="h3"><b>Status Pengajuan</b></h1>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <ul class="nav nav-tabs flex-column flex-sm-row nav-justified" id="nav-tab" role="tablist">
                  <li class="nav-item flex-column flex-sm-row" role="presentation">
                    <button class="nav-link active" id="komisi-tab" data-bs-toggle="tab" data-bs-target="#komisi" type="button" role="tab" aria-controls="komisi" aria-selected="true">Pengajuan Komisi</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="manual-tab" data-bs-toggle="tab" data-bs-target="#manual" type="button" role="tab" aria-controls="manual" aria-selected="false">Pengajuan Komisi Manual</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tender-tab" data-bs-toggle="tab" data-bs-target="#tender" type="button" role="tab" aria-controls="tender" aria-selected="false">Pengajuan Tender</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link " id="pelanggan-tab" data-bs-toggle="tab" data-bs-target="#pelanggan" type="button" role="tab" aria-controls="pelanggan" aria-selected="false">Pengajuan Pelanggan Baru</button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="komisi" role="tabpanel" aria-labelledby="komisi-tab"><br>
                    <h6><b> Status Pengajuan Komisi</b></h6>  
                    <table class="table table-sm align-middle caption-top table-borderless">
                      
                      <thead>
                          <tr>
                              {{-- <th><input type="checkbox" onchange="checkAll(this)"></th> --}}
                              <th>Date Submit</th>
                              <th>Sales Name</th>
                              <th>Manager Notes</th>
                              <th>HR Notes</th>
                              <th>Status</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($pengajuan_komisi as $pengajuan_komisi_attach)
                        <tr>
                            <td>{{ $pengajuan_komisi_attach->date_submit }}</td>
                            <td>{{ $pengajuan_komisi_attach->name }}</td>
                            <td></td>
                            <td></td>
                            <td>
                              {{-- <input type="Submit" class="btn btn-success btn-sm mt-3" onclick="return confirm('Apakah anda ingin klaim komisi?')"><span data-feather="check-circle"></span></input> --}}
                            </td>        
                        </tr>
                        @endforeach
                      </tbody>
                    </table><hr>
                  </div>
                  
                  <div class="tab-pane fade" id="manual" role="tabpanel" aria-labelledby="manual-tab"><br>
                    <h6><b> Status Pengajuan Komisi Manual</b></h6>
                    <table class="table table-sm align-middle caption-top table-borderless">
                      <thead>
                          <tr>
                              {{-- <th><input type="checkbox" onchange="checkAll(this)"></th> --}}
                              <th scope="col">Date Submit</th>
                              <th scope="col">Sales Name</th>
                              <th scope="col">Manager Notes</th>
                              <th scope="col">HR Notes</th>
                              <th scope="col">Status</th>
                              {{-- <th scope="col">Action</th> --}}
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($pengajuan_manual as $pengajuan_manuals)
                        <tr>
                            <td>{{ $pengajuan_manuals->created_at }}</td>
                            <td>{{ $pengajuan_manuals->name }}</td>
                            <td></td>
                            <td></td>
                            <td>
                              {{-- <input type="Submit" class="btn btn-success btn-sm mt-3" onclick="return confirm('Apakah anda ingin klaim komisi?')"><span data-feather="check-circle"></span></input> --}}
                            </td>  
                        </tr>
                          
                        @endforeach

                      </tbody>
                    </table><hr>
                  </div>

                  <div class="tab-pane fade" id="tender" role="tabpanel" aria-labelledby="tender-tab"><br>
                    <h6><b>Status Pengajuan Tender</b></h6>
                    <table class="table table-sm align-middle caption-top table-borderless">
                      <thead>
                          <tr>
                              {{-- <th><input type="checkbox" onchange="checkAll(this)"></th> --}}
                              <th scope="col">Date Submit</th>
                              <th scope="col">Sales Name</th>
                              <th scope="col">Manager Notes</th>
                              <th scope="col">HR Notes</th>
                              <th scope="col">Status</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($pengajuan_tender as $pengajuan_tenders)
                        <tr>
                            <td>{{ $pengajuan_tenders->created_at }}</td>
                            <td scope="row">{{ $pengajuan_tenders->name }}</td>
                            <td></td>
                            <td></td>
                            <td>
                              {{-- <input type="Submit" class="btn btn-success btn-sm mt-3" onclick="return confirm('Apakah anda ingin klaim komisi?')"><span data-feather="check-circle"></span></input> --}}
                            </td> 
                        </tr>                  
                        @endforeach
                      </tbody>
                    </table><hr>
                  </div>

                  <div class="tab-pane fade" id="pelanggan" role="tabpanel" aria-labelledby="pelanggan-tab"><br>
                    <h6><b>Status Pengajuan Pelanggan Baru</b></h6>
                    <table class="table table-sm align-middle caption-top table-borderless">
                      <thead>
                          <tr>
                              {{-- <th><input type="checkbox" onchange="checkAll(this)"></th> --}}
                              <th scope="col">Date Submit</th>
                              <th scope="col">Sales Name</th>
                              <th scope="col">Manager Notes</th>
                              <th scope="col">HR Notes</th>
                              <th scope="col">Status</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($pelanggan_baru as $pelanggan_baru_attach)
                        <tr>
                            {{-- <td style="width: 25%;"><label><input type="checkbox" value="{{ $item['pa_id'] }}" name="id"></label></td> --}}
                            <td>{{ $pelanggan_baru_attach->date_submit }}</td>
                            <td scope="row">{{ $pelanggan_baru_attach->name }}</td>
                            <td></td>
                            <td></td>
                            <td>
                              {{-- <input type="Submit" class="btn btn-success btn-sm mt-3" onclick="return confirm('Apakah anda ingin klaim komisi?')"><span data-feather="check-circle"></span></input> --}}
                            </td> 
                        </tr>
                        @endforeach
                      </tbody>
                    </table><hr>
                  </div>
                </div>
              </div>
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

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  {{-- <script src="js/dashboard.js"></script> --}}
  @endsection
