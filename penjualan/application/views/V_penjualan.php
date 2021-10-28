<div class="kanan">
  <h2>Produk</h2>
  <table>
    <tr>
      <td>No</td>
      <td>Nama produk</td>
      <td>Harga Satuan</td>
      <td>Stok</td>
      <td>Action</td>
    </tr>
    <?php $no =1 ;foreach($produk as $dproduk):?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $dproduk -> nama_produk; ?></td>
      <td>Rp.<?php echo number_format($dproduk -> harga_satuan) ; ?></td>
      <td><?php echo $dproduk -> stok; ?></td>
      <td><a href="<?php echo base_url().'C_penjualan/beli/'.
      $dproduk -> id_produk; ?>"onclick="return confirm ('Yakin ingin menambahkan ?')">Beli</a>
    </td>
    </tr>
    <?php $no ++;endforeach; ?>
  </table>
</div>
<div class="kanan">
  <h2>Keranjang</h2>
  <h4>Kode <?php echo $kode_jual; ?></h4>
  <table>
    <tr>
      <td>No</td>
      <td>Nama barang</td>
      <td>Harga satuan</td>
      <td>Jumlah Beli</td>
      <td>Total</td>
      <td>Action</td>
    </tr>
    <?php $no =1;foreach ($detail_beli as $dbeli): ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $dbeli -> nama_produk; ?></td>
      <td>Rp.<?php echo number_format($dbeli -> harga_satuan); ?></td>
      <td><?php echo $dbeli -> jumlah_beli; ?></td>
      <td> Rp.<?php echo number_format($dbeli -> total_harga); ?></td>
      <td><a href="<?php echo base_url ().'C_penjualan/hapus/'.
      $kode_jual.'-'.$dbeli -> id_produk; ?>"onclick="return confirm
      ('Apakah yakin ingin menghapus Pesanan ?')">Hapus</a>
    </td>
    </tr>
    <?php $no++;endforeach; ?>
    <tr>
      <td colspan="4"> <strong>Total</strong></td>
      <td colspan="2"> <strong>RP.<?php echo number_format($sub_total->total); ?></strong> </td>
    </tr>
  </table>
  <a href="<?php echo base_url().'C_penjualan/cekout/'.$sub_total->total; ?>">Cekout</a>
</div>
