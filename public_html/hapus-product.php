<?php
     session_start();
        if(!isset($_SESSION['login'])){
            echo '<script>window.location="login.php";</script>';
            exit;
        }
	include "koneksi1.php";
	$id=$_GET['id'];
	mysqli_query($conn, "delete from produk where id_produk=$id");
	header("location:edit-product.php");
?>
