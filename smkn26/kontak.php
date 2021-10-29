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
            <li><a href="kontak.php">Kontak</a></li>                                              
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
    <h2>Kontak</h2>
    <h1>Line</h1>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3346.755144798513!2d106.8843924142411!3d-6.194294795515696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f49532b5b715%3A0xa4012b68ec698d4e!2sSMK%20Negeri%2026%20Jakarta!5e1!3m2!1sid!2sid!4v1603263291176!5m2!1sid!2sid" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" class="peta" height="360px"></iframe>

    <h3>Info Kontak</h3>
   
    <div class="icon">
        <img src="images/alamat-icon.svg" class="alamaticon">
        <h4 class="h41">Jl. Balai Pustaka Baru No.1 Rawamangun, Jakarta Timur, Indonesia.</h4>
        <img src="http://web.smkn26jkt.sch.id/images/telepon-icon.svg" class="telpicon">
        <h4 class="h42">+62-21-4720310</h4>
        <img src="images/email-icon.svg" class="emailicon">
        <h4 class="h43">smkn26jkt@gmail.com</h4>
    </div>

    <div class="form">
    <form action="" method="post">
<table>

   <tr>
       <td width="80">Nama Lengkap</td>
       <td><input type="text" name="nama" class="nama" placeholder="Nama Lengkap"></td>
   </tr>

   <tr>
       <td>Email</td>
       <td><input type="email" name="email" class="email" placeholder="email@gmail.com"></td>
   </tr>

   <tr>
       <td>Pesan</td>
       <td><textarea name="pesan" class="pesan"></textarea></td>
   </tr>

   <tr>
       <td><input type="text" name="tanggal" class="tanggal" style="display: none;"></td>
   </tr>

   <tr>
       <td></td>
       <td><input type="submit" name="kirim" class="btn btn2" value="Kirim Pesan"></td>
   </tr>

</table>
</form>
    </div>
           </div>

        <img src="selamatdatang2.png">

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

