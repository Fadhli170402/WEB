<?php
include 'koneksi.php';

$id = $_GET['id'];
if($id > 0){
    mysqli_query($koneksi,"DELETE FROM user WHERE id_customor='$id'");
    echo "
    <script>
         alert('Data Berhasil Dihapus');
         document.location.href='tampil.php';
    </script>";
      //header("location:tampil.php");   
}else{
    echo "
    <script>
         alert('Data Gagal Dihapus');
    </script>";
}
// mysqli_query($koneksi,"DELETE FROM user WHERE id_customor='$id'");
// header("location:tampil.php");
?>
