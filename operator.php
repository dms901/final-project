<?php 
$total_hrg = $_POST['pengirim'];
$total_brg = $_POST['harga_brg'];
$adm_metod_byr = $_POST['metod_bayar'];
$hasil = 0;



if(isset($total_brg) and isset($total_hrg) and isset($adm_metod_byr)){

    $hasil =$total_hrg+$total_brg+$adm_metod_byr;

    echo number_format("$hasil");

}elseif(isset($total_brg) and isset($total_hrg) and !isset($adm_metod_byr)){

    $hasil = $total_hrg+$total_brg;

    echo number_format("$hasil");

}elseif(!isset($total_brg) and isset($total_hrg) and isset($adm_metod_byr)){
    $hasil = $adm_metod_byr+$total_brg;
    echo number_format("$hasil");
}
?>