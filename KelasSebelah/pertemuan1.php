<?php
//Function ada 3 jenis: Private Function, Protected Function, dan Public Function.
    class Manusia
    {
        private $Nama;
        private $Hati ="Saya terima Cintamu";
        private $Kenal;
        private $Mata;
        private $JenisKelamin;

        public function __construct($nama,$kelamin) //Construct dijalankan ketika Object baru lahir,ketika ada object baru "new ....", maka fungsi construct di eksekusi.
        {
            echo "saya terlahir di dunia! <br />";
            $this->Nama = $nama;
            $this->JenisKelamin = $kelamin;
        }

        public function __destruct() //Destruct dijalankan ketika fungsi objek mati, Selalu dijalankan diAkhir.
        {
            echo 'i \'m dead! <br />';
        }

        public function Melihat()
        {
            return 'Melihat menggunakan :'. $this->Mata . '<br />';
        }

        public function Berjalan()
        {
            return 'Berjalan santai';
        }

        public function OperasiMata($mata)//Untuk menambahkan attribut baru, disini menambahkan attribut mata.
        {
            $this->Mata = $mata;//Menambahkan attribute baru harus ada parameternya.
        }

        public function Kenalan()
        {
            $this->Kenal = True;
            return 'Hi perkenalkan nama saya '.$this->Nama . '<br />';
        }

        public function Merayu($apa)
        {
            if($this->Kenal == True)
            {
                if($apa == 'Bunga')
                {
                    return 'Saya mencintaimu!';
                }
                else
                {
                    return $this->Mikir2();
                }
            }
            else
            {
                return 'Elo siapa?';
            }
        }

        private function Mikir2()
        {
            return 'Nanti Ya!';
        }
    }

    //tema baru: Penurunan Sifat Mulai dari sini (Inheritance), 
    // "Protected Function" hanya bisa diakses oleh kelas turunannya saja.
    // "Private Function" hanya bisa diakses oleh class parentsnya saja. 
    // "Public Function" bisa diakses oleh semua.
    class Tentara extends Manusia
    {
        private $Senjata;
        public function __construct($nama, $jeniskelamin, $Senjata) //cara Overriding Construct.
        {
            parent::__construct($nama,$jeniskelamin); //untuk memanggil parents`s class constructor

            $this->Senjata = $Senjata;
            echo 'Fungsi construct di kelas tentara! <br />';
        }

        public function Tembak () //di get
        {
            return 'Menembak menggunakan ' . $this->Senjata . "<br><br>";
        }
    
        public function PakaiSenjata($Senjata) //di set
        {
        $this->Senjata = $Senjata;
        }

        public function Melihat() //cara Overriding dengan menambahkan fungsi melihat menggunakan teropong
        {
            return 'Melihat dengan teropong!';
        }
        public function Berjalan() //cara Overriding dengan menambahkan fungsi berjalan dengan tegap
        {
            return 'Berjalan dengan tegap!';
        }
    }

class Mahasiswa extends Manusia
    {
        private $Skripsi;
        public function __construct($nama, $jeniskelamin, $Skripsi) //cara Overriding Construct, ditambah parameter $Skripsi, dan di Index.php juga ditambah parameter Skripsinya.
        {
            parent::__construct($nama,$jeniskelamin); //Memanggil Construct si Parent

            $this->Skripsi = $Skripsi;
            echo 'Fungsi construct di kelas mahasiswa! <br />';
        }

        public function BuatSkripsi()
        {
            return 'Nulis ' . $this->Skripsi;
        }
        public function Berjalan() //Cara overriding dengan menambahkan fungsi berjalan sambil membawa buku.
        {
            return 'Berjalan sambil membawa buku';
        }
    }
?>