<?php
require "koneksi.php";

$id = $_GET["id"];

$result = mysqli_query($conn, "delete from fashion where id = '$id'");


if ($result) {
    echo "
    <script>
    alert('Data Berhasil Dihapus!');
    document.location.href = 'cout.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data Gagal Dihapus!');
    document.location.href = '.php';
</script>
";
}
