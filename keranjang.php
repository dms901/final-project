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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <title>Produk Tersimpan</title>
</head>
<body>
    <div class="menu" border="1">
         <button class="back-home"onclick="window.history.go(-1);">BACK</button>
    </div>



    
<?php 
    $id_user = $_SESSION['id_user'];

    $produk_tersimpan = mysqli_query($koneksi, "SELECT keranjang.*,produk.*,user_aplikasi.* 
                                                              FROM keranjang INNER JOIN produk ON keranjang.id_produk=produk.id_produk 
                                                              INNER JOIN user_aplikasi ON keranjang.id_user=user_aplikasi.id_user 
                                                              WHERE keranjang.id_user='$id_user'");

    if(mysqli_num_rows($produk_tersimpan)>0){
        while($ptn = mysqli_fetch_array($produk_tersimpan)){


?>


<div class="container-keranjang">
    <div class="layout-keranjang">
        <table class="table-keranjang" >
                <tr>
                    <td class="img-produk"><img src="foto/<?php echo $ptn['image']?>" alt=""><br><?php echo $ptn['nama_produk'] ?></td>
                    <td class="des-size" colspan="2">
                        <?php echo $ptn['deskripsi'] ?><br><br>
                        Descripsi Size :<br><br>
                        <?php echo $ptn['ukuran_1'] ?><br>
                        <?php echo $ptn['ukuran_2'] ?><br>
                        <?php echo $ptn['ukuran_3'] ?><br><br>
                        Size Terpilih : <?php echo $ptn['size'] ?><br><br>

                       <div class="keranjang-harga">
                            Rp.<?php echo number_format( $ptn['harga_produk']) ?>
                       </div><br><br>
                       
                       <button class="btn-beli" id="btn-beli" value="<?php echo $ptn['id']?>">Beli</button>
                       <button class="btn-hapus"  id="delet" onclick="deletItem()" value="<?php echo $ptn['id']?>">Hapus</button>
                      
                    </td>
                </tr>
        </table>
    </div>
</div>



<?php }}else{ ?>
        Tidak Ada Produk Tersimpan
    <?php } ?>
    <div class="container-popup">
        <div id="dialog" class="popup">
            <div class="popup-content">
               
                
               
                
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-content">
            Copyright &copy; 2024 E-Commerce Fashion <br><br>

            <span id="time"></span>
        </div>
    </div>
</body>
<script>
   
</script>
</html>