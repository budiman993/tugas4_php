<?php
$beli = 8000;
$jual = 7500;
$untung = 300;
$kambing = round(($beli-$jual)/$untung);

echo "Harga Beli = Rp. ", $beli;
echo "<br>Harga Jual = Rp. ", $jual;
echo "<br>Keuntungan = Rp. ", $untung;

echo "<br>Berapa Jumlah Kambing yang dibeli ? ";
echo "<br>Jawaban : ", $kambing, " ekor"; 

?>
