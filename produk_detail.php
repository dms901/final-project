<?php 
session_start();

if(!isset($_SESSION['user'])){
    header('location:login.php');
}
include "koneksi2.php" 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="javascript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="menu" border="1" >
        <button class="back-home"onclick="window.history.go(-2);">BACK</button>
    </div>
    <div class="container">
                    <?php 
                    // Checking, if post value is
                        // set by user or no
                    
                            $produk = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk ='".$_GET['id']."'");
                            $p = mysqli_fetch_object($produk);
                                    ?>
                        <div class="section">
                            <div class="container_3">
                                <div class="detail-box">
                                    <div class="detail-conten">Detail Produk</div>
                                    <div class="layout">
                                            <div class="col-2">       
                                                <img  src="foto/<?php echo $p->image?>" alt="">    
                                            </div>
                                                <div class="col-2">
                                                    <p class="nama" name="produk"><?php echo $p->nama_produk ?> </p>
                                                    <p class="descripsi"><?php echo $p->deskripsi ?><br><?php echo $p->ukuran_1 ?><br><?php echo $p->ukuran_2 ?><br><?php echo $p->ukuran_3 ?><br></p>
                                                    <p class="harga">Rp. <?php echo number_format($p->harga_produk ) ?></p>
                                                    <div class="ukuran" onclick="radio()">Pilih Ukuran Anda <br>
                                                        <input type="radio" name="ukuran" id="xl" value="XL">XL
                                                        <input type="radio" name="ukuran" id="l" value="L">L
                                                        <input type="radio" name="ukuran" id="m" value="M">M
                                                    </div><br>
                                                    
                                                    <div class="btn-1">
                                                        <button type="button" id="btn-beli-k" class="btn1" value="<?php echo $p->id_produk ?>">BELI</button>
                                                    </div>
                                                    <div>
                                                        <input type="button" value="SIMPAN" id="keranjang" class="btn2" onclick="Onkeranjang()" name="<?php echo $p->id_produk ?>">
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
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
    </div>
    <script>
        history.pushState({},"",'produk_detail.php');
    </script>
</body>
</html>