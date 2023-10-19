<?php
require "koneksi.php";

if (isset($_POST["tambah"])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jenkel = $_POST["jenkel"];
    $kelas = $_POST["kelas"];
    $angkatan = $_POST["angkatan"];
    $tanggal = $_POST["tgl_lahir"];
    // upload gambar
    $gambar = $_FILES['gambar']['name'];
    $explode = explode('.', $gambar);
    $ekstensi = strtolower(end($explode));
    $gambar_baru = "$nama.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($tmp,'img/'.$gambar_baru)){
        $result = mysqli_query($conn, "insert into mahasiswa 
        (id, nim, nama, jenis_kelamin, kelas, angkatan, gambar, tanggal_lahir ) 
        values ('', '$nim', '$nama', '$jenkel', '$kelas', '$angkatan', '$gambar_baru', '$tanggal')");

        if ($result) {
            echo "
                <script>
                alert('Data Berhasil Ditambahkan dan file berhasil diupload');
                document.location.href = 'index.php';
                </script>
                ";
        } else {
            echo error_log($result)."
            <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'tambah.php';
            </script>
            ";
        }
    }else{
        echo "gagal mengupload gambar";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Nama : </label>
        <input type="text" name="nama" id=""> <br>
        <label for="">NIM</label>
        <input type="text" name="nim" id=""> <br>
        <label for="">Jenis Kelamin</label> <br>
        <input type="radio" name="jenkel" id="" value="Laki-laki"> Laki-laki <br>
        <input type="radio" name="jenkel" id="" value="Perempuan"> Perempuan <br>
        <label for="">Kelas</label>
        <input type="text" name="kelas"> <br>
        <label for="">Angkatan</label>
        <input type="text" name="angkatan"> <br>
        <label for="">Tanggal lahir</label>
        <input type="date" name="tgl_lahir" id=""> <br>
        <label for="">Upload Gambar</label>
        <input type="file" name="gambar" id=""> <br>
        <button type="submit" name="tambah">Tambah</button>
    </form>
    <a href="index.php">Kembali ke home</a>
</body>

</html>