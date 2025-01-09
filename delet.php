<?php 
include "koneksi2.php";

if(isset($_POST['order_id'])){
$order_delet = $_POST['order_id'];

$query_delet = mysqli_query($koneksi, "DELETE FROM keranjang WHERE id='$order_delet' ");

    if($query_delet == true){
        echo"Produk Berhasil Dihapus";
    }else{
        echo"Produk Gagal Dihapus";
    }
}


?>