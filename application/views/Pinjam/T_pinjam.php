  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Form Pinjam</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>home">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url() ?>Pinjam">Pinjam</a></li>
        <li class="breadcrumb-item active">Input</li>
      </ol>
      <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="universitas.banisaleh.ac.id" target="_blank">
          <i class="icon wb-link" aria-hidden="true"></i>
          <span class="hidden-sm-down">Official Website</span>
        </a>
      </div>
    </div>
    <div class="page-content container-fluid">
      <div class="col-lg-6">
        <!-- End Completed Options Pie Widgets -->
        <div class="panel">
          <div class="panel-body">
            <form action='<?php echo base_url(). 'Pinjam/tambah_aksi'; ?>' method='POST' id="exampleFullForm"
              autocomplete="off">
              <div class="form-group row">
                <label class="col-xl-12 col-md-3 form-control-label">Kode Peminjam
                  <span class="required">*</span>
                </label>
                <div class=" col-xl-12 col-md-9">
                  <input type="text" class="form-control" name="id_pinjam" placeholder="1" required="">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-12 col-md-3 form-control-label">Nama Peminjam
                  <span class="required">*</span>
                </label>
                <div class=" col-xl-12 col-md-9">
                  <input type="text" class="form-control" name="peminjam" placeholder="STIKES" required="">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-12 col-md-3 form-control-label">Tanggal Pinjam
                  <span class="required">*</span>
                </label>
                <div class=" col-xl-12 col-md-9">
                  <input type="date" class="form-control" name="tgl_pinjam" required="">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-12 col-md-3 form-control-label">Jumlah
                  <span class="required">*</span>
                </label>
                <div class=" col-xl-12 col-md-9">
                  <input type="text" class="form-control" name="jml_barang" placeholder="5" required="">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-12 col-md-3 form-control-label">Barang
                  <span class="required">*</span>
                </label>
                <div class=" col-xl-12 col-md-9">
                  <?php
					
						$sql="SELECT*FROM barang";
						//echo fdebug($sql);
						$query = $this->db->query($sql);
						foreach ($query->result() as $prodi)
						{
					?>
                  <div>
                    <div class="radio-custom radio-primary">
                      <input type="radio" id="<?=$prodi->id_barang?>" name="id_barang" value="<?=$prodi->id_barang?>"
                        required="">
                      <label for="<?=$prodi->id_barang?>"><?=$prodi->nama_barang?></label>
                    </div>
                  </div>
                  <?php
						}
					 ?>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-12 col-md-3 form-control-label">Tanggal Kembali
                  <span class="required">*</span>
                </label>
                <div class=" col-xl-12 col-md-9">
                  <input type="date" class="form-control" name="tgl_kembali">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-12 col-md-3 form-control-label">Kondisi
                  <span class="required">*</span>
                </label>
                <div class=" col-xl-12 col-md-9">
                  <input type="text" class="form-control" name="kondisi" placeholder="Baru">
                </div>
              </div>
              <div class="form-group col-xl-12 text-right padding-top-m">
                <button type="submit" class="btn btn-primary" id="validateButton1">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>