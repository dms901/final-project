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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="javascript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <title>Akun</title>
</head>
<body>
    <div class="menu" border="1" >
        <button class="back-home"onclick="window.history.go(-1);">BACK</button>
    </div>
    
    <div class="container-akun">
        <div class="layout-akun">
            <div class="menu-akun">

            
                <table class="info-akun" border="1">
                    <tr>
                        <td colspan="3">
                         <img src="foto/akun.png" alt="" class="img-infoakun" >
                        </td>
                    </tr>
                            <tr>
                                <td>User Anda</td>
                                <td><?php echo $_SESSION['username']  ?></td>
                                <td><input type="button" value="edit"></td>
                            </tr>

                            <tr>
                                <td>Nama Anda</td>
                                <td> <?php echo $_SESSION['nama']  ?></td>
                                <td><input type="button" value="edit"></td>
                            </tr>
                            <tr>
                                <td>Alamat Anda</td>
                                <td> <?php echo $_SESSION['alamat']  ?></td>
                                <td><input type="button" value="edit"></td>
                            </tr>

                            <?php //pengecekan akun untuk akses fitur upload produk baru
                            if($_SESSION['type_user']=='admin'){
                            
                            ?>
                            <tr>
                                <td colspan="3"><a href="form_upload1.php" class="tambah-produk">Tambah Produk</a></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="3"><a href="logout.php" class="logout">Logout</a></td>
                            </tr>
                         
                </table>
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
</html>