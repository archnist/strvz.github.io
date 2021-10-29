<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap">
    <title>SMKN 26 Jakarta</title>
</head>
<body>
    <div class="nav">
        <img src="logo.png" class="logo">
        <h1>SMKN 26 JAKARTA</h1>
        <ul>
            <li><a href="#/" class="profil">Profil</a></li>
            <li><a href="#/" class="kompetensibtn">Kompetensi Keahlian</a></li>
            <li><a href="#/" class="kegiatanbtn">Kegiatan</a></li>
            <li><a href="#/" class="postinganbtn">Postingan</a></li>
            <li><a href="isikontak.php">Kontak</a></li>                                              
        </ul>
    </div>

    <div class="kompetensi kompetensi2">
        <li><a href="kgsp.html">Konstruksi Gedung Sanitasi Dan Perawatan</a></li>
        <li><a href="ttl.html">Teknik Tenaga Listrik</a></li>
        <li><a href="tflm.html">Teknik Fabrikasi Logam Dan Manufaktur</a></li>
        <li><a href="tmpo.html">Teknik Dan Manajemen Perawatan Otomotif</a></li>
        <li><a href="sija.html">Sistem Informatika Jaringan Dan Aplikasi</a></li>
        <li><a href="tedk.html">Teknik Elektronika Daya Dan Komunikasi </a></li>
    </div>

    <div class="menu menu2">
        <li><a href="pesan-kepala.html">Pesan Kepala Sekolah</a></li>
        <li><a href="sejarah.html">Sejarah Sekolah</a></li>
        <li><a href="jamsekolah.html">Jam Sekolah</a></li>
    </div>

    <div class="kegiatan kegiatan2">
        <li><a href="ekstrakulikuler.html">Ekstrakulikuler</a></li>
        <li><a href="kegiatanjumat.html">Kegiatan Jum'at</a></li>
    </div>

    <div class="postingan postingan2">
        <li><a href="technopark.html">Program Technopark</a></li>
        <li><a href="berita.html">Berita Dan Literasi</a></li>
    </div>

<img src="banner.png" class="smkn26">

    <h2 class="lokasi" style="user-select: none;"><a href="web.html" style="color: white; text-decoration: none;">Home</a> 
    <span style="font-style: italic;">/</span><a href="#" style="color: white; text-decoration: none; word-spacing: 2px; margin-left: 15px;">Kontak</a></h2>

<div class="bg"></div>

<div class="history"></div>

<div class="sejarah">
    <div class="animate1 animate12">
    <h2>Halaman Kontak Admin</h2>
    <h1>Line</h1>
    </div>

    <div class="normal">

        <?php 
include "coba.php";

$kontak = mysqli_query($koneksi,"select * from kontak order by -id");
while($tampil = mysqli_fetch_array($kontak)){
    
    echo "
    <div class='area'>
    <div class='isi'>
    <h3> <span class='from'>Dari :</span> 
    <br>
   $tampil[nama] ~ <span style='margin-left: 0;' class='email'> ( $tampil[email] ) </span>
    </h3>
    
    <h3 class='from' style='margin-top: 360px; margin-left: 230px; border: none; font-size: 25px; width: 900px;'>Pesan :</h3>
    <p class='pesan'>
    $tampil[pesan]
    </p>     
    </div>
    <td><a href ='?hapus=$tampil[id]' class='delete'>Hapus</a></td>
    <p class='tanggal'>$tampil[tanggal]</p>";
}

?>

<?php 
// hapus data
if(isset($_GET['hapus'])){
    mysqli_query($koneksi,"delete from kontak where id='$_GET[hapus]'");
    echo "<meta http-equiv=refresh content=2;URL='isikontak.php'>";
}

?>
</div>
</div>

</div>

<footer>
    <div class="box">
         <img src="logo.png" class="footimg">
         <h2>SMK Negeri 26 Jakarta</h2>
         <h3>Jl. Balai Pustaka Baru No 1 Rawamangun, Jakarta Timur Kode Pos 13220</h3>
         <i class="fas fa-phone phone1"></i><h3 class="a">+62 856 9267</h3>
         <i class="fas fa-calculator calculator1"></i><h3 class="b">+62 856 9267</h3>
         <i class="fas fa-envelope mail1"></i><h3 class="c">smkn26jkt@gmail.com</h3>
         <h2 class="lisensi">SMKN 26 Jakarta. Powered by Muhammad Agil 2021</h2>
     </div>
</footer>

</body>

<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Patua+One&display=swap');

*{
padding: 0;
margin: 0;    
}

.normal{
margin-top: -350px;
background: blue;
width: 900px;
}

.lokasi{
position: absolute;
font-family: sans-serif;
margin-left: 150px;
color: white;
font-weight: 600;
font-size: 20px;
margin-top: -50px;
z-index: 10;
word-spacing: 5px;
}

