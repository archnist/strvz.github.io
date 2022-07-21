<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sign.css">
    <title>Sign Up</title>
  </head>
  <body>
    <div class="container-fluid ms-5 mt-5">
        <form action="" method="post" class="ms-5">
            <div class="row">
                <div class="col-6" style="color: #545454;">
                    <div class="ms-4">
                        <h1 class="text-center">Sign Up</h1>
                        <h5 class="text-center">Registrasi akun anda</h5>
                        <div class="mb-3 mt-4">
                          <input required style="color: #545454;" type="number" class="form-control p-3 handphone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Handphone" name="handphone">
                        </div>
                        <div class="mb-3">
                          <input required style="color: #545454;" type="email" class="form-control p-3 email" id="exampleInputPassword1" placeholder="E-mail" name="email">
                        </div>
                        <div class="mb-3">
                            <input required style="color: #545454;" type="text" class="form-control p-3 nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="nama">
                          </div>
                          <div class="mb-3">
                            <input required style="color: #545454;" type="password" class="form-control p-3 password" id="exampleInputPassword1" placeholder="Password" name="password">
                          </div>
                          <div class="mb-3">
                            <button type="button" class="btn btn-dark fw-normal px-4 rounded-3 btn-sign" data-bs-toggle="modal">SIGN UP</button>
                            <a class="float-end daftar" href="login.php">Sudah punya akun</a>
                          </div>
                    </div>
                </div>

                <div class="col-6 mt-5">
                    <div class="ms-5 mt-3">
                        <img src="../kantin/img/sign.png" class="rounded ms-5">
                    </div>
                  </div>

            </div>

            <!-- Notif -->
              <div class="modal notifikasi" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title notif" id="staticBackdropLabel">Akun berhasil dibuat!</h5>
                    </div>
                      <input name="kirim" type="submit" class="btn btn-primary" value="OKEE">
                  </div>
                </div>
              </div>
            
          </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    

<!-- Notif -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 80px;">Harap isi data terlebih dahulu</h5>
      </div>
      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OKEE</button>
    </div>
  </div>
</div>

    <?php 
include "connect.php";
if(isset($_POST['kirim'])){
    mysqli_query($koneksi,"insert into data_user set
    no_handphone = '$_POST[handphone]',
    email = '$_POST[email]',
    nama = '$_POST[nama]',
    password = '$_POST[password]'");
}
?>

  </body>

<script>
  const handphone = document.querySelector(".handphone");
  const email = document.querySelector(".email");
  const nama = document.querySelector(".nama");
  const password = document.querySelector(".password");
  const btnSign = document.querySelector(".btn-sign");
  const notifikasi = document.querySelector(".notifikasi");

  setInterval(() => {
    if(handphone.value == ""){
      btnSign.setAttribute("data-bs-target", "#exampleModal");
    } else if(email.value == ""){
      btnSign.setAttribute("data-bs-target", "#exampleModal");
    } else if(nama.value == ""){
      btnSign.setAttribute("data-bs-target", "#exampleModal");
    } else if(password.value == ""){
      btnSign.setAttribute("data-bs-target", "#exampleModal");
    } else {
      btnSign.setAttribute("data-bs-target", "#staticBackdrop");
    }
  },500);

</script>


</html>