<?php 
session_start();

if(!isset($_SESSION['user'])){
    header('location:login.php');
}

?>



<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="javascript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  
    <title>E-Commerce</title>
</head>

<body>
    <div class="container">
        <div class="menu" border="1">
            <button class="menu1" onclick="home()" id="home" value="home">HOME</button>
            <div class="menudown1">
                <button class="menu2">PRIA</button>
                <div class="menudown1-content">
                    <button onclick="btn_on1()" class="btn_pilih" name="pria" id="pria_baju" value="baju" >BAJU</button><br>    
                    <button onclick="btn_on2()" class="btn_pilih" name="pria" id="pria_celana" value="celana" >CELANA</button><br> 
                    <button onclick="btn_on3()"class="btn_pilih" name="pria"  id="pria_hodie" value="hodie" >HODIE</button><br>  
                </div>
            </div>
            <div class="menudown2">
                <button class="menu3">WANITA</button>
                <div class="menudown2-content">
                    <button onclick="btn_on4()" class="btn_pilih" name="wanita"  id="wanita_baju" value="baju">BAJU</button><br>    
                    <button onclick="btn_on5()" class="btn_pilih" name="wanita"  id="wanita_celana" value="celana">CELANA</button><br> 
                    <button onclick="btn_on6()" class="btn_pilih" name="wanita"   id="wanita_gamis" value="gamis">GAMIS</button><br>  
                </div>
            </div>
            <div class="menu-right">
                <div clas="topvan-right">
                    <button class="btn_shoping" onclick="gopageshopping()">
                        <img src="image/shoping.png" class="shoping1">
                    </button>
                    <button  onclick="gopageinfoakun()" class="btn_akun">
                        <img src="image/login1.png" class="img_akun">
                    </button>
                </div>
            </div>   
            
            <div class="layout-barContent">
                <div class="container-menu3" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                <div class="menu-new-content">
                    <button class="btn-info-akun" onclick="gopageinfoakun()"><img src="image/login1.png" class="new-img-akun">AKUN</button><br>
                    <button class="btn-new-keranjang" onclick="gopageshopping()"><img src="image/shoping.png" class="new-img-krj">KERANJANG</button>
                </div>
            </div>
            </div>
            
           
        </div>
    </div>
    <div class="main-menu">
        <div class="layout-main-menu">
            <img src="image/benner1.jpg">
        </div>
    </div>
    <div class="box">
        <div class="tampilan">

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