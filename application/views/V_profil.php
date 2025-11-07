<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$count = 0;
foreach ($Profil->result() as $ubah) :
    $count++;
    // Pastikan ada gambar, jika tidak pakai default
    $data_gambar = isset($ubah->gambar) && !empty($ubah->gambar) ? $ubah->gambar : 'default.png';
?>
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Form Profil</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url() ?>Home">Home</a></li>
      <li class="breadcrumb-item active">Profil</li>
    </ol>
    <div class="page-header-actions">
      <a class="btn btn-sm btn-default btn-outline btn-round" href="https://universitas.banisaleh.ac.id"
        target="_blank">
        <i class="icon wb-link" aria-hidden="true"></i>
        <span class="hidden-sm-down">Official Website</span>
      </a>
    </div>
  </div>
  <div class="page-content container-fluid">
    <div class="col-lg-6">
      <div class="panel">
        <div class="panel-body">
          <form action='<?= base_url('Profil/update'); ?>' method='POST' id="exampleFullForm" autocomplete="off"
            enctype="multipart/form-data">

            <!-- Nama Lengkap -->
            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Nama Lengkap
                <span class="required">*</span>
              </label>
              <div class="col-xl-12 col-md-9">
                <input type="hidden" name="id" id="id" value="<?= $ubah->id_user ?>" />
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap"
                  value="<?= $ubah->nama ?>" required="">
              </div>
            </div>

            <!-- Foto Profil -->
            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Foto
                <span class="required">*</span>
              </label>
              <div class="col-xl-12 col-md-9">
                <input type="file" name='gambar' id="gambar" class="form-control" data-plugin="dropify"
                  data-default-file="<?= base_url('foto/' . $data_gambar) ?>" />
              </div>
            </div>

            <!-- Username -->
            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Username
                <span class="required">*</span>
              </label>
              <div class="col-xl-6 col-md-9">
                <input type="text" class="form-control" name="akun" placeholder="Username"
                  value="<?= $ubah->username ?>" required="">
              </div>
            </div>

            <!-- Password -->
            <div class="form-group row">
              <label class="col-xl-12 col-md-3 form-control-label">Password
                <span class="required">*</span>
              </label>
              <div class="col-xl-6 col-md-9">
                <input type="text" class="form-control" name="sandi" placeholder="Password"
                  value="<?= $ubah->password ?>" required="">
              </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group col-xl-12 text-center padding-top-m">
              <button type="submit" class="btn btn-primary" id="validateButton1">Submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>