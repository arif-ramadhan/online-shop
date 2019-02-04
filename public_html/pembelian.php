<?php include 'koneksi1.php'; 
	$data = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '".$_GET['id']."' ");
	$r = mysqli_fetch_array($data);
	
	$nama = $r['nama_produk'];
	$foto = $r['foto_produk'];
	$harga = $r['harga'];
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
    <!-- Contact Us
	============================================= -->
	<br>
    <section id="contact">
        <div class="container">
            <h2>Pembelian</h2>
            <hr class="sep">
            <p>Silahkan Diisi</p>
            <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
                <form action="" method="post" enctype="multipart/form-data">
                    <br><br>
						<a><img src="./product/<?php echo $foto ?>" width="530px" height="500px"/></a><br><br>
                        <input type="text" class="form-control" name="nama" placeholder="masukan kode produk" value="<?php echo $nama ?>" /readonly>
                    <br><br>
					<input type="text" class="form-control" name="harga" placeholder="masukan harga produk" value="<?php echo $harga ?>"/readonly>
					 <br><br>
					 <input type="textarea" class="form-control" name="email" placeholder="masukan email" /><br><br>
					 <input type="textarea" class="form-control" name="jumlah" placeholder="masukan jumlah" /><br><br>
					<input type="textarea" class="form-control" name="alamat" placeholder="masukan alamat" /><br><br>
					<input type="submit" class="btn-block" name="simpan" value="beli" />
					<br><br>
                </form>
				<?php
				include "koneksi1.php";
				if(isset($_POST['simpan'])){
					$kirim = mysqli_query($conn, "INSERT INTO tb_beli (nama_produk, alamat_pembeli, harga, jumlah, email) VALUES
					('".$_POST['nama']."','".$_POST['alamat']."',
					'".$_POST['harga']."','".$_POST['jumlah']."','".$_POST['email']."'
					)");
					if($kirim){
						echo 'berhasil';
					
						
					}
					else{
						echo 'gagal';
					}
				}
			?>
            </div>
        </div>
    </section>
   
    <?php
        include "footer.php";
    ?>
</body>

</html>