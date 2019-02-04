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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php 
    	include "header.php";
     ?>

    <!-- Portfolio
	============================================= -->
    <section id="portfolio">
        <div class="table-responsive">
            <br>
            <h2>Daftar Pembelian</h2>
            <hr class="sep">
            <p>Showcase Your Amazing Work With Us</p>
  
        	<table class="table" border="5px">
		 		<form method="POST" action="responsi.php">
		 			<tr>
						<td><b>No</b></td>
						<td><b>Tanggal Transaksi</b></td>
		 				<td><b>Nama Produk</b></td>
		 				<td><b>Email</b></td>
		 				<td><b>Alamat</b></td>
		 				<td><b>Harga Satuan</b></td>
                        <td><b>Jumlah</b></td>
                        <td><b>Status</b></td>
		 				<td><b>Action</b></td>
		 			</tr>
            <?php
			include 'koneksi1.php';
			$produk = mysqli_query($conn, "SELECT * FROM tb_beli");
			if (mysqli_num_rows($produk)) {
		 			$no=1;
					while($hasil = mysqli_fetch_array($produk)){	
					?>
						<tr>
							<td align="center"><?php echo $no; ?></td>
							<td><?php echo $hasil['tanggal_pembeli']; ?></td>
							<td><?php echo $hasil['nama_produk']; ?></td>
							<td><?php echo $hasil['email']; ?></td>
							<td><?php echo $hasil['alamat_pembeli']; ?></td>
							<td><?php echo $hasil['harga']; ?></td>
							<td><?php echo $hasil['jumlah']; ?></td>
							<td><?php echo $hasil['status']; ?></td>
							<td>
								<a href="verifikasi-pembelian.php?id=<?php echo $hasil['id_pembeli'];?>">Verifikasi</a>
								<a href="cancel-pembelian.php?id=<?php echo $hasil['id_pembeli'];?>">Cancel</a>
							</td>
						</tr>
					<?php 
						$no++; } 
					?>
				<?php } ?>	
			</table>
        </div>
    </section>
    <?php 
    	include "footer.php";
    ?>
</body>

</html>