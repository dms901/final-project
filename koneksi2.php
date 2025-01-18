<?php 
	$koneksi = mysqli_connect(
								hostname: "localhost",
								username: "root",
								password: "",
								database: "produk_ecommerce"
	);
	if(mysqli_connect_errno())//sebuah void yang mengembalikan pesan kesalahan
		{
		echo "Koneksi Gagal " .mysqli_connect_error() ;//sebuah void mengembalikan kode kesalahan (integer)
	}
?>