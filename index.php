
<?php 

	session_start();

		 if($_SESSION['karyawan']){
			
			require 'koneksi.php';
			
			include $view;

		 
			$lihat = new view($config);
			$toko = $lihat -> toko();

				include 'karyawan/template/header.php';
				include 'karyawan/template/sidebar.php';
					if(!empty($_GET['page'])){
						include 'karyawan/pspec/'.$_GET['page'].'/index.php';
					}else{
						include 'karyawan/template/home.php';
					}
				include 'karyawan/template/footer.php';
		}else{
			echo '<script>window.location="login.php";</script>';
		}
?>

