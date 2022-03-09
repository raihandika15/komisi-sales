@extends('layouts.app')

<link rel="stylesheet" href="/css/P_komisi.css">
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
                  <a class="nav-link active" aria-current="page" href="pengajuan_komisi">
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
                  <h1 class="h3"><b>Pengajuan Komisi</b></h3>
                  {{-- <caption><i>Slide to submit your commission</i></caption> --}}
              </div>
            </div>
            <div class="card-body">
              <form method="POST" action="/pengajuan_komisi_start">
                @csrf
                <div>
                  <h5><b>List</b></h5>
                </div>
                <div class="table-responsive" style="height: 420px">
                    <table mdbTable mdbTableScroll scrollY="true" class="table table-striped align-middle table-borderless" id="myTable">
                        <thead>
                            <tr>
                                <th><input type="checkbox" onchange="checkAll(this)"></th>
                                <th>PA ID</th>
                                <th>AR type</th>
                                <th>Customer Name</th>
                                <th>Segment</th>
                                <th>BA Date</th>
                                <th>Activation Actual Date</th>
                                <th>Deactivation Date</th>
                                <th>SID</th>
                                <th>Layanan</th>
                                <th>Quantity</th>
                                <th>Bandwith</th>
                                <th>Biaya Deaktivasi</th>
                                <th>Biaya Sewa</th>
                                <th>Biaya Installasi</th>
                                <th>Biaya Relokasi</th>
                                <th>Address Origination</th>
                                <th>Address Termination</th>
                                <th>Owner</th>
                                <th>BAA ID</th>
                                <th>Price Lama</th>
                                <th>SID Lama</th>
                                <th>No AL</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_pengajuan_komisi as $item)
                                <tr>
                                    <td style="width: 25%;"><label><input type="checkbox" value="{{ $item['id'] }}" name="id"></label></td>
                                    <td style="width: 25%;">{{ $item['no_pa'] }}</td>
                                    <td style="width: 25%;">{{ $item['ar_type'] }}</td>
                                    <td style="width: 25%;">{{ $item['cust_name'] }}</td>
                                    <td style="width: 25%;">{{ $item['segment'] }}</td>
                                    <td style="width: 25%;">{{ $item['ba_date'] }}</td>
                                    <td style="width: 25%;">{{ $item['active_date'] }}</td>
                                    <td style="width: 25%;">{{ $item['deactive_date'] }}</td>
                                    <td style="width: 25%;">{{ $item['sid'] }}</td>
                                    <td style="width: 25%;">{{ $item['layanan'] }}</td>
                                    <td style="width: 25%;">{{ $item['quantity'] }}</td>
                                    <td style="width: 25%;">{{ $item['bandwith'] }}</td>
                                    <td style="width: 25%;">{{ $item['biaya_deactive'] }}</td>
                                    <td style="width: 25%;">{{ $item['biaya_sewa'] }}</td>
                                    <td style="width: 25%;">{{ $item['biaya_instal'] }}</td>
                                    <td style="width: 25%;">{{ $item['biaya_relok'] }}</td>
                                    <td style="width: 25%;">{{ $item['address_ori'] }}</td>
                                    <td style="width: 25%;">{{ $item['address_term'] }}</td>
                                    <td style="width: 25%;">{{ $item['owner'] }}</td>
                                    <td style="width: 25%;">{{ $item['baa_id'] }}</td>
                                    <td style="width: 25%;">{{ $item['price_lama'] }}</td>
                                    <td style="width: 25%;">{{ $item['sid_lama'] }}</td>
                                    <td style="width: 25%;">{{ $item['no_al'] }}</td>
                                    <td style="width: 25%;">{{ $item['email'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>                  
                    </div>
                    <div class="col-md-12 mt-3">
                      <input type="submit" class="btn btn-warning" value="submit" style="color: #fff; border-radius:10px;">
                    </div>
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