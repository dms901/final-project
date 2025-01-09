<?php 
session_start();

include "koneksi2.php";

if(!isset($_SESSION['user'])){
    header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="javascript.js"></script>
    <title>Pembelian</title>
</head>
<body>
    <?php 
    include "koneksi2.php";

    $id_user=$_SESSION['id_user'];
    
    $order_beli = $_POST['order_beli'];

    if($_POST['metod_beli'] == 'keranjang'){

        $query_beli = mysqli_query($koneksi, "SELECT keranjang.*,produk.*,user_aplikasi.* 
                                                        FROM keranjang INNER JOIN produk ON keranjang.id_produk=produk.id_produk 
                                                        INNER JOIN user_aplikasi ON keranjang.id_user=user_aplikasi.id_user 
                                                        WHERE keranjang.id='$order_beli' and user_aplikasi.id_user='$id_user'");
                 
           
    }elseif($_POST['metod_beli']=='detail_produk'){
        $query_beli = mysqli_query($koneksi, "SELECT produk.*,user_aplikasi.* 
                                                FROM produk CROSS JOIN user_aplikasi
                                                WHERE user_aplikasi.id_user='$id_user' AND produk.id_produk='$order_beli'");


    }if(mysqli_num_rows($query_beli)>0){
        while($pb = mysqli_fetch_object($query_beli)){ 
    
    ?>
<div class="container-popup">
    <table class="popup-beli">
        <tr>
            <td>
                <div class="alamat-pengirim">
                    <h2><img src="image/maps.jpeg" alt="">Alamat Pengirim</h2>
                    <?php echo $pb->alamat ?>
                    
                </div>
            </td>
        </tr>

        <tr>
            <td class="content-beli">
                <img src="foto/<?php echo $pb->image?>" alt="">
              <div class="detail">
                <h6><?php echo $pb->nama_produk ?></h6>
              </div>
                <p>
                    <?php if($_POST['metod_beli'] == 'keranjang'){ ?>
                        Varian : <?php echo $pb->size ?><br>
                    <?php }elseif($_POST['metod_beli'] == 'detail_produk') { ?>
                        Varian : <span class="varian_beli"></span><br>
                    <?php } ?>
                    Rp.<?php echo number_format($pb->harga_produk) ?>
                </p>
            </td>
            
        </tr>

        <tr>
            <td>    
                <div class="content-bayar">
                    <label for="metod-bayar">Pilih Metode Pembayaran</label>
                    <select name="metod-bayar" id="metod-bayar">
                            <option value="Pilih Pembayaran">Pilih Pembayara</option>
                            <option value="OVO">OVO</option>
                            <option value="DANA">DANA</option>
                            <option value="Virtual BRI">Virtual BRI</option>
                            <option value="Virtual BCA">Virtual BCA</option>
                            <option value="Virtual Permata">Virtual Permata</option>
                    </select><br>

                    <b>Metode Pembayaran : <span id="content-pembayaran"></span></b>

                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="content-jasa">
                    <label for="jasa-kirim">Pilih Metode Pembayaran</label>
                    <select name="jasa-kirim" id="jasa-kirim">
                            <option value="Pilih Pembayaran">Jasa Pengiriman</option>
                            <option value="JNE">JNE</option>
                            <option value="J&T">J&T</option>
                            <option value="Sicepat">Sicepat</option>
                            <option value="Reguler">Reguler</option>
                            
                    </select><br>

                    <b>Jasa Kirim : <span id="content-jaskim"></span></b>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="content-harga">
                    <div class="harga-total">
                        Harga Total : Rp. <span id="total-harga-beli"><?php echo number_format($pb->harga_produk) ?></span><input id="total-harga" class="hiden-samar" value="<?php echo $pb->harga_produk ?>">
                    </div><br>
                    <button type="button" class="close-1">Batal</button>
                    <button type="button" class="check-out">Check Out</button>
                </div>
        </tr>
    </table>
 </div>
    <?php }}else{ ?>
        Produk Tidak Tersedia
    <?php } ?>
</body>
</html>