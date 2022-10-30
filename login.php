<?php
 session_start();
 include 'koneksi.php';
 // menangkap data yang dikirim dari form login 
 if(isset ($_POST["submit"]) ){
    $username = $_POST['username'];
    $password = $_POST['password'];
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");
    $cek = mysqli_num_rows($data);
     if($cek > 0){
       $_SESSION['username']=$username;
       $_SESSION['status'] = "login";
       echo "<script>
              alert('Login Berhasil')
             </script>";
       header("location:tampil.php");
     }
     else{     
       echo "<script> alert ('login gagal ! username dan password tidak benar ');</script>";
       echo "<script> window.location ='login.php';</script>";
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

    <link href="style.css" rel="stylesheet">
    <title>LOGIN</title>

  </head>
  <body>
  <div class="global-container">
    <div class="card login-form">
        <div class="card-body">
          <h1 class="card-title text-center"> L O G I N</h1>  
        </div>
        <div class="card-text">
        <form method="POST" action="">
             <div class="mb-3">
             <label for="username" class="username">Username</label>
          <input type="username" name="username" class="form-control" id="username" placeholder="Username">
              </div>
             <div class="mb-3">
             <label for="password" class="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
             </div>
             <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a><hr>
                </div>
             <div class="d-grid gap-2"> 
             <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
             </div>
             
        </form>
        </div>
    </div>
 </div>
 </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>