<?php
require 'database.php';

$conf = mysqli_connect('localhost', 'root', '', 'eskul');

$query = "SELECT * FROM film Where no = ". $_GET['id'];
$datas = mysqli_query($conf, $query);

$data = $datas -> fetch_array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Film</title>
</head>
<body>
    <form action="acedit.php" method="POST">
        <input type="hidden" value="<?php echo $data['no']?>" name="no">
        <input type="text" value="<?php echo $data['gambar'] ?>" placeholder="Masukan Gambar" name="gambar">
        <input type="text" value="<?php echo $data['judul']?>" placeholder="Masukan Judul" name="judul">
        <input type="text" value="<?php echo $data['genre']?>" placeholder="Masukan Genre" name="genre">
        <input type="text" value="<?php echo $data['rate']?>" placeholder="Masukan Rate" name="rate">
        <button type="submit">kirim</button>
    </form>
</body>
</html>