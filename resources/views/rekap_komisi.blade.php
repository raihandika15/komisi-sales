@extends('layouts.app')

<link rel="stylesheet" href="/css/rekap_komisi.css">
<link rel="shortcut icon" href="/img/logo-icon-plus.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">

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
                  <a class="nav-link active" aria-current="page" href="rekap_komisi">
                    <span data-feather="clipboard"></span>
                    Rekap Komisi
                  </a>
                </li>
              </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="overflow: auto">
          <div class="card">
            <div class="card-header">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mt-2">
                    <h1 class="h3"><b>Report Komisi</b></h1>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-auto me-auto">
                  <h5><b>List</b></h5>
                </div>
                <div class="col-auto">
                  <a href="/export_pdf" class="btn btn-danger mb-3" type="button" target="_blank"><span data-feather="printer"></span> Cetak</a>
                </div>
                
              </div>
              <div class="table-responsive">
                <table mdbTable mdbTableScroll scrollY="true" class="table table-sm align-middle " id="myTable">
                  <thead>
                    <tr>
                      {{-- <th><input type="checkbox" onchange="checkAll(this)"></th> --}}
                      <th>No</th>
                      <th>Nama</th>
                      <th>Departemen</th>
                      <th>Target Bulanan</th>
                      <th>Realisasi Bulanan</th>
                      <th>Nilai Deaktivasi</th>
                      <th>Pencapaian setelah deaktivasi</th>
                      <th>Nilai Komisi</th>
                      <th>Jumlah Pelanggan Baru</th>
                      <th>List Pelanggan Baru</th>
                      <th>Nilai Pelanggan Baru</th>
                      <th>Jumlah Tender</th>
                      <th>Nilai Tender</th>
                      <th>Total Dibayarkan</th>
                      <th>Periode Pembayaran</th>
                      <th>Periode Klaim</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_rekap_komisi as $recaps)
                      <tr>
                        {{-- <td><input type="checkbox" value="{{ $recaps['id'] }}" name="id"></td> --}}
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $recaps['name'] }}</td>
                        <td>{{ $recaps['departmen'] }}</td>
                        <td>{{ $recaps['target_bulanan'] }}</td>
                        <td>{{ $recaps['realisasi_bulanan'] }}</td>
                        <td>{{ $recaps['nilai_deaktivasi'] }}</td>
                        <td>{{ $recaps['after_deaktivasi'] }}</td>
                        <td>{{ $recaps['nilai_komisi'] }}</td>
                        <td>{{ $recaps['jumlah_pelangganBaru'] }}</td>
                        <td>{{ $recaps['list_pelangganBaru'] }}</td>
                        <td>{{ $recaps['nilai_pelangganBaru'] }}</td>
                        <td>{{ $recaps['jumlah_tender'] }}</td>
                        <td>{{ $recaps['nilai_tender'] }}</td>
                        <td>{{ $recaps['total_dibayarkan'] }}</td>
                        <td>{{ $recaps['period_pembayaran'] }}</td>
                        <td>{{ $recaps['period_klaim'] }}</td>
                        <td>{{ $recaps['keterangan'] }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
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

{{-- Script --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="/js/checkbox.js"></script>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>
@endsection