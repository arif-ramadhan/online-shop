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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php
        include "header2.php";
    ?>
    <!-- Welcome
	============================================= -->
	<br>
    <section id="welcome">
        <div class="container">
            <h2>Welcome To <span>Starcross</span></h2>
            <hr class="sep">
            <p>Youth Gone Wild</p>
            <img class="img-responsive center-block wow fadeInUp" data-wow-delay=".3s" src="img/welcome/logo.jpg" alt="logo">
        </div>
    </section>

    <!-- Portfolio
	============================================= -->
    <section id="portfolio">
        <div class="container-fluid">
            <h2>Product starcross</h2>
            <hr class="sep">
            <p>Silahkan Nikmati Layanan Kami</p>
            <?php
	include 'koneksi1.php';
	$produk = mysqli_query($conn, "SELECT * FROM produk");
	while($hasil = mysqli_fetch_array($produk)){	
	?>
	<div class="box-produk">
	<a href="detail.php?id=<?php echo $hasil['id_produk'] ?>"><img src="product/<?php echo $hasil['foto_produk']; ?>" /></a>
		
			kode :
		<?php echo $hasil['id_produk']."<br>"; ?>
		<?php echo  $hasil['nama_produk']."<br>"; ?>
				================ <br>
				IDR
		<?php echo $hasil['harga']; ?>
		<a><a class="btn-block" href="pembelian.php?id=<?php echo $hasil['id_produk'] ?>">beli</a></a>
	</div>
	<?php } ?>
        </div>
    </section>
    <?php
        include "footer.php";
    ?>
</body>

</html>