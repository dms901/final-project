<?php 
session_start();

if(!isset($_SESSION['user'])){
    header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="javascript.js"></script>
    <title>Form Upload</title>
</head>
<body>

    <div class="menu" border="1" >
        <button class="back-home"onclick="window.history.go(-1);">Back</button>
    </div>

    <div class="section">
        <div class="container-up">
            <div class="layout-up">
                <div class="box-up">
                    <form method="post" onsubmit="onsubmit2()" id="form-data">
                        
                    <h2>Fitur Tambah Produk</h2><br>
            
                        <div class="nama_produk">
                            <label for="nama_produk" >Nama Produk&emsp13;&emsp;
                                <input type="text" name="nama_produk" id="nama_produk"class="input">
                            </label>
                        </div><br>
                        
                        <div class="kategori">
                            <label for="kategori">Kategori Produk&nbsp;
                                <input type="text" name="ketegori" id="kategori" class="input">
                            </label> 
                        </div><br>

                        <div class="harga">
                            <label for="harga">Harga Produk&emsp;&emsp13;
                                <input type="text" name="harga" id="harga">
                            </label> 
                        </div><br>

                        <div class="deskripsi">
                            <label for="deskripsi">Deskripsi Produk
                                <textarea name="deskripsi" id="deskripsi" rows="5"></textarea>
                            </label>
                        </div><br>

                        <div class="ukuran1">
                            <label for="ukuran1">Ukuran 1 &emsp;&emsp;&emsp;
                            <input type="text" name="ukuran1" id="ukuran1">
                            </label> 
                        </div><br>

                        <div class="ukuran2">
                            <label for="ukuran2">Ukuran 2 &emsp;&emsp;&emsp;
                                <input type="text" name="ukuran2" id="ukuran2" >
                            </label> 
                        </div><br>

                        <div class="ukuran3">
                            <label for="ukuran3">Ukuran 3 &emsp;&emsp;&emsp;
                                <input type="text" name="ukuran3" id="ukuran3">
                            </label> 
                        </div><br>

                        <div class="jenis-kelamin">
                                Gender &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <input type="radio" name="jenkel" id="jenis_pria" value="pria">pria
                                <input type="radio" name="jenkel" id="jenis_wanita" value="wanita">wanita
                    
                         </div><br>
                            <div class="foto">
                                <label for="foto"> Foto
                                    <input type="file" name="foto" id="foto">
                                </label>
                        
                            </div><br>
                        
                        <input type="submit" name="kirim" value="Kirim" id="submit" class="submit"><br>
                        <input type="reset" value="Batal" class="batal-up">
                    </form>
                    
                    </div>
                </div>
            </div>
    </div>

    <div class="footer">
         <div class="footer-content">
            Copyright &copy; 2024 E-Commerce Fashion

            <span id="time"></span>
        </div>
    </div>
</body>
</html>