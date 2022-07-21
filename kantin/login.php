<?php 

session_start();

if(isset($_SESSION["login"])){
    header("location: main-page.php");
} 

include "connect.php";

if(isset($_POST['login'])){
	   $nama = $_POST['username'];
	   $password = $_POST['password'];
	   $qry = mysqli_query($koneksi,"SELECT * FROM data_user WHERE nama='$nama' AND 
	   password = '$password'");
	   $cek = mysqli_num_rows($qry);
	   if ($cek==1){
		   $_SESSION["login"] = $nama;
		   header("location: main-page.php");
		   exit;
	   } 
	   
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sign.css">
    <title>Login</title>
  </head>
  <body>
    <div class="container-fluid ms-5 mt-5">
        <form action="" method="post" class="ms-5">
            <div class="row">
                <div class="col-6 mt-4" style="color: #545454;">
                    <div class="ms-4 mt-5">
                        <h1 class="text-center">Login</h1>
                        <h5 class="text-center">Masukkan akun anda</h5>
                        <div class="mb-3 mt-4">
                          <input name="username" required style="color: #545454;" type="text" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                        </div>                       
                          <div class="mb-3">
                            <input name="password" required style="color: #545454;" type="password" class="form-control p-3" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <div class="mb-3">
                            <button name="login" type="submit" class="btn btn-dark fw-normal px-4 rounded-3">LOGIN</button>
                            <a class="float-end daftar" href="sign.php">Belum punya akun?</a>
                          </div>
                    </div>
                </div>

                <div class="col-6 mt-5">
                    <div class="ms-5 mt-3">
                        <img src="../kantin/img/login.png" class="rounded ms-5">
                    </div>
                  </div>

            </div>
            
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bg1ldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    
  </body>
</html>