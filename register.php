<?php 
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
    <title>Register</title>
</head>
<body>

<?php 
include "koneksi2.php";

if(isset($_POST['fullName']) and isset($_POST['username']) and isset($_POST['password']) and isset($_POST['type_akun'])){

    $fullName = $_POST['fullName'];
    $alamat_user = $_POST['alamat_user'];
    $new_username = $_POST['username'];
    $new_password = md5($_POST['password']);
    $akun_type = $_POST['type_akun'];

	$user_ready = mysqli_query($koneksi, "select*from user_aplikasi where username='$new_username'");

	if(mysqli_num_rows($user_ready)<=0){
		$query_register = "insert into user_aplikasi values ('','$fullName','$new_username','$new_password','$alamat_user','$akun_type')";
        mysqli_query($koneksi, $query_register);
        echo ' <script>alert("Register Berhasil"); location.href ="login.php";</script>';
    }else{
        echo '<script>alert("Maaf Username yanag anda buat sudah terdaftar");</script>';
    }
}

?>

<div class="container-register">
        <div class="box-register">
                <form method="POST" class="menu-register" >
                    <table class="table-register">

                        <tr>
                            <td>
                                <h3>Register User</h3>
                            </td>
                        </tr>

                        <tr>
                            <td>Full Name</td>
                            <td><input type="text" name="fullName" id="fullName"></td>
                        </tr>

                        <tr>
                            <td>Alamat</td>
                            <td><textarea name="alamat_user" id="alamat_user"></textarea></td>
                        </tr>

                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" id="username"></td>
                        </tr>

                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" id="password"></td>
                        </tr>

                        
                        <tr>
                            <td>User Type</td>
                            <td>
                                <input type="radio" name="type_akun" id="" value="admin">Admin
                                <input type="radio" name="type_akun" id="" value="user">User
                            </td>
                        </tr>


                        <div  class="button-register">
                        
                            <button type="submit" class="register-user">Submit</button><br><br>
                            <button id="batal" class="batal" type="reset" onclick="batalRegister()">Login</button>
                            
                        </div>

                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>