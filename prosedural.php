<?php
$nim = "202457201039";
$nama = "Muhamad Aziz Al Fauzi";
$prodi = "Sistem Informasi";
$semester = 5;

function tampilkanData($nim, $nama, $prodi, $semester) {
    echo "NIM : " . $nim . "<br>";
    echo "Nama : " . $nama . "<br>";
    echo "Program Studi : " . $prodi . "<br>";
    echo "Semester : " . $semester . "<br>";
}

tampilkanData($nim, $nama, $prodi, $semester);
?>