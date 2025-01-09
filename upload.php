<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header('location:login.php');
	}
		include "koneksi2.php" ;
		
		if(isset($_FILES['foto']) and !isset($_POST['data'])){//logika upload new produk
				$gender = $_POST['gender'];
				$foto = $_FILES['foto']['name'];
				$file_tmp = $_FILES['foto']['tmp_name'];
				$kategori = $_POST['ketegori'];
				$harga = $_POST['harga'];
				$nama = $_POST['nama_produk'] ;
				$descripsi = $_POST['deskripsi'];
				$ukuran_1 = $_POST['ukuran1'];
				$ukuran_2 = $_POST['ukuran2'] ;
				$ukuran_3 = $_POST['ukuran3'];
				$query = "INSERT INTO produk VALUES ('','$nama','$harga','$kategori','$gender','$foto','$descripsi','$ukuran_1','$ukuran_2','$ukuran_3')";
				mysqli_query($koneksi, $query);
				move_uploaded_file($file_tmp,'foto/'.$foto);
				
				echo "Data Berhasil Di Upload";

		}elseif(isset($_POST['data'])  and !isset($_FILES['foto'])){//Logika menyimpan produk kedalam keranjang
				$id_produk = $_POST['data'];
				$size = $_POST['size'];
				$id_user = $_SESSION['id_user'];
				
				$query = "insert into keranjang values ('','$size','$id_user','$id_produk')";
				mysqli_query($koneksi, $query);
				
				echo "Produk Behasil Disimpan";
			
		}
		elseif(!isset($_FILES['foto'])){//logika jika file tidak ada new produk tidak bisa diupload
			echo "Data Gagal Di Upload";

		}elseif(!isset($_POST['data'])){//logika pengecekan jika data tidak ada isinya maka echo produk gagal
			echo  "Produk Gagal Disimpan";
		}
		
?>