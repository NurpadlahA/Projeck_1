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
            <h1>Keterangan :</h1>
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
<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['name'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$total = $uts + $uas + $tugas;
$alphabet = $total/3;
if($alphabet <= 55){
    $lulus = "Anda Tidak Lulus";
}else{
    $lulus ="Selamat Anda Lulus";
}
if($alphabet >= 85){
    $grade = "A";
}elseif($alphabet >= 70){
    $grade = "B";
}elseif($alphabet >= 56){
    $grade = "C";
}elseif($alphabet >= 36){
    $grade = "D";
}elseif($alphabet >= 10){
    $grade = "E";
}else{
    $grade = "I(tidak ada nilai)";
}

if(!empty($proses)){
echo "Nama : $nama_siswa";
echo "</br>Mata kuliah : $mata_kuliah";
echo "</br>Nilai UTS: $uts";
echo "</br>Nilai UAS : $uas";
echo "</br>tugas : $tugas";
echo "</br>Grade: $grade";
echo "</br>Keterangan: $lulus";
echo "</br>Data Telah Di: $proses";
}
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
</body>
</html>