body{
overflow-x: hidden;
background: rgb(252, 250, 250);
}

.smkn26{
margin-top: 80px;
height: 380px;
width: 1350px;
}

.nav{
position: fixed;
background: rgb(22, 171, 221);
width: 1500px;
height: 80px;
z-index: 30;
}

.nav h1{
position: fixed;   
font-size: 40px;
color: white;
margin-left: 100px;
font-family: 'Lobster', cursive;
letter-spacing: 2px;
margin-top: 15px;
user-select: none;
}

.nav ul{
margin-left: 600px;
margin-top: 30px;
}

.nav ul li{
display: inline;
font-size: 15px;
margin-left: 20px;
text-decoration: none;
}

.nav ul li a{
color: white;
text-decoration: none;
font-family: sans-serif;
transition: .5s ease all;
text-transform: uppercase;
font-weight: 700;
padding: 10px 10px;
border-radius: 7px;
}

.nav li:hover a{
background: white;
color: darkcyan;
}

.bg{
position: absolute;
margin-top: -800px;
margin-left: -70px;
color: white;
padding: 300px 300px 0;
background: rgba(0, 0, 0, 0.2);
width: 835px;
height: 500px;
user-select: none;
}

.logo{
position: absolute;
width: 70px;
margin-left: 20px;
margin-top: 2px;
}

.sejarah img{
position: absolute;
margin-top: 190px;
margin-left: 320px;
}

.sejarah h3{
position: absolute;
font-family: 'Segoe UI','Open Sans', 'Helvetica Neue';
margin-top: 230px;
font-weight: 500;
margin-left: 230px;
font-size: 26px;
z-index: 20;
line-height: 45px;
padding-left: 10px;
}

.lokasi{
background:rgb(22, 171, 221);
position: absolute;
width: 1100px;
margin-left: 100px;
padding: 25px 0;
margin-top: -75px;
padding-left: 50px;
border-top-left-radius: 20px;
border-top-right-radius: 20px;
border: 1px solid rgba(0, 0, 0, 0.6);
}

.pesan{
font-size: 20px;
font-family: 'Segoe UI','Open Sans', 'Helvetica Neue';
margin-left: 240px;
margin-top: 400px;
width: 880px;
font-weight: 600;
position: absolute;
border-bottom: 3px solid rgb(39, 112, 248);
padding-bottom: 40px;
}

.sejarah .from{
border-left: 5px solid rgb(39, 154, 221);
padding-left: 10px;
font-weight: 600;
font-size: 30px;
}

.sejarah h2{
position: absolute;
font-size: 35px;
font-weight: 600;
font-family: sans-serif;
margin-top: 400px;
margin-left: 220px;
}

.sejarah h1{
position: absolute;
margin-top: 420px;
text-align: center;
width: 120px;
margin-left: 225px;
user-select: none;
color: transparent;
border-bottom: 3px solid rgb(39, 112, 248);
z-index: 10;
}

.box{
background: rgb(22, 171, 221);
width: 1350px;
height: 210px;
position: absolute;
z-index: 10;
margin-top: 1800px;
}

.box img{
width: 100px;
margin-top: 50px;
margin-left: 100px;
}

.box h2{
color: white;
font-family: sans-serif;
margin-left: 270px;
font-size: 23px;
margin-top: 45px;
font-weight: 500;
}

.box h3{
color: white;
font-family: sans-serif;
margin-left: 260px;
margin-top: 83px;
font-weight: 500;
width: 450px;
line-height: 25px;
font-size: 17px;
}

.box .a{
margin-left: 770px;
margin-top: 83px;
}

.box .phone1{
color: white;
position: absolute;
margin-left: 750px;
margin-top: 86px;
}

.box .b{
margin-left: 770px;
margin-top: 118px;
}

.box .calculator1{
color: white;
position: absolute;
margin-left: 750px;
margin-top: 121px;
}

.box .c{
margin-left: 985px;
margin-top: 80px;
}

.box .mail1{
color: white;
position: absolute;
margin-left: 960px;
margin-top: 86px;
}

.box .lisensi{
color: rgb(82, 78, 78);
margin-top: 220px;
margin-left: 455px;
font-family: cursive;
font-size: 17px;
padding-bottom: 10px;
}

.menu{
position: fixed;
background: rgb(34, 161, 235);
margin-top: 60px;
margin-left: 625px;
width: 250px;
height: 107px;
border-radius: 5px;
z-index: 50;
transition: .5s ease all;
}

.menu li{
list-style: none;
line-height: 25px;
}

.menu a{
text-decoration: none;
color: white;
font-family: sans-serif;
display: block;
padding: 5px 25px;
font-size: 15px;
box-sizing: border-box;
transition: .4s ease all;
border-left: 4px solid transparent;
}

.menu2{
display: none;
}

.menu a:hover{
background: rgba(34, 128, 235, 0.534);
border-left: 4px solid white;
}

