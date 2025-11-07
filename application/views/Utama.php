<?php
// Aktifkan error reporting sementara untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ambil jumlah barang masuk
$query = $this->db->query("SELECT COUNT(*) AS jum FROM barang_masuk");
$b = $query->row();
$jum_masuk = isset($b->jum) ? $b->jum : 0;

// Ambil jumlah total barang
$query = $this->db->query("SELECT COUNT(*) AS ni FROM barang");
$b1 = $query->row();
$total_barang = isset($b1->ni) && $b1->ni != 0 ? $b1->ni : 1;

// Hitung persentase barang masuk
$c = ($jum_masuk / $total_barang) * 100;

// Ambil jumlah barang keluar
$query = $this->db->query("SELECT COUNT(*) AS jum FROM barang_keluar");
$f = $query->row();
$jum_keluar = isset($f->jum) ? $f->jum : 0;

// Persentase barang keluar
$query = $this->db->query("SELECT COUNT(*) AS ni FROM barang");
$f1_row = $query->row();
$total_barang2 = isset($f1_row->ni) && $f1_row->ni != 0 ? $f1_row->ni : 1;
$f1 = ($jum_keluar / $total_barang2) * 100;

// Jumlah stok masuk
$query = $this->db->query("SELECT SUM(jml_masuk) AS jum FROM stok");
$h = $query->row();
$total_masuk = isset($h->jum) ? $h->jum : 0;

// Jumlah stok keluar
$query = $this->db->query("SELECT SUM(jml_keluar) AS jum FROM stok");
$h1 = $query->row();
$total_keluar = isset($h1->jum) ? $h1->jum : 0;

// Persentase stok
$j = ($total_masuk != 0) ? ($total_keluar / $total_masuk) * 100 : 0;
?>

<div class="col-xxl-3">
  <div class="row h-full" data-plugin="matchHeight">
    <div class="col-xxl-12 col-lg-4 col-sm-4">
      <div class="card card-shadow card-completed-options">
        <div class="card-block p-30">
          <div class="row">
            <div class="col-6">
              <div class="counter text-left blue-grey-700">
                <div class="counter-label mt-10">Barang Masuk
                </div>
                <div class="counter-number font-size-40 mt-10">
                  <?=$b->jum?>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                data-barcolor="#57c7d4" data-size="100" data-barsize="10" data-goal="<?=$c?>" aria-valuenow="<?=$c?>"
                role="progressbar">
                <span class="pie-progress-number blue-grey-700 font-size-20">
                  <?=number_format($c, 2, '.', '')?>%
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-12 col-lg-4 col-sm-4">
      <div class="card card-shadow card-completed-options">
        <div class="card-block p-30">
          <div class="row">
            <div class="col-6">
              <div class="counter text-left blue-grey-700">
                <div class="counter-label mt-10">Barang Keluar
                </div>
                <div class="counter-number font-size-40 mt-10">
                  <?=$f->jum?>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                data-barcolor="#62a8ea" data-size="100" data-barsize="10" data-goal="62" aria-valuenow="<?=$f1?>"
                role="progressbar">
                <span class="pie-progress-number blue-grey-700 font-size-20">
                  <?=number_format($f1, 2, '.', '')?>%
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xxl-12 col-lg-4 col-sm-4">
      <div class="card card-shadow card-completed-options">
        <div class="card-block p-30">
          <div class="row">
            <div class="col-6">
              <div class="counter text-left blue-grey-700">
                <div class="counter-label mt-10">Stok
                </div>
                <div class="counter-number font-size-40 mt-10">
                  <?=$h->jum?>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100"
                data-barcolor="#926dde" data-size="100" data-barsize="10" data-goal="<?=$j?>" aria-valuenow="<?=$j?>"
                role="progressbar">
                <span class="pie-progress-number blue-grey-700 font-size-20">
                  <?=number_format($j, 2, '.', '')?>%
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>