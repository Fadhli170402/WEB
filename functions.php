<?php
//koneksi dalam data base
$koneksi = mysqli_connect("localhost","root","","toko_sepatu");
 
function hapus($id){
    global $koneksi;
    mysqli_query($koneksi, "DELETE From user WHERE id_customor= $id");
    return mysqli_affected_rows($koneksi);
}
?>
