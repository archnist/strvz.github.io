<?php 

session_start();

if(isset($_SESSION["masuk"])){
    header("location: ../admin/web.html");
} 

include "coba.php";

if(isset($_POST['masuk'])){
	   $username = $_POST['nama'];
	   $password = $_POST['password'];
	   $qry = mysqli_query($koneksi,"SELECT * FROM admin WHERE nama='$username' AND 
	   password = '$password'");
	   $cek = mysqli_num_rows($qry);
	   if ($cek==1){
		   $_SESSION["masuk"] = $username;
		   header("location: ../admin/web.html");
		   exit;
	   } else {
           echo "<h4 class='peringatan'>Data Tidak Valid!</h4>";
       }
	   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="shortcut icon" href="favicon.ico">
    <title>SMKN 26 JAKARTA</title>
</head>
<body>
    <form action="" method="post">
        <table>

            <h2 class="title">Admin Login</h2>
        
           <tr>
               <td width="80">Username</td>
               <td><input type="text" name="nama" class="nama" placeholder="Username"></td>
           </tr>
        
           <tr>
               <td>Password</td>
               <td><input type="password" name="password" class="password" placeholder="Password"></td>
           </tr>
        
           <tr>
               <td></td>
               <td><button name="masuk" href="../Admin/web.html" class="btn">Login</button></td>
           </tr>

           <a href="web.html"><h2 class="visit" style="user-select: none;">Masuk Sebagai Pengunjung <i class="fas fa-long-arrow-alt-right arrow"></i></h2></a>
        
        </table>
        </form>

<img src="images/Schooline.png" class="gambar1">
<h3 class="text1">SMK NEGERI 26 JAKARTA</h3>
<h4 class="text1" style="margin-top: 490px; font-size: 13px; margin-left: 790px">Belajar, Bekerja, Membangun</h4>
        
<img src="images/img1.png" class="img1">

<i class="fas fa-cloud awan1"></i>
<i class="fas fa-cloud-sun sun1"></i>
<i class="fas fa-cloud awan2"></i>
<i class="fas fa-cloud-rain rain2"></i>

<i class="fas fa-space-shuttle roket"></i>
<img src="images/fire.png" class="api">

<p class="siap">Roket Siap <br> Meluncur!</p>

<i class="fas fa-fighter-jet jet"></i>

</body>

<head>
    <style>

body{
overflow: hidden;
background:rgb(29, 66, 230);
}

form{
position: absolute;
margin-left: 170px;
margin-top: 70px;
background: white;
box-shadow: 0 0 6px rgb(122, 114, 114);
width: 470px;
height: 500px;
border-top-left-radius: 10px;
border-bottom-left-radius: 10px;
}

table{
margin-top: 100px;
margin-left: 50px;
position: absolute;
}

.title{
position: absolute;
font-family: 'Segoe UI';
font-size: 40px;
margin-left: 110px;
user-select: none;
color: rgb(29, 66, 230);
}

form td{
display: block;
font-family: 'Segoe UI';
font-size: 25px;
color: rgb(22, 57, 216);
font-weight: 700;
margin-top: 30px;
}

form input{
padding: 3px 5px 8px 0;
font-size: 20px;
font-family: 'Segoe UI';
width: 350px;
position: absolute;
margin-top: -25px;
border: none;
color: rgb(27, 26, 26);
font-weight: 500;
border-bottom: 1px solid #bbb;
transition: .4s ease all;
outline: none;
transition: .3s ease all;
}

form input:hover{
border-bottom: 2px solid rgb(55, 92, 255);
}

.gambar1{
position: absolute;
margin-top: 69px;
margin-left: 640px;
width: 370px;
padding: 29px 70px 140px;
background: rgb(58, 91, 240);
border-top-right-radius: 10px;
border-bottom-right-radius: 10px;
box-shadow: 0 0 4px rgb(122, 114, 114);
}

.text1{
position: absolute;
font-family: 'Segoe UI';
margin-left: 770px;
margin-top: 460px;
color: white;
letter-spacing: 1px;
}

form .btn{
text-decoration: none;
text-align: center;
padding: 10px 30px 10px;
background: rgb(58, 91, 240);
color: white;
font-size: 23px;
position: absolute;
width: 360px;
border-radius: 18px;
cursor: pointer;
margin-top: -10px;
border: none;
letter-spacing: 1px;
outline: none;
font-weight: 600;
transition: .4s ease all;
}

form .btn:hover{
background: rgb(31, 69, 240);
}

.visit{
position: absolute;
font-family: 'Segoe UI';
color: black;
font-size: 20px;
color: rgb(29, 66, 230);
margin-top: 440px;
margin-left: 80px;
}

.visit:hover .arrow{
margin-left: 25px;
}

.arrow{
font-size: 30px;
position: absolute;
margin-top: 3px;
margin-left: 10px;
transition: .5s ease all;
}

.img1{
position: absolute;
z-index: -2;
margin-left: 25px;
margin-top: -170px;
width: 1400px;
}

.awan1{
color: white;
font-size: 100px;
margin-left: 10px;
position: absolute;
animation: animate1 5s linear infinite;
transition: .4s ease all;
cursor: pointer;
}

.awan1:hover{
color: rgb(241, 236, 236);
}

.awan12{
opacity: 0;
z-index: -1;
}

.sun1{
color: white;
font-size: 110px;
margin-left: 10px;
z-index: -1;
position: absolute;
animation: animate1 5s linear infinite;
opacity: 0;
transition: .4s ease all;
cursor: pointer;
}

.sun12{
opacity: 1;
z-index: 1;
}

@keyframes animate1{
    0%{
        margin-left: 10px;
    }
    25%{
        margin-top: 40px; 
        margin-left: 15px;
    }
    50%{
        margin-left: 30px;
        margin-top: 20px;
    }
    75%{
        margin-left: 15px;
        margin-top: 10px;
    }
    100%{
        margin-left: 10px;
        margin-top: 0;
    }
}

.awan2{
color: white;
font-size: 100px;
margin-top: 50px;
margin-left: 1200px;
position: absolute;
animation: animate2 4s linear infinite;
transition: .4s ease all;
cursor: pointer;
}

.awan2:hover{
color: rgb(241, 236, 236);
}

.awan22{
opacity: 0;
z-index: -1;
}


.rain2{
color: rgb(202, 198, 198);
font-size: 110px;
margin-top: 50px;
margin-left: 1200px;
position: absolute;
z-index: -1;
opacity: 0;
animation: animate2 4s linear infinite;
transition: .4s ease all;
cursor: pointer;
}

.rain22{
opacity: 2;
z-index: 1;
}

@keyframes animate2{
    0%{
        margin-left: 1200px;
    }
    25%{
        margin-top: 35px; 
        margin-left: 1160px;
    }
    50%{
        margin-left: 1175px;
        margin-top: 25px;
    }
    75%{
        margin-left: 1185px;
        margin-top: 5px;
    }
    100%{
        margin-left: 1200px;
        margin-top: 50px;
    }
}

.peringatan{
position: absolute;
font-family: 'Segoe UI';
color: red;
margin-top: 475px;
margin-left: 340px;
z-index: 30;
text-align: center;
}

.peringatan2{
margin-left: 134px;
}

.roket{
position: absolute;
color: white;
font-size: 100px;
margin-top: 580px;
margin-left: -10px;
transform: rotate(270deg);
cursor: pointer;
user-select: none;
transition: 1s ease all;
}

.roket2{
animation: animate3 5s linear infinite;
}

@keyframes animate3 {
    0%{
        margin-top: 580px;
    }
    25%{
        margin-top: 400px;
    }
    50%{
        margin-top: 200px;
    }
    75%{
        margin-top: -800px;
    }
    100%{
        margin-top: -800px;
    }
}

.api{
position: absolute;
margin-left: 2px;
margin-top: 692px;
z-index: -1;
width: 100px;
height: 40px;
}

.api2{
animation: animate4 5s linear infinite;
}

@keyframes animate4 {
    0%{
        margin-top: 692px;
        height: 40px;
    }
    25%{
        margin-top: 512px;
        height: 70px;
        width: 110px;
        margin-left: -3px;
    }
    50%{
        margin-top: 312px;
        height: 90px;
        width: 120px;
        margin-left: -7px;
    }
    75%{
        margin-top: -800px;
    }
    100%{
        margin-top: -800px;
    }
}

.siap{
position: absolute;
font-family: 'Segoe UI';
background: white;
color: rgb(29, 66, 230);
font-weight: 800;
padding: 5px 20px 8px 35px;
border-radius: 10px 10px 10px 100px;
border-top-left-radius: 0;
border: 2px solid rgb(31, 69, 240);
margin-top: 600px;
margin-left: 70px;
user-select: none;
opacity: 0;
transition: .5s ease all;
}

.siap2{
opacity: 1;
}

.jet{
position: absolute;
color: white;
font-size: 60px;
margin-top: 100px;
margin-left: -200px;
transition: 1s ease all;
z-index: -1;
}

.jet2{
animation: animatejet 8s linear;
}

@keyframes animatejet {
    0%{
        margin-left: -200px;
    }
    25%{
        margin-left: 250px;
    }
    50%{
        margin-left: 750px;
    }
    75%{
        margin-left: 1500px;
    }
    100%{
        margin-left: 1500px;
    }
}

    </style>
</head>

<script>
const btn = document.querySelector('.btn');
const nama = document.querySelector('.nama');
const pass = document.querySelector('.password');
const awan1 = document.querySelector('.awan1');
const awan2 = document.querySelector('.awan2');
const sun1 = document.querySelector('.sun1');
const rain2 = document.querySelector('.rain2');
const roket = document.querySelector('.roket');
const api = document.querySelector('.api');
const siap = document.querySelector('.siap');
const jet = document.querySelector('.jet');

awan1.addEventListener("click", function(){
    this.classList.add("awan12");
    sun1.classList.add("sun12");
});

sun1.addEventListener("click", function(){
    this.classList.remove("sun12");
    awan1.classList.remove("awan12");
});

awan2.addEventListener("click", function(){
    this.classList.add("awan22");
    rain2.classList.add("rain22");
});

rain2.addEventListener("click", function(){
    this.classList.remove("rain22");
    awan2.classList.remove("awan22");
});

roket.addEventListener("click", function(){
this.classList.add("roket2");
api.classList.add("api2");
siap.classList.remove("siap2");
setTimeout(()=>{
    roket.setAttribute("style","margin-top: 3000px;");
    roket.classList.remove("roket2");
    api.classList.remove("api2");
}, 4900)
setTimeout(()=>{
    roket.setAttribute("style","margin-top: 580px;");
}, 6000)
});

roket.addEventListener("mouseenter", function(){
siap.classList.add("siap2");
});

roket.addEventListener("mouseout", function(){
siap.classList.remove("siap2");
});

setInterval(()=>{
jet.classList.add("jet2");
}, 10000)

setInterval(()=>{
jet.classList.remove("jet2");
}, 22000)

</script>

</html>