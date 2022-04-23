<?php
require_once 'class_pasien.php';

$pasien1 = new Pasien('P001','Ahmad', 'L','2022-01-10', 69.8, 169, 24.7, 'Kelebihan Berat Badan');
$pasien2 = new Pasien('P002','Rina', 'P','2022-01-10', 55.3, 165, 20.3, 'Normal(Ideal)');
$pasien3 = new Pasien('P003','Lutfi', 'L','2022-01-11', 42.5, 171, 15.4, 'Kekurangan Berat Badan');

$ar_bmi =[$pasien1, $pasien2, $pasien3];
?>
<?php
$tanggal_t = $_POST['tanggal'];
$kode_k = $_POST['kode'];
$nama_n = $_POST['nama'];
$gender_g = $_POST['gender'];
$berats = $_POST['berat'];
$tinggis= $_POST['tinggi'];
$tb = $tinggis / 100;
$total = $berats / ($tb* $tb);
if($total <= 18.5){
  $maka = "Kekurangan Berat Badan";
}elseif($total <= 24.9){
  $maka = "Normal (Ideal)";
}elseif($total <= 29.9){
  $maka = "Kelebihan Berat Badan";
}elseif($total >= 30.0){
  $maka = "Kegemukan (Obesitas)";
}else{
  $maka = "I(tidak ada nilai)";
}
?>




<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Periksa</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Gender</th>
            <th>Berat</th>
            <th>Tinggi</th>
            <th>Nilai BMI</th>
            <th>Status Bmi</th>
        </tr>
        <tbody>
        <?php 
        $nomor = 1;
      
        foreach ($ar_bmi as $mhs){
        ?>
        <tr>
            <td><?php echo $nomor?></td>
            <td><?php echo $mhs->tanggal?></td>
            <td><?php echo $mhs->kode?></td>
            <td><?php echo $mhs->nama?></td>
            <td><?php echo $mhs->gender?></td>
            <td><?php echo $mhs->berat?></td>
            <td><?php echo $mhs->tinggi?></td>
            <td><?php echo $mhs->hasil?></td>
            <td><?php echo $mhs->status?></td>
        </tr>
        <?php 
        $nomor++;
        }
        ?>
        <tr>
            <td><?php echo 4 ?></td>
            <td><?php echo $tanggal_t?></td>
            <td><?php echo $kode_k?></td>
            <td><?php echo $nama_n?></td>
            <td><?php echo $gender_g?></td>
            <td><?php echo $berats?></td>
            <td><?php echo $tinggis?></td>
            <td><?php echo round($total,1)?></td>
            <td><?php echo $maka?></td>
        </tr>


    </tbody>
    </thead>
</table>
