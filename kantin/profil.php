<?php 
session_start();
if(!isset($_SESSION['login'])){
    header('location:login.php');
    exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="profil.css">
    <title>Profil</title>
  </head>
  <body>

  <div class="container">

  <nav class="navbar navbar-light fixed-top" style="background: #C4DDFF; box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.3);">
  <div class="container">
    <a class="navbar-brand" style="color: #545454; font-weight: 600;" href="#">plis jajan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="main-page.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Restaurant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pesanan</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="row mt-5 ms-1">
    <div class="col mt-4 ms-5">
        <h1 style="color: #545454">Profil</h1>
    </div>
</div>
  


<?php 
        include "connect.php";
        
        $data = mysqli_query($koneksi,"select * from data_user where id");
        while($tampil = mysqli_fetch_array($data)){
          
          echo "
          <div class='row mt-3 ms-3'>
              <div class='row col-md-6 text-center ms-5 py-4 box' style='background: white; border-radius: 25px;'>
                  <img src='$tampil[foto]' class='rounded-circle mx-auto d-block' style='width: 200px; height: 170px;'>
                      <h4 class='mt-2'>$tampil[nama]<h4>
          <h4>$tampil[no_handphone]</h4>
          <h4>$tampil[email]</h4>
              
            <td><a href ='edit-p.php?ubah=$tampil[id]' class='col-md-3 mx-auto text-center p-1 mt-4' style='background: #06283D; text-decoration: none; color: white; border-radius: 15px'>edit profil</a></td>
            ";}
        
        ?>
        </div>
    </div> 

    <div class="row menu-btn">
      <div class="col-md-12">
        <div class="round">
        <img class="logo" src="img/Vector.png">
        </div>
      <a href="#"><button class="security ms-2">Pengaturan Keamanan</button> <img src="img/arrow.png" style="margin-left: -35px;"></a>
    </div>
    <div class="col-md-12">
        <div class="round">
        <img class="logo" src="img/logout.png">
        </div>
        <a href="logout.php"><button class="btn mt-1">Logout</button> <img src="img/arrow.png" style="margin-left: -35px;"></a>
    </div>

 
  </div> <!--Container -->

    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>
