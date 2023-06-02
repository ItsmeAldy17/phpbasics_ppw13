
<?php
$namaDepan = "Aldy";

$namaProvinsi = array(
    "Lampung",
    "Riau",
    "Jambi",
    "Bengkulu",
    "Makassar",
    "Kendari",
    "Gorontalo",
    "Samarinda",
    "Papua",
    "Nusa Tenggara Barat"
);

$hurufNamaDepan = str_split(strtolower($namaDepan));

$defaultKotaTujuan = "Jawa Timur";

foreach ($hurufNamaDepan as $huruf) {
    foreach ($namaProvinsi as $prov) {
        if (strtolower(substr($prov, 0, 1)) === $huruf) {
            $defaultKotaTujuan = $prov;
            break 2;
        }
    }
}
echo "<h3>Kota Provinsi Tujuan KKN</h3>";
echo $namaDepan . ", Anda ditugaskan KKN di kota: " . $defaultKotaTujuan;
?>
