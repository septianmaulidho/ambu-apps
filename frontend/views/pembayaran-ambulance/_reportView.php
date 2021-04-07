<table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor Pesanan</th>
      <th scope="col">Nama Pemesan</th>
      <th scope="col">NIK Pemesan</th>
      <th scope="col">Alamat Pemesan</th>
      <th scope="col">Nomor Hp Pemesan</th>
      <th scope="col">Jarak Tambahan</th>
      <th scope="col">Alamat Pemesan</th>
      <th scope="col">Jarak Tambahan</th>
      <th scope="col">Total Tarif</th>
      <th scope="col">Nomor Bukti Pembayaran</th>
      <th scope="col">Tanggal Bukti Pembayaran</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?=$model->nomor_pesanan;?></td>
      <td><?=$model->nama_pemesan;?></td>
      <td><?=$model->nik_pemesan;?></td>
      <td><?=$model->alamat_pemesan;?></td>
      <td><?=$model->nomor_hp_pemesan;?></td>
      <td><?=$model->daerah_tujuan;?></td>
      <td><?=$model->perkiraan_jarak_tempuh;?></td>
      <td><?=$model->tarif;?></td>
      <td><?=$model->nomor_polisi_mobil_ambulance;?></td>
      <td><?=$model->nama_supir;?></td>

    </tr>
  </tbody>
</table>