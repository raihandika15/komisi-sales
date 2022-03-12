@extends('layouts.app')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

<link rel="stylesheet" href="/css/home.css">
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
                  <a class="nav-link active" aria-current="page" href="home">
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
                    <h1 class="h3"><b>Dashboard</b></h1>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <h4 style="color: blue">Grafik Pendapatan Komisi</h4>
                {{-- Grafik Pendapatan --}}
                <canvas class="my-4 w-100" id="myChart" width="900" height="360"></canvas><hr>

                {{-- Status Pengajuan Komisi --}}
                  <table class="table table-sm align-middle caption-top table-borderless">
                      <caption>Status Pengajuan Komisi</caption>
                      <thead>
                          <tr>
                              <th>Sales Name</th>
                              <th>Manager Notes</th>
                              <th>HR Notes</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($pengajuan_komisi as $pengajuan_komisi_attach)
                        <tr>
                            <td>{{ $pengajuan_komisi_attach->name }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                              <form action="" method="">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mt-3" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span data-feather="trash-2"></span></button>
                              </form>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table><hr>
                {{-- Status Pengajuan Komisi Manual --}}
                  <table class="table table-sm align-middle caption-top table-borderless">
                      <caption>Status Pengajuan Komisi Manual</caption>
                      <thead>
                          <tr>
                              <th scope="col">Sales Name</th>
                              <th scope="col">Manager Notes</th>
                              <th scope="col">HR Notes</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($pengajuan_manual as $pengajuan_manuals)
                        <tr>
                            <td>{{ $pengajuan_manuals->cust_name }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                              <form>
                                <a href="home/destroy/{{ $pengajuan_manuals->id }}" class="btn btn-danger btn-sm mt-3" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span data-feather="trash-2"></span></a>
                              </form>
                            </td>
                        </tr>
                          
                        @endforeach

                      </tbody>
                  </table><hr>
                {{-- Status Pengajuan Tender --}}
                  <table class="table table-sm align-middle caption-top table-borderless">
                      <caption>Status Pengajuan Tender</caption>
                      <thead>
                          <tr>
                              <th scope="col">Sales Name</th>
                              <th scope="col">Manager Notes</th>
                              <th scope="col">HR Notes</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($pengajuan_tender as $pengajuan_tenders)
                        <tr>
                            <td scope="row">{{ $pengajuan_tenders->cust_name }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                              {{-- {{ route('pengajuan_manual.destroy', $pengajuan_tenders->id) }} --}}
                              <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mt-3" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span data-feather="trash-2"></span></button>
                              </form>
                            </td>
                        </tr>                  
                        @endforeach
                      </tbody>
                  </table><hr>
                {{-- Status Pengajuan Pelanggan baru --}}
                    <table class="table table-sm align-middle caption-top table-borderless">
                        <caption>Status Pengajuan Pelanggan Baru</caption>
                        <thead>
                            <tr>
                                <th scope="col">Sales Name</th>
                                <th scope="col">Manager Notes</th>
                                <th scope="col">HR Notes</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($pelanggan_baru as $pelanggan_baru_attach)
                          <tr>
                              <td scope="row">{{ $pelanggan_baru_attach->name }}</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td>
                                <form action="" method="">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger btn-sm mt-3" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><span data-feather="trash-2"></span></button>
                                </form>
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table><hr>
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
  <script src="js/dashboard.js"></script>
  @endsection
