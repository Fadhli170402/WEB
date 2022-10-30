<?php
include 'koneksi.php';
$koneksi = mysqli_connect("localhost","root","","toko_sepatu");

 if(isset ($_POST["submit"]) ) {
     $username = $_POST['username'];
     $password = $_POST['password'];
     $level = $_POST['level'];

     $query = "INSERT INTO user 
                  Values 
                  ('','$username','$password','$level')
                  ";
    mysqli_query($koneksi,$query);
    echo "
        <script>
           alert('Data Berhasil Ditambahkan');
           document.location.href='tampil.php';
        </script>";
 }
 if(isset ($_POST["back"])){
  echo"
  <script>
  document.location.href='tampil.php';
  </script>";
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

    <title>Input User</title>
  </head>
  <body>
  <div class="container">		
		<h1 styel="align-center"> Tambah User</h1> 
		<!-- <form class="form-horizontal"> -->
		<form action="" method="POST">
        <div class="mb-3">
          <label for="username" class="username">Username</label>
          <input type="username" name="username" class="form-control" id="username" placeholder="Username">
        </div>
        <div class="mb-3">
          <label for="password" class="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="mb-3">
          <label for="level" class="level">Level</label>
          <input type="level" name="level" class="form-control" id="level" placeholder="level">
        </div>
      <button type="submit" name="submit" class="btn btn-outline-primary" onclick="submit">Save</button>
      <button type="Back" name="back" class="btn btn-danger">Back</button>
    </form>

    <script>

    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>