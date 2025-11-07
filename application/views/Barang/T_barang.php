<div class="page">
  <div class="page-header">
    <h1 class="page-title">Form Barang</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>home">Home</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url() ?>Barang">Barang</a></li>
      <li class="breadcrumb-item active">Input</li>
    </ol>
  </div>
  <div class="page-content container-fluid">
    <div class="col-lg-6">
      <div class="panel">
        <div class="panel-body">
          <form action="<?= base_url('Barang/tambah_aksi'); ?>" method="POST" autocomplete="off">
            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Kode Barang <span class="required">*</span></label>
              <div class="col-xl-12 col-md-9">
                <input type="text" class="form-control" name="id_barang" placeholder="1" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Nama Barang <span class="required">*</span></label>
              <div class="col-xl-12 col-md-9">
                <input type="text" class="form-control" name="nama_barang" placeholder="Komputer" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Spesifikasi <span class="required">*</span></label>
              <div class="col-xl-12 col-md-9">
                <input type="text" class="form-control" name="spesifikasi" placeholder="Ram 4Gb, HDD 150Gb" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Lokasi <span class="required">*</span></label>
              <div class="col-xl-12 col-md-9">
                <input type="text" class="form-control" name="lokasi" placeholder="Gudang 1" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Kondisi <span class="required">*</span></label>
              <div class="col-xl-12 col-md-9">
                <input type="text" class="form-control" name="kondisi" placeholder="Baru" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Sumber Dana <span class="required">*</span></label>
              <div class="col-xl-12 col-md-9">
                <input type="text" class="form-control" name="sumber_dana" placeholder="UNIVERSITAS" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Jumlah Barang <span class="required">*</span></label>
              <div class="col-xl-12 col-md-9">
                <input type="number" class="form-control" name="jumlah_barang" placeholder="10" required>
              </div>
            </div>

            <div class="form-group col-xl-12 text-right padding-top-m">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>