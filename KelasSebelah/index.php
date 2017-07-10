<?php
    
    include "pertemuan1.php"; //code yg ada di pertemuan1.html, ditempel di sini. Namanya harus sesuai dengan file PHP yang mau ditampilkan/dipanggil.
    $a = new Manusia("Lia","Wanita");
    echo $a->Melihat();
    $a->OperasiMata("Mata Kanan & Kiri"); //untuk menambahkan attribut
    echo $a->Melihat();
    echo $a->Kenalan();
    echo $a->Merayu("Bunga")."<br>";
    echo $a->Merayu("Coklat")."<br><br><br>";

//Materi Penurunan Sifat Mulai dari sini.
$tentara = new Tentara("Lia","Wanita","AK47");//Parameternya ditambah jadi ada senjatanya misalkan "AK47" jenis senjatanya, kalo tidak ada parameter senjatanya, maka jadi ERROR.
//Fungsi basic manusia
echo $tentara->Melihat();
echo "<br>";
$tentara->OperasiMata('Mata kanan & kiri');
echo $tentara->Melihat();
//Fungsi Spesific Tentara
$tentara->PakaiSenjata('Pistol.');//Supaya bisa muncul AK47nya, maka codingan ini dinonaktifkan, Kalo tidak dinonaktifkan maka munculnya pistol.
echo "<br>";
echo $tentara->Tembak();
echo "<br>";
echo $tentara->Berjalan();//Cara Overriding dengan menambahkan fungsi berjalan dengan tegap
echo "<br>";
echo "<br>";

$masi = new Mahasiswa("Joko","Laki-Laki","Kisi-kisi ujian");
//Fungsi basic manusia
echo $masi->Melihat();
$masi->OperasiMata('Mata Kanan & Kiri');
echo $masi->Melihat();
//Fungsi Spesific Mahasiswa
echo $masi->BuatSkripsi();
echo "<br>";
echo $masi->Berjalan();//Cara Overriding dengan menambahkan fungsi berjalan sambil membawa buku.
echo "<br>";
?>