<?php 
	$koneksi = mysqli_connect(
								hostname: "localhost",
								username: "root",
								password: "",
								database: "produk_ecommerce"
	);
	if(mysqli_connect_errno())
	{
		echo "Koneksi Gagal " .mysqli_connect_error() ;
	}
?>