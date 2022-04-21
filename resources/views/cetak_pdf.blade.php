<div class="table-responsive">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mt-2">
        <p class="h3" align="center"><b>Report Komisi</b>
    </div>
    <table mdbTable mdbTableScroll scrollY="true" class="table table-sm align-middle table-bordered" id="myTable">
      <thead>
        <tr>
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
        @foreach ($data_export as $recaps)
          <tr>
            <td>{{ $loop->iteration }}</td>
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

<script type="text/javascript">
  window.print();
</script>