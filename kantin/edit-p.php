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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ubah Data</title>
    <link rel="stylesheet" href="sign.css">
  </head>
  <body style="padding-right: 15px;">
    <div class="container-fluid mt-4">
      <a href="profil.php" class="ms-3"><img src="./img/arrow2.png"></a>
        <form action="" method="post">
            <div class="row d-flex justify-content-center">
                <div class="col-8" style="color: #545454;">
                    <div class="ms-4">
                        <h1 class="text-center">ubah data</h1>
                        <h5 class="text-center">Silahkan masukkan data baru</h5>
                          <?php 
        include "connect.php";
        
        $data = mysqli_query($koneksi,"select * from data_user where id='$_GET[ubah]'");
        while($tampil = mysqli_fetch_array($data)){
          echo "
          <div class='mb-3 mt-4'>
          <input required style='color: #545454;' type='number' class='form-control p-3 handphone' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='No Handphone' name='handphone' value='$tampil[no_handphone]'>
          </div>
          <div class='mb-3'>
            <input required style='color: #545454;' type='email' class='form-control p-3 email' id='exampleInputPassword1' placeholder='E-mail' name='email' value='$tampil[email]'>
          </div>
          <div class='mb-3'>
            <input required style='color: #545454;' type='text' class='form-control p-3 nama' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Username' name='nama' value='$tampil[nama]'>
            </div>
            <div class='mb-3'>
            <input disabled style='color: #545454;' type='text' class='form-control p-3 foto' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Foto Profil' name='foto' value='$tampil[foto]'>
            </div>
            <div class='mb-3'>
            <button type='button' class='btn-primary px-4 py-1 link' style='border: none; border-radius: 5px;'>Link</button>
            <input class='file' type='file'>
            </div>
        
          ";}
        
        ?>       
        
        <div class="mb-3">
             <button type="button" class="btn btn-dark fw-normal px-4 rounded-3 btn-sign" data-bs-toggle="modal" name="kirim">CONFIRM</button>
              </div>
        </div>
                    </div>
                </div>

            </div>

            <!-- Notif -->
              <div class="modal notifikasi" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title notif" id="staticBackdropLabel">Data berhasil diubah!</h5>
                    </div>
                      <input name="kirim" type="submit" class="btn btn-primary" value="OKEE">
                  </div>
                </div>
              </div>
            
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    

    <?php 
include "connect.php";
if(isset($_POST['kirim'])){
    mysqli_query($koneksi,"update data_user set
    no_handphone = '$_POST[handphone]',
    email = '$_POST[email]',
    nama = '$_POST[nama]',
    foto = '$_POST[foto]'");
    header('location:profil.php');
}
?>

  </body>

<script>
  const handphone = document.querySelector(".handphone");
  const email = document.querySelector(".email");
  const nama = document.querySelector(".nama");
  const password = document.querySelector(".password");
  const foto = document.querySelector(".foto");
  const file = document.querySelector(".file");
  const btnSign = document.querySelector(".btn-sign");
  const link = document.querySelector(".link");
  const notifikasi = document.querySelector(".notifikasi");

  setInterval(() => {
    if(handphone.value == ""){
      btnSign.setAttribute("data-bs-target", "#exampleModal");
    } else if(email.value == ""){
      btnSign.setAttribute("data-bs-target", "#exampleModal");
    } else if(nama.value == ""){
      btnSign.setAttribute("data-bs-target", "#exampleModal");
    } else {
      btnSign.setAttribute("data-bs-target", "#staticBackdrop");
    }
  },500);

  btnSign.addEventListener("click", ()=> {
    if(foto.value == ""){
      foto.value = "https://secure.gravatar.com/avatar/9abaa3363b92bb1f8f6bfe1069bfb2a7?s=300&d=mm&r=pg";
    }
  });

  link.addEventListener("click", ()=> {
    foto.removeAttribute("disabled");
  });

  file.addEventListener("click", ()=> {
    foto.setAttribute("disabled", "true");
  });

</script>


</html>