<?php 
session_start();
if(!isset($_SESSION['login'])){
    header('location:login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantinzone</title>
</head>
<body>

<?php 
        include "connect.php";
        
        $data = mysqli_query($koneksi,"select * from data_user where id");
        while($tampil = mysqli_fetch_array($data)){
            
            echo "
            <h1> $tampil[nama] </h1>
            <a href='profil.php'>profil</a>
            <a href='logout.php'>logout</a>
         
            ";}
        
        ?>

</body>
</html>