<?php
require "koneksi.php";

if (isset($_POST["SignUp"])) {
    $nama = $_POST["nama"];
    $user = $_POST["username"];
    $pass = $_POST["password"];

    $result = mysqli_query($conn, "insert into fashion 
        (id, nama, username, password ) 
        values ('', '$nama', '$user', '$pass')");

	if ($result) {
		echo "
			<script>
			alert('Data Berhasil Dimasukkan');
			document.location.href = 'cout.php';
			</script>
			";
	} else {
		echo"
		<script>
		alert('Data Gagal Ditambahkan!');
		document.location.href = 'SignUp.php';
		</script>
		";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahsion Recommendations</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="light-theme">
<!-- sebagai bagian atas dari body -->
    <section class ="signin" id="signin">
        <div class="form">
            <div class="box form-box"> 
                <header>
                    <h5>Registrasi</h5>
                    <nav class="navigasi">
                        <div class="ikon">
                            <a href="cout.php" class="fas fa-home"></a>
                            <a id="dark-mode" onclick="Class()" class="fas fa-moon"></a>
                        </div>
                    </nav>
                </header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="nama">Name</label>
                        <input type="text" name="nama" id="nama" required>
                    </div>
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" name="SignUp" value="Sign-Up" onclick="showAlert()">
                    </div>
                    <!-- <div class="links">
                        Do have account? <a href="SignIn.php">Sign-In Now</a>
                    </div> -->
                </form>
            </div>
        </div>
    </section>
<i id="dark-mode" class="fas fa-sun">Toggle Dark Mode</i>
    
<script>
    function toggleDarkMode() {
        if(document.getElementById("dark-mode").className == "fas fa-sun"){
            document.body.className = "light-theme";
            document.getElementById("dark-mode").className = "fas fa-moon"
        }else{
            document.body.className = "dark-theme";
            document.getElementById("dark-mode").className = "fas fa-sun";
        } 
    }
    // Menambahkan event listener
    document.getElementById("dark-mode").addEventListener("click", toggleDarkMode);


    function showAlert() {
        alert("Anda Berhasil Registrasi😎");
    }


    // Ambil elemen HTML yang akan diubah warnanya
    var kotak = document.getElementById('kotak');

// Tambahkan event listener untuk mengubah warna ketika diklik
kotak.addEventListener('click', function() {
if (sion.classList.contains('sion')) {
    sion.classList.remove('sion');
    sion.classList.add('dark-theme');
} else {
    sion.classList.remove('dark-theme');
    sion.classList.add('sion');
}
});
</script>
</body>