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
            <p>Membuat kelas perhitungan persegi panjang adalah salah satu tugas praktikum 4</p>
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
<?php 
// memanggil file class_persegipanjang
require_once 'class_persegipanjang.php';
$persegi1 = new PersegiPanjang(5,10);
$persegi2 = new PersegiPanjang(10,20);
echo "<br/>";
// menghitung luas Persegi Panjang fungsi getluas
echo "<br/> Luas Persegi Panjang I adalah = " .$persegi1->getluas();
echo "<br/> Luas Persegi Panjang II adalah = " .$persegi2->getluas();
echo "<br/>";

// mengiting keliling Persegi Panjang mengunakan fungsi keliling
echo "<br/> Keliling Persegi panjang I adalah = " .$persegi1->getkeliling();
echo "<br/> Keliling Persegi Panjang II adalah = " .$persegi2->getkeliling();
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
                semangat !
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