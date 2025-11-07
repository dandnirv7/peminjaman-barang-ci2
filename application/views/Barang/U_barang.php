<?php
						$count = 0;
						foreach ($Barang->result() as $ubah) :
						$count++;
?>
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Form Barang</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>Home">Home</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url() ?>Barang">Barang</a></li>
      <li class="breadcrumb-item active">Update</li>
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
          <form action='<?php echo base_url(). 'Barang/update'; ?>' method='POST' id="exampleFullForm"
            autocomplete="off">
            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Kode Barang
                <span class="required">*</span>
              </label>
              <div class=" col-xl-12 col-md-9">
                <input type="text" class="form-control" name="id_barang" placeholder="1" value="<?=$ubah->id_barang?>"
                  required="" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Nama Barang
                <span class="required">*</span>
              </label>
              <div class=" col-xl-12 col-md-9">
                <input type="text" class="form-control" name="nama_barang" placeholder="Komputer"
                  value="<?=$ubah->nama_barang?>" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Spesifikasi
                <span class="required">*</span>
              </label>
              <div class=" col-xl-12 col-md-9">
                <input type="text" class="form-control" name="spesifikasi" placeholder="Ram 4Gb, HDD 150Gb"
                  value="<?=$ubah->spesifikasi?>" required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Lokasi
                <span class="required">*</span>
              </label>
              <div class=" col-xl-12 col-md-9">
                <input type="text" class="form-control" name="lokasi" placeholder="Gudang 1" value="<?=$ubah->lokasi?>"
                  required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Kondisi
                <span class="required">*</span>
              </label>
              <div class=" col-xl-12 col-md-9">
                <input type="text" class="form-control" name="kondisi" placeholder="Baru" value="<?=$ubah->kondisi?>"
                  required="">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Sumber Dana
                <span class="required">*</span>
              </label>
              <div class=" col-xl-12 col-md-9">
                <input type="text" class="form-control" name="sumber_dana" placeholder="UNIVERSITAS"
                  value="<?=$ubah->sumber_dana?>" required="">
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
<?php endforeach;?>