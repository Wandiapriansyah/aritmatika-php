<?php

$conf = mysqli_connect('localhost', 'root', '', 'eskul');

$input = $_POST;
$gambar = $input['gambar'];
$judul = $input['judul'];
$genre = $input['genre'];
$rate = $input['rate'];
$id = $input['no'] ?? 0;

if ($id !== 0){
    $query = "UPDATE film set gambar='$gambar',judul='$judul',genre='$genre',rate='$rate' WHERE no='$id'";
}else{
    $query = "INSERT INTO film (gambar,judul,genre,rate) VALUES ('$gambar', '$judul', '$genre', '$rate')";
}
    if($query){
        echo "aman";
    }else{
        echo "bau";
    }
$datas = mysqli_query($conf, $query);
if ($datas) {
    header ('location:film.php');
}

?>