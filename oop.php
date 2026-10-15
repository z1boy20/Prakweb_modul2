<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    public function tampilkanData() {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Program Studi : " . $this->prodi . "<br>";
        echo "Semester : " . $this->semester . "<br>";
    }
}
$mhs1 = new  Mahasiswa();
$mhs1->nim = "202457201039";
$mhs1->nama = "Muhamad Aziz Al Fauzi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = 5;

$mhs1->tampilkanData();

$mhs2 = new  Mahasiswa();
$mhs2->nim = "202457201040";
$mhs2->nama = "Ziboyy";
$mhs2->prodi = "Sistem Informasi";
$mhs2->semester = 5;

echo "NIM : " . $mhs2->nim . "<br>";
echo "Nama : " . $mhs2->nama . "<br>";
echo "Program Studi : " . $mhs2->prodi . "<br>";
echo "Semester : " . $mhs2->semester . "<br>";