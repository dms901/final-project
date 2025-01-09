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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="section-tampilan">
        <div class="container_2">
            <div class="box">
                <?php 
                
                       $gender = $_POST['table_db'];


                       if($gender=='pria' or $gender == 'wanita'){

                             $produk = mysqli_query($koneksi, "SELECT * FROM produk WHERE gender='$gender' and kategori ='".$_POST['order']."' ");
                         }
                         elseif( $gender =='home'){
                            $produk = mysqli_query($koneksi, "SELECT * FROM produk");  
                         }
                        if(mysqli_num_rows($produk) >0){
                            while($pk = mysqli_fetch_array($produk)){ 
                       
                          
                                ?> 
        
                        <a href="produk_detail.php?id=<?php echo $pk['id_produk'] ?>">
                                <div class="col-4">
                                
                                    <img  src="foto/<?php echo $pk['image']?>" alt="">
                                    <p class="nama" name="produk"><?php echo $pk['nama_produk'] ?> </p>
                                    <p class="harga">Rp. <?php echo number_format($pk['harga_produk'] ) ?></p>
                                
                                </div>
                        </a>
               
            <?php }}else{ ?>
          
                <p>Produk Tidak Ada</p>
              <?php } ?>
             </div>
        </div>
    </div>
</body>
</html>