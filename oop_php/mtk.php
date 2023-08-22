<?php

class gitar {
    var $merk;
    var $senar;
    var $harga;

    function tambah( $harga1, $harga2 ){
        return $harga1 + $harga2;
    }
    function kurang( $harga1, $harga2 ){
        return $harga1 - $harga2;
    }
    function kali( $harga1, $harga2){
        return $harga1 * $harga2;
    }
    function bagi( $harga1, $harga2){
        return $harga1 / $harga2;
    }
}

$harga1 = 350000;
$harga2 = 500000;
$harga3 = 2;

$gitar = new gitar();
$gitar->merek = "Merek";
$gitar->senar = "Senar";
$gitar->harga = "Harga";

$gitar1 = new gitar();
$gitar1->merek = "Akustik";
$gitar1->senar = "Nilon";
$gitar1->harga = $harga1;

$gitar2 = new gitar();
$gitar2->merek = "Listrik";
$gitar2->senar = "Elixir";
$gitar2->harga = $harga2;

echo $gitar->merek. ' '. $gitar->senar. ' '. $gitar->harga. '<br>';
echo $gitar1->merek. ' '. $gitar1->senar. ' '. $gitar1->harga. '<br>';
echo $gitar2->merek. ' '. $gitar2->senar. ' '. $gitar2->harga. '<br>';

echo '<br>';

echo 'Untuk membeli gitar Akustik dan Listrik, maka membutuhkan uang sebanyak'. ' '. $gitar1->tambah($harga1, $harga2). '<br>';
echo 'Untuk membeli 2 gitar Listrik maka membutuhkan uang sebanyak'. ' '. $gitar2->kali($harga2, $harga3). '<br>';
echo 'Untuk membeli gitar Akustik dengan cara patungan 2 orang, 
maka masing-masing orng membutuhkan uang sebanyak'. ' '. $gitar1->bagi($harga1, $harga3). '<br>';
echo 'Perbedan antara gitar Listrik dan Akustik adalah'. ' '. $gitar2->kurang($harga2, $harga1). '<br>';


?>