<?php 
// tambah data
include "coba.php";
if(isset($_POST['kirim'])){
    mysqli_query($koneksi,"insert into kontak set
    nama = '$_POST[nama]',
    email = '$_POST[email]',
    pesan = '$_POST[pesan]',
    tanggal = '$_POST[tanggal]'");
}
?>

</body>

<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Patua+One&display=swap');

*{
padding: 0;
margin: 0;    
}

.img2{
margin-top: 1000px;
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

.history{
background: white;
box-shadow: 0 0 2px 0 black;
height: 1230px;
width: 1150px;
margin-top: -75px;
position: absolute;
border-top: 75px solid rgb(22, 171, 221);
border-radius: 20px;
margin-left: 100px;
}

.peta{
z-index: 20;
margin-left: 305px;
margin-top: 200px;
position: absolute;
width: 55%;
height: 55%;
}

.sejarah img{
position: absolute;
margin-top: 190px;
margin-left: 320px;
}

.sejarah h3{
position: absolute;
margin-top: 650px;
font-family: 'Segoe UI';
font-weight: 500;
margin-left: 290px;
font-size: 26px;
z-index: 20;
border-left: 5px solid rgb(39, 154, 221);
padding-left: 10px;
}

.sejarah h2{
position: absolute;
font-size: 35px;
font-weight: 600;
font-family: 'Segoe UI';
margin-top: 80px;
margin-left: 280px;
}

.sejarah h1{
position: absolute;
margin-top: 100px;
text-align: center;
width: 120px;
margin-left: 285px;
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
margin-top: 540px;
}

.box img{
width: 100px;
margin-top: 50px;
margin-left: 100px;
}

.box h2{
color: white;
font-family: sans-serif;
margin-left: 280px;
margin-top: -110px;
font-weight: 500;
}

.box h3{
color: white;
font-family: sans-serif;
margin-left: 280px;
margin-top: 8px;
font-weight: 500;
width: 450px;
line-height: 25px;
font-size: 17px;
}

.box .a{
margin-left: 800px;
margin-top: -50px;
}

.box .phone1{
color: white;
position: absolute;
margin-left: 770px;
margin-top: -45px;
}

.box .b{
margin-left: 800px;
margin-top: 15px;
}

.box .calculator1{
color: white;
position: absolute;
margin-left: 770px;
margin-top: 18px;
}

.box .c{
margin-left: 1035px;
margin-top: -63px;
}

.box .mail1{
color: white;
position: absolute;
margin-left: 1000px;
margin-top: -58px;
}

.box .lisensi{
color: rgb(82, 78, 78);
margin-top: 110px;
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

.icon{
position: absolute;
margin-top: 580px;
margin-left: -20px;
}

.icon .telpicon{
margin-top: 340px;
}

.icon .emailicon{
margin-top: 490px;
}

.icon .h41{
margin-left: 390px;
margin-top: 170px;
font-family: 'Segoe UI','Open Sans', 'Helvetica Neue', sans-serif;
position: absolute;
word-spacing: 2px;
width: 300px;
line-height: 30px;
font-weight: 500;
font-size: 18px;
}

.icon .h42{
margin-left: 390px;
margin-top: 353px;
font-family: 'Segoe UI','Open Sans', 'Helvetica Neue', sans-serif;
position: absolute;
word-spacing: 2px;
font-weight: 500;
width: 300px;
line-height: 30px;
font-size: 18px;
}

.icon .h43{
margin-left: 390px;
margin-top: 503px;
font-family: 'Segoe UI','Open Sans', 'Helvetica Neue', sans-serif;
position: absolute;
word-spacing: 2px;
font-weight: 500;
width: 300px;
line-height: 30px;
font-size: 18px;
}

form{
position: absolute;
margin-top: 725px;
margin-left: 700px;
display: block;
}

form input{
font-size: 16px;
padding: 8px 10px;
border-radius: 5px;
outline: none;
margin-top: -10px;
border: 1px solid #bbb;
font-weight: 400;
width: 400px;
font-family: 'Segoe UI','Open Sans', 'Helvetica Neue', sans-serif;
}

form textarea{
margin-top: -10px;
width: 400px;
height: 100px;
font-size: 16px;
font-family: 'Segoe UI','Open Sans', 'Helvetica Neue', sans-serif;
font-weight: 400;
border: 1px solid #bbb;
border-radius: 5px;
outline: none;
padding: 5px 10px;
}

form input::placeholder{
color: #ced4da;
}

form .nama{
transition: .4s ease all;
}

form .nama:hover{
border: 1px solid rgb(34, 161, 235);
}

form .email{
transition: .4s ease all;
}

form .email:hover{
border: 1px solid rgb(34, 161, 235);
}

form .pesan{
transition: .4s ease all;
}

form .pesan:hover{
border: 1px solid rgb(34, 161, 235);
}

form td{
display: block;
width: 200px;
font-family: 'Segoe UI';
font-weight: 500;
margin-top: 20px;
}

form .btn{
background: rgb(34, 161, 235);
outline: none;
border-radius: 20px;
padding: 8px 15px;
font-family: 'Segoe UI';
color: white;
width: 150px;
margin-top: -20px;
font-weight: 600;
transition: .4s ease all;
}

form .btn2{
background: gray;
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
const btn = document.querySelector('.btn');
const nama = document.querySelector('.nama');
const email = document.querySelector('.email');
const pesan = document.querySelector('.pesan');
const tanggal = document.querySelector('.tanggal');

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

btn.addEventListener("click", function(){
tanggal.value = new Date();
alert("Pesan Berhasil Terkirim");
});

setInterval(function(){
if(nama.value == "" || email.value == "" || pesan.value == ""){
btn.setAttribute("disabled","active");
btn.setAttribute("style","user-select: none;");
btn.classList.remove("btn3");
} else {
btn.removeAttribute("disabled");
btn.setAttribute("style","background: rgb(34, 161, 235); cursor: pointer;");
btn.classList.add("btn3");
}
}, 100);


</script>

</html>