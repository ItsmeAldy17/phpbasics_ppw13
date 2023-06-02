<?php
$kelompok = array(
    array("Nama" => "Aldy Ardiansyah", "NIM" => "505624"),
    array("Nama" => "Iqbalee Dhiafakhri Ramadhan", "NIM" => "499676"),
    array("Nama" => "Dandi Imam Mahdi ", "NIM" => "505783"),
    array("Nama" => "Reza Arap Oktavian", "NIM" => "499392"),
    array("Nama" => "Ezra Wanian", "NIM" => "499950")
);

echo "<h3>Daftar Anggota Kelompok dengan Peran</h3>";

foreach ($kelompok as $anggota) {
    $nama = $anggota['Nama'];
    $nim = $anggota['NIM'];

    if ($nim % 2 == 0) {
        $peran = "Back-end Developer";
    } else {
        $peran = "Front-end Developer";
    }

    echo "<p>Nama: $nama<br>NIM: $nim<br>Peran: $peran</p>";
}
?>
