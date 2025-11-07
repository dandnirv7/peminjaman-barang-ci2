<table width='80%' align='center' border=1>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Barang Masuk</th>
      <th scope="col">Barang Keluar</th>
      <th scope="col">Stok</th>
    </tr>
  </thead>
  <?php	
						error_reporting(0);
						$no=1;
						
						$sql="SELECT*FROM stok";
						$query = $this->db->query($sql);
						foreach ($query->result() as $prodi)
						{
						 ?>
  <tbody>
    <tr>
      <td align='center'><?=$no?></td>
      <td align='center'><?=$prodi->id_barang?></td>
      <td><?=$prodi->nama_barang?></td>
      <td align='center'><?=$prodi->jml_masuk?></td>
      <td align='center'><?=$prodi->jml_keluar?></td>
      <td align='center'><?=$prodi->total_barang?></td>
    </tr>
  </tbody>
  <?php
						$no++;
						}
						?>
</table>
 