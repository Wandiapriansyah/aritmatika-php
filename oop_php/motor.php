<?php
require 'classmotor.php';

$motor1 = new motor('Suzuki', '2', '3000000');
// $motor1->merek = "Suzuki";
// $motor1->roda = 2;
// $motor1->setharga(3000000);
echo "Rician Kendaraan 1 :". ' '. $motor1->getLabel(). ' '. 'harganya'. ' '. $motor1->statusHarga(). '<br>';

$motor2 = new motor('Bajaj', '3', '2000000');
// $motor2-> merek = "Bajaj";
// $motor2-> roda = 3;
// $motor2-> setharga(2000000);
echo "Rician Kendaraan 2 :". ' '. $motor2->getLabel(). ' '. 'harganya'. ' '. $motor2->statusHarga(). '<br>';


$motor3 = new motor('Honda', '2', '3000000');
// $motor3->merek = "Honda";
// $motor3->roda = 2;
// $motor3->setharga(3000000);
echo "Rician Kendaraan 3 :". ' '. $motor3->getLabel(). ' '. 'harganya'. ' '. $motor3->statusHarga(). '<br>';

$motor4 = new motor('Astrea', '2', '3000000');
// $motor4->merek = 'astrea';
// $motor4->roda = 2;
// $motor4->setharga(2000000);
echo "Rincian Kendaraan 4 :". ' '. $motor4->getLabel(). ' '. 'harganya'. ' '. $motor4->statusHarga(). '<br>';

$motor5 = new keretaApi('Suzuki', '2000000', '7');
// $motor5->jumlah_gerbong;
// $motor5->setgerbong(7);
// $motor5->setharga(2000000);
echo "Rincian Kereta Api 1 :". ' '. 'Terdapat '. $motor5->jumlah_gerbong. ' '.  'gerbong'.  ' '. 'harganya'. ' '. $motor5->statusHarga(). '<br>';



// echo "Rincian Kendaraan 1 :". ' '.$motor1->merek. ' '. $motor1->roda. ' '. $motor1->bacaharga() ; 
// echo ' '. $motor1->statusHarga();
// echo "<br>";
// echo "Rincian Kendaraan 2 :".' '. $motor2->merek. ' '. $motor2->roda. ' '. $motor2->bacaharga() ;
// echo ' '. $motor2->statusHarga();
// echo "<br>";
// echo "Rincian Kendaraan 3 :". ' '. $motor3->merek. ' '. $motor3->roda. ' '. $motor3->bacaharga() ;
// echo ' '. $motor3->statusHarga();
// echo '<br>';
// echo "Rincian Kendaraan 4 :". ' '. $motor4->merek. ' '. $motor4->roda. ' '. $motor4->bacaharga() ;
// echo ' '. $motor4->statusHarga();
// echo '<br>';
// echo "Rincian KeretaApi :". $motor5->jumlah_gerbong. ' '. $motor5->bacaharga() ;
// echo '<br>';



?>