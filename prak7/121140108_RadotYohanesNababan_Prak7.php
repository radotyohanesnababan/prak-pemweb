<?php

// Radot Yohanes Nababan - 121140108 - RB

class Human {
    private $Nama;
    private $NIM;
    public function setNama($Nama) {
        $regex = "/^[a-zA-Z\s]+$/";
        if (!preg_match($regex, $Nama)) {
            throw new Exception("Salah Input!");
        }
        //regex untuk pengecekan nama, tidak mengandung selain Alfabet
        $this->Nama = $Nama;
    }
    public function getNama() {
        return $this->Nama;
    }

    public function setNIM($NIM) {
        $regex = '/^\d+$/';
        if (!preg_match($regex, $NIM)) {
            throw new Exception('Kesalahan Input');
        }
        //regex untuk pengecekan NIM tidak ada spasi dan huruf
        $this->NIM = $NIM;
    }
    public function getNIM() {
        return $this->NIM;
    }
}

class Mahasiswa extends Human {
    private $Prodi;
    private $ProvAsal;
    public function __construct($nama, $NIM, $Prodi, $ProvAsal) {
        parent::setNama($nama);
        parent::setNIM($NIM);
        $this->Prodi = $Prodi;
        $this->ProvAsal = $ProvAsal;
    }
    public function setProdi($Prodi) {
        $this->Prodi = $Prodi;
    }
    public function getProdi() {
        return $this->Prodi;
    }
    public function setProvAsal($ProvAsal) {
        $this->ProvAsal = $ProvAsal;
    }
    public function getProvAsal() {
        return $this->ProvAsal;
    }
    public function displayInfo() {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "NIM: " . $this->getNIM() . "<br>";
        echo "Program Studi: " . $this->getProdi() . "<br>";
        echo "Provinsi Asal: ". $this->getProvAsal() . "<br>";
    }
}

$Mahasiswa1 = new Mahasiswa("Radot Yohanes Nababan", "121140108", "Informatika"," Sumatera Utara");

echo "DATA AWAL :<br>";
$Mahasiswa1->displayInfo();

$Mahasiswa1->setProdi("Teknik Biomedis");
$Mahasiswa1->setProvAsal("Washington DC");

echo "<br>DATA TERBARU:<br>";
$Mahasiswa1->displayInfo();
echo"<br>";
echo "Coba Try Exception <br>";
try {
    $Mahasiswa1->setNama("Johan");
    $Mahasiswa1->displayInfo();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
