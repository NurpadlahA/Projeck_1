<?php 
include_once 'header.php';
include_once 'setbar.php';
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3>
				Detail Belanja Anda :
</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

            <!-- Main content -->
            <section class="content">

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>

    <!-- Main content -->
    <section class="content">
    <div class="col-md-4">

      <?php
$nama = $_POST['customer'];
$pilih_produk = $_POST['Produk'];
$jumlah_barang = $_POST['jumlah'];
if($pilih_produk == "TV"){
  $harga_produk = 4200000;
}elseif($pilih_produk == "Kulkas"){
  $harga_produk = 3100000;
}elseif($pilih_produk == "Mesin Cuci" ){
  $harga_produk = 3800000;
}else{
  $harga_produk = "I(tidak ada nilai)";
}
$total = $harga_produk*$jumlah_barang;

echo "Nama Customer : $nama";
echo "</br>Produk Pilihan : $pilih_produk";
echo "</br>Jumlah Beli : $jumlah_barang";
echo "</br>Total Belanja : $total";

?>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
               Terimakasih
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php 
include_once 'foother.php';
?>
</body>
</html>