<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=laporan.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<table width='80%' align='center' border=1>
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Level</th>
    </tr>
  </thead>
  <?php	
						error_reporting(0);
						$no=1;
						
						$sql="SELECT*FROM  `user`";
						$query = $this->db->query($sql);
						foreach ($query->result() as $prodi)
						{
						 ?>
  <tbody>
    <tr>
      <td align='center'><?=$no?></td>
      <td align='center'><?=$prodi->nama?></td>
      <td><?=$prodi->username?></td>
      <td align='center'><?=$prodi->level?></td>
    </tr>
  </tbody>
  <?php
						$no++;
						}
						?>
</table>