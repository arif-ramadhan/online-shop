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
    	include 'koneksi1.php';
    ?>

	<section id="portfolio">
        <div class="container-fluid">
        <br>
       	<h2>Edit Chat</h2><br>
   <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
	        
            </div>

    <!-- Portfolio
	============================================= -->
    <section id="portfolio">
        <div class="container-fluid">
   			<div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
                <form action="" method="post" enctype="multipart/form-data">
                 <?php
                 $id=$_GET['id'];
            	$chat = mysqli_query($conn, "SELECT * FROM tb_contact where id_chat=$id");
            	while($hasil = mysqli_fetch_array($chat)){	
            	?>
				<input type="textarea" class="form-control" name="nama" value="<?php echo $hasil['nama_user'] ?>" />
					<br>
					    <input type="email" class="form-control" name="email" value="<?php echo $hasil['email_user'] ?>" />
					 <br>
					    <input type="textarea" class="form-control" name="chat" value="<?php echo $hasil['chat'] ?>"/>
					 <br><br>
					<input type="submit" class="btn-block" name="simpan" value="kirim" />
					<br><br>
                </form>
                <?php } ?>
				<?php
		if(isset($_POST['simpan'])){
		    $nama=$_POST['nama'];
		    $email=$_POST['email'];
		    $chat=$_POST['chat'];
		$update = mysqli_query($conn,"UPDATE tb_contact set nama_user='$nama', email_user='$email', chat='$chat' where id_chat=$id");
		if($update){
			echo '<script>
            alert("chat berhasil diubah");
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