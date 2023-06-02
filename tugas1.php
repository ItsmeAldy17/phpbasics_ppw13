<?php
    $namaPanggilan = "Aldy";
    $tanggalHariIni = date("d") - 2;
    $jumlahHurufNama = strlen($namaPanggilan);

    if ($jumlahHurufNama == $tanggalHariIni) {
    echo "Berhasil";
    } elseif ($jumlahHurufNama < $tanggalHariIni) {
    echo "Sedikit lagi";
    } else {
    echo "Coba lagi";
    }
?>