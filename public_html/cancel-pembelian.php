<?php 
     session_start();
        if(!isset($_SESSION['login'])){
            echo '<script>window.location="login.php";</script>';
            exit;
        }
	include "koneksi1.php";
	$id=$_GET['id'];
	mysqli_query($conn, "update tb_beli set status='Gagal' where id_pembeli='$id'");
		echo '<script>
            window.location="list-pembelian.php";
            </script>';
?>