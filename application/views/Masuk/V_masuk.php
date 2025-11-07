<div class="page">
  <div class="page-header">
    <h1 class="page-title">Form Barang Masuk</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>home">Home</a></li>
      <li class="breadcrumb-item active">Barang Masuk</li>
    </ol>
    <div class="page-header-actions">
      <a class="btn btn-sm btn-default btn-outline btn-round" href="universitas.banisaleh.ac.id" target="_blank">
        <i class="icon wb-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">Official Website</span>
      </a>
    </div>
  </div>
  <div class="page-content container-fluid">
    <div class="panel">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-15">
              <a href='<?php echo base_url(). 'Masuk/tambah'; ?>'>
                <button id="addToTable" class="btn btn-outline btn-primary" type="button">
                  <i class="icon wb-plus" aria-hidden="true"></i> Add row
                </button>
              </a>
            </div>
          </div>
        </div>
        <table class="table table-bordered table-hover table-striped" cellspacing="0" id="exampleAddRow">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Barang</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Kode Supplier</th>
              <th scope="col">#</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Barang</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Kode Supplier</th>
              <th scope="col">#</th>
            </tr>
          </tfoot>
          <?php	
						error_reporting(0);
						$no=1;						
						$sql="SELECT*FROM barang_masuk ORDER BY id_barang DESC";
						$query = $this->db->query($sql);
						foreach ($query->result() as $prodi)
						{
						 ?>
          <tbody>
            <tr>
              <td><?=$no?></td>
              <td><?=$prodi->id_barang?></td>
              <td><?=$prodi->nama_barang?></td>
              <td><?=$prodi->tgl_masuk?></td>
              <td><?=$prodi->jml_masuk?></td>
              <td><?=$prodi->id_supplier?></td>
              <td class="actions">
                <a href="<?php echo base_url(). 'Masuk/hapus/'.$prodi->id_barang;?>">
                  <button type="button" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row"
                    data-toggle="tooltip" data-original-title="Batal"><i class="icon wb-trash" aria-hidden="true"></i>
                  </button>
                </a>
              </td>
            </tr>
          </tbody>
          <?php
						$no++;
						}
						?>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Second Row -->