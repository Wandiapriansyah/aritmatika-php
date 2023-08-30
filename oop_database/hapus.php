<?php

    require 'database.php';

    $db = new database('localhost', 'root', '', 'eskul');

    $db->hapusfilm();


// di bawah adalah percobaan 

    // $conf = mysqli_connect('localhost', 'root', '', 'eskul');

    // $id = $_GET['id'] ?? 0;

    // if ($id !== 0) {
    //     $query = "DELETE FROM film where no =". $id;
    //     $datas = mysqli_query($conf, $query);
    //     header ('location:film.php');
    // }

    // function hapusfilm(){
    //     $id = $_GET['id'] ?? 0;
    //     if ($id !== 0){
    //     $query = "DELETE FROM film where no =". $id;
    //     $datas = mysqli_query($this->conn, $query);
    //     header ('location:film.php');
    //     }
    // }











?>