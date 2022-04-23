<?php
class Pasien{
    public $id;
    public $kode;
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $gender;
    public $tanggal;
    public $berat;
    public $tinggi;
    public $hasil;
    public $status;

    function __construct($kode,$nama,$gender,$tanggal,$berat,$tinggi,$hasil,$status){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->gender = $gender;
        $this->tanggal = $tanggal;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->hasil = $hasil;
        $this->status = $status;
    }
}
?>