.kompetensi{
position: fixed;
background: rgb(34, 161, 235);
margin-top: 60px;
margin-left: 725px;
width: 350px;
height: 212px;
border-radius: 5px;
z-index: 50;
transition: .5s ease all;
}

.kompetensi li{
list-style: none;
line-height: 25px;
}

.kompetensi a{
text-decoration: none;
color: white;
font-family: sans-serif;
display: block;
padding: 5px 25px;
font-size: 15px;
box-sizing: border-box;
transition: .4s ease all;
border-left: 4px solid transparent;
}

.kompetensi2{
display: none;
}

.kompetensi a:hover{
background: rgba(34, 128, 235, 0.534);
border-left: 4px solid white;
}

.kegiatan{
position: fixed;
background: rgb(34, 161, 235);
margin-top: 60px;
margin-left: 948px;
width: 180px;
height: 72px;
border-radius: 5px;
z-index: 50;
transition: .5s ease all;
}

.kegiatan li{
list-style: none;
line-height: 25px;
}

.kegiatan a{
text-decoration: none;
color: white;
font-family: sans-serif;
display: block;
padding: 5px 25px;
font-size: 15px;
box-sizing: border-box;
transition: .4s ease all;
border-left: 4px solid transparent;
}

.kegiatan2{
display: none;
}

.kegiatan a:hover{
background: rgba(34, 128, 235, 0.534);
border-left: 4px solid white;
}

.postingan{
position: fixed;
background: rgb(34, 161, 235);
margin-top: 60px;
margin-left: 1070px;
width: 220px;
height: 72px;
border-radius: 5px;
z-index: 50;
transition: .5s ease all;
}

.postingan li{
list-style: none;
line-height: 25px;
}

.postingan a{
text-decoration: none;
color: white;
font-family: sans-serif;
display: block;
padding: 5px 25px;
font-size: 15px;
box-sizing: border-box;
transition: .4s ease all;
border-left: 4px solid transparent;
}

.postingan2{
display: none;
}

.postingan a:hover{
background: rgba(34, 128, 235, 0.534);
border-left: 4px solid white;
}

.isi{
margin-left: -10px;
margin-top: 80px;
width: 1200px;
font-family: 'Segoe UI','Open Sans', 'Helvetica Neue';
}

.area{
margin-top: 300px;
position: absolute;
}

.delete{
text-decoration: none;
color: white;
padding: 5px 15px;
border-radius: 15px;
font-family: sans-serif;
font-size: 20px;
font-weight: 600;
margin-left: 1010px;
background: rgb(34, 161, 235);
margin-top: 235px;
position: absolute;
transition: .2s ease all;
}

.delete:hover{
background: red;
}

.tanggal{
position: absolute;
margin-left: 230px;
width: 700px;
margin-top: 330px;
font-size: 20px;
font-weight: 600;
color: rgba(0, 0, 0, 0.8);
font-family: 'Segoe UI','Open Sans', 'Helvetica Neue';
}

.email{
width: 700px;
font-size: 24px;
font-weight: 600;
color: rgba(0, 0, 0, 0.8);
font-family: 'Segoe UI','Open Sans', 'Helvetica Neue';
}


</style>
</head>

<script>
const profil = document.querySelector('.profil');
const menu = document.querySelector('.menu');
const kompetensibtn = document.querySelector('.kompetensibtn');
const kompetensi = document.querySelector('.kompetensi');
const kegiatanbtn = document.querySelector('.kegiatanbtn');
const kegiatan = document.querySelector('.kegiatan');
const postinganbtn = document.querySelector('.postinganbtn');
const postingan = document.querySelector('.postingan');
const area = document.querySelector('.area');

profil.addEventListener('click', function(){
menu.classList.toggle("menu2");
kompetensi.classList.add("kompetensi2");
kegiatan.classList.add("kegiatan2");
postingan.classList.add("postingan2");
});

kompetensibtn.addEventListener('click', function(){
kompetensi.classList.toggle("kompetensi2");
menu.classList.add("menu2");
kegiatan.classList.add("kegiatan2");
postingan.classList.add("postingan2");
});

kegiatanbtn.addEventListener('click', function(){
kegiatan.classList.toggle("kegiatan2");
menu.classList.add("menu2");
kompetensi.classList.add("kompetensi2");
postingan.classList.add("postingan2");
});

postinganbtn.addEventListener('click', function(){
postingan.classList.toggle("postingan2");
kompetensi.classList.add("kompetensi2");
kegiatan.classList.add("kegiatan2");
menu.classList.add("menu2");
});

</script>

</html>

<!-- .history{
background: white;
box-shadow: 0 0 2px 0 black;
height: 1950px;
width: 1150px;
margin-top: -75px;
position: absolute;
border-top: 75px solid rgb(22, 171, 221);
border-radius: 20px;
margin-left: 100px;
} -->