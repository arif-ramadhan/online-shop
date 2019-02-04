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

	<section id="portfolio">
        <div class="container-fluid">
        <br>
       	<h2>Chat</h2><br><br>
   <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
	         <?php
	include 'koneksi1.php';
	$produk = mysqli_query($conn, "SELECT * FROM tb_contact");
	while($hasil = mysqli_fetch_array($produk)){	
	?>
		<tr>
    		<td><?php echo $hasil['chat']; ?></td>
    		<td>(<?php echo $hasil['email_user']; ?>)</td>
    		<td><a href="edit-pesan.php?id=<?php echo $hasil['id_chat'];?>">edit</a></td>
    		<td><a href="hapus-pesan.php?id=<?php echo $hasil['id_chat'];?>">hapus</a></td><br>
    		<td>=========================================================</td><br>
		</tr>
		
	<?php } ?>
            </div>

    <!-- Portfolio
	============================================= -->
    <section id="portfolio">
        <div class="container-fluid">
   			<div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
                <form action="" method="post" enctype="multipart/form-data">
				<input type="textarea" class="form-control" name="nama" value="admin" />
					<br><br>
						<input type="textarea" class="form-control" name="chat" placeholder="masukan chat"/>
					 <br><br>
					 <input type="hidden" name="email" value="starcross@gmail.com" />
					<input type="submit" class="btn-block" name="simpan" value="kirim" />
					<br><br>
                </form>
				<?php
		if(isset($_POST['simpan'])){
		$insert = mysqli_query($conn,"INSERT INTO tb_contact VALUES (NULL,'".$_POST['nama']."','starcross@gmail.com','".$_POST['chat']."')");
		if($insert){
			echo '<script>
            window.location="pesan.php";
            </script>';
		}
		else {
			echo 'gagal';
		}
	}
	?>
        </div>
    </section>
    
    <?php 
    	include "footer.php";
    ?>
</body>

</html>