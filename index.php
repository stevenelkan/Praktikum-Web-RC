<?php
require_once("Buah.php");
$buah = new Buah();
$buah->Nama1 = "Mangga";
$buah->Nama2 = "Jambu";
$buah->Nama3 = "Salak";
$buah->Harga1(15000);
$buah->Harga2(13000);
$buah->Harga3(10000);
?>
<html>
<head>
    <title>Tugas Minggu 6</title>
    <style>
    .kiri{
        float: left;
    }
    .tengah{
        float: center;
    }  
    </style>
</head>
<body >
    <h1>Toko Buah ITERA</h1>
    <hr>
    <h2>Daftar Harga Buah</h2>
    <?= $buah->DaftarHarga();?>
    <form> 
        <div class="kiri">
            <label for="Mangga">Masukkan jumlah mangga yang dibeli  : <br><br></label>
            <label for="Jambu">Masukkan jumlah jambu yang dibeli  : <br><br></label>
            <label for="Salak">Masukkan jumlah salak yang dibeli : <br><br></label>
        </div>
        <div class="tengah">
            <input type="number" id="Mangga" onkeyup="HargaTotal()"><br><br>
            <input type="number" id="Jambu" onkeyup="HargaTotal()"><br><br>
            <input type="number" id="Salak" onkeyup="HargaTotal()"><br><br>
        </div>           
    </form>
    <p id="x"></p>     
    <script>
        function HargaTotal(){
          let a=document.getElementById("Mangga").value*15000;
          let b=document.getElementById("Jambu").value*13000;
          let c=document.getElementById("Salak").value*10000;
          let total;
          total=a+b+c;
          let z=document.getElementById("x");
          z.innerHTML="Harga total belanjaanmu adalah Rp"+total+",00";
        }
    </script>
</body>
<footer>
    <hr>
    <a href="https://www.itera.ac.id">Kunjungi kami disini</a>
    <hr>
</footer>
</html>