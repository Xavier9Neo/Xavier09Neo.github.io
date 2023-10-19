<?php
require "koneksi.php";

$result = mysqli_query($conn, "select * from fashion");

$fashion = [];

while ($row = mysqli_fetch_assoc($result)) {
    $fashion[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign-Up</title>
</head>

<body>

    <section class="dash-main">
        <h1>Halo User ! 👋🏻</h1>
        <hr><br>
    </section>

    <table border="1" class="tabel">
        <tr>
            <th>No</th>
            <th>NAMA</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($fashion as $fas) : ?>
            <tr>
                <td> <?= $i; ?> </td>
                <td> <?= $fas["nama"] ?> </td>
                <td> <?= $fas["username"] ?> </td>
                <td> <?= $fas["password"] ?> </td>
                <td><a href="Update.php?id=<?=$fas["id"];?>">Update</a></td>
                <td><a href="Delete.php?id=<?=$fas["id"];?>">Delete</a>
            </td>
        </tr>
        <?php $i++;
        endforeach; ?>
    </table>
    <br><a href="SignUp.php" class="tambah">Tambah</a> <br> <br>
    <br><a href="index.php" class="kembali">Kembali</a>
</body>

</html>