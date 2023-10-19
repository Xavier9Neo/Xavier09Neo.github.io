<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Recommendations</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
    <!-- <link rel="stylesheet" href="script.js"> -->
</head>
<body class="light-theme"> 
    <header>
        <h3>FASHION ❤</h3>
        <div class="ikon">
            <a id="dark-mode" onclick="Class()" class="fas fa-moon"></a>
            <a href="index.php" class="fas fa-home"></a>
        </div>  
    </header>
    <section class="Fashion" id="Fashion">
        <div class="fasss">
            <div class="sion" id="kotak">
                <img src="fas5.jpg" alt=""><br>
                <h5>Korean Fahsion</h5>
                <p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang menarik perhatian</p>
                <button class="fas fa-heart" id="tombol" onclick="Toggle1()" href=""></button> 
            </div>
            <div class="sion" id="kotak">
                <img src="fas6.jpg" alt=""><br>
                <h5>Hangout Fahsion</h5>
                <p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang nyaman digunakan ketika keluar</p>
                <button class="fas fa-heart" id="tombol2" onclick="Toggle2()" href=""></button> 
            </div>
            <div class="sion" id="kotak">
                <img src="fas7.jpg" alt=""><br>
                <h5>Rainbow Fahsion</h5>
                <p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang penuh dengan warna</p>
                <button class="fas fa-heart" id="tombol3" onclick="Toggle3()" href=""></button> 
            </div>
            <div class="sion" id="kotak">
                <img src="fas8.jpg" alt=""><br>
                <h5>Mamba Fahsion</h5>
                <p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang terlihat elegan</p>
                <button class="fas fa-heart" id="tombol4" onclick="Toggle4()" href=""></button> 
            </div>
        </div>
    </section>
    <section class="Fashion" id="Fashion">
        <div class="fasss">
            <div class="sion" id="kotak">
                <img src="fas11.jpg" alt=""><br>
                <h5>Rok Fahsion</h5><br><p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang terlihat sopan</p>
                <button class="fas fa-heart" id="tombol5" onclick="Toggle5()" href=""></button> 
            </div>
            <div class="sion" id="kotak">
                <img src="fas10.jpg" alt=""><br>
                <h5>Flower Fahsion</h5><br><p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang ramai ketika digunakan</p>
                <button class="fas fa-heart" id="tombol6" onclick="Toggle6()" href=""></button> 
            </div>
            <div class="sion" id="kotak">
                <img src="fas9.jpg" alt=""><br>
                <h5>Feminim Fahsion</h5><br><p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang terlihat lembut</p>
                <button class="fas fa-heart" id="tombol7" onclick="Toggle7()" href=""></button> 
            </div>
            <div class="sion" id="kotak">
                <img src="black.jpg" alt=""><br>
                <h5>Mamba Fahsion</h5><br><p>Saat ini sedang tren pakaian seperti ini, <br> mengapa? <br> karena style mereka yang terlihat elegan</p>
                <button class="fas fa-heart" id="tombol8" onclick="Toggle8()" href=""></button> 
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
            alert("Saat Ini Belum Ada Yang Baru ☺");
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
    
    // tombol like atau suka
    var tombolvar = document.getElementById('tombol');
    function Toggle1(){
        if (tombolvar.style.color =="red"){
            tombolvar.style.color = "black"
        }else{
            tombolvar.style.color = "red"
        }
    }
    var tombol2var = document.getElementById('tombol2');
    function Toggle2(){
        if (tombol2var.style.color =="red"){
            tombol2var.style.color = "black"
        }else{
            tombol2var.style.color = "red"
        }
    }
    var tombol3var = document.getElementById('tombol3');
    function Toggle3(){
        if (tombol3var.style.color =="red"){
            tombol3var.style.color = "black"
        }else{
            tombol3var.style.color = "red"
        }
    }
    var tombol4var = document.getElementById('tombol4');
    function Toggle4(){
        if (tombol4var.style.color =="red"){
            tombol4var.style.color = "black"
        }else{
            tombol4var.style.color = "red"
        }
    }
    var tombol5var = document.getElementById('tombol5');
    function Toggle5(){
        if (tombol5var.style.color =="red"){
            tombol5var.style.color = "black"
        }else{
            tombol5var.style.color = "red"
        }
    }
    var tombol6var = document.getElementById('tombol6');
    function Toggle6(){
        if (tombol6var.style.color =="red"){
            tombol6var.style.color = "black"
        }else{
            tombol6var.style.color = "red"
        }
    }
    var tombol7var = document.getElementById('tombol7');
    function Toggle7(){
        if (tombol7var.style.color =="red"){
            tombol7var.style.color = "black"
        }else{
            tombol7var.style.color = "red"
        }
    }
    var tombol8var = document.getElementById('tombol8');
    function Toggle8(){
        if (tombol8var.style.color =="red"){
            tombol8var.style.color = "black"
        }else{
            tombol8var.style.color = "red"
        }
    }

    </script>
</body>
</html>