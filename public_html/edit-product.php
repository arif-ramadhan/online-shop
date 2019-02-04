<?php
     session_start();
        if(!isset($_SESSION['login'])){
            echo '<script>window.location="login.php";</script>';
            exit;
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>STARCROSS</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap Css -->
    <link href="bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
    <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="plugins/Icons/et-line-font/style.css" rel="stylesheet">
    <link href="plugins/animate.css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="styles/style.css">

</head>

<body>
	<?php 
		include "header.php";
	 ?>
    
    <!-- Portfolio
	============================================= -->
    <section id="portfolio">
        <div class="container-fluid">
            <br>
            <h2>Daftar Produk</h2>
            <hr class="sep">
            <p>Showcase Your Amazing Work With Us</p>
            <?php
	include 'koneksi1.php';
	$produk = mysqli_query($conn, "SELECT * FROM produk");
	while($hasil = mysqli_fetch_array($produk)){	
	?>
	<div class="box-produk">
		<img src="product/<?php echo $hasil['foto_produk']; ?>" />
		<?php echo  $hasil['nama_produk']."<br>"; ?>
				================ <br>
				IDR
		<?php echo $hasil['harga']; ?><br>
		<a><a href="edit.php?id=<?php echo $hasil['id_produk']; ?>">===== EDIT =====</a></a><br>
		<a><a href="hapus-product.php?id=<?php echo $hasil['id_produk'];?>">===== HAPUS =====</a></a>
	</div>
	<?php } ?>
        </div>
    </section>
    
    <?php 
    	include "footer.php";
     ?>
    
</body>

</html>