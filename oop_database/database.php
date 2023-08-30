<?php

class database{

    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $conn;

    function __construct($host, $user, $pass, $dbname){
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
        $this->connectMysql();
    }

    function connectMysql(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass);
        $query = mysqli_select_db($this->conn, $this->dbname);
        // if($query){
        //     echo "jalan <br>";
        // }else{
        //     echo "stop";
        // }
    }

    function addfilm($gambar, $judul, $genre, $rate){
        $query = "INSERT INTO film (gambar, judul, genre, rate) VALUES ('$gambar', '$judul', '$genre', '$rate')";
        mysqli_query($this->conn, $query);
        // if($query){
        //     echo "data jalan";
        // }else{
        //     echo "data stop";
        // }
    }

    function hapusfilm(){
        $id = $_GET['id'] ?? 0;
        if ($id !== 0){
        $query = "DELETE FROM film where no =". $id;
        $datas = mysqli_query($this->conn, $query);
        header ('location:film.php');
        }
    }

    function readfilm(){
        echo "<table border='1'>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Rate</th>
            </tr>";

        $query = "SELECT * FROM film WHERE no ";
        $result = mysqli_query($this->conn, $query);
        while($data = mysqli_fetch_assoc($result)) {
            echo "
                <tr>
                    <td>".$data['no']."</td>
                    <td><img src=".$data['gambar']."></td>
                    <td>".$data['judul']."</td>
                    <td>".$data['genre']."</td>
                    <td>".$data['rate']."</td>
                    <td><a href='edit.php?id=".$data['no']."'>Edit</a></td>
                    <td><a href='hapus.php?id=".$data['no']."'>Hapus</a>
                </tr>
            ";
        }
        echo "</table>";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Film</title>
</head>
<style>
    img{
        width: 50px;
    }
</style>
<body>
    
</body>
</html>