 <?php 
 session_start();
 include "koneksi2.php"
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="javascript.js"></script>
    <title>Login</title>
</head>
<body>
<?php 
if(isset(($_POST['username']))){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query_login = mysqli_query($koneksi, " select * from user_aplikasi where username='$username' and password='$password'");

    if(mysqli_num_rows($query_login) > 0){
        $data_login = mysqli_fetch_array($query_login);
        $_SESSION['user'] = $data_login;
        $_SESSION['nama'] = $data_login['nama_user'];
        $_SESSION['username'] = $data_login['username'];
        $_SESSION['alamat'] = $data_login['alamat'];
        $_SESSION['id_user'] = $data_login['id_user'];
        $_SESSION['type_user'] = $data_login['type_user'];
        echo ' <script>alert("Selamat Datang, '.$data_login['nama_user'].'"); location.href ="E-commerce.php";</script>';
    }else{
        echo '<script>alert("Maaf Username/Password yang anda masukan tidak sesuai");</script>';
    }
}

?>
<div class="container-login">
        <div class="box-login">
                <form method="POST" class="menu-login">
                    <table class="table-login">

                        <tr>
                            <td>
                                <h3>Login User</h3>
                            </td>
                        </tr>

                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" id=""></td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" id=""></td>
                        </tr>

                        <div  class="button-login">
                        
                            <button type="submit" class="login-user">Login</button><br><br>
                            <button id="register" class="register" type="button" onclick="pageRegister()">Register</button>
                            
                        </div>

                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>