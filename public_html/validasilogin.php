<?php 
	include "koneksi1.php";
	$username=$_POST['txtUsername'];
	$password=$_POST['txtPassword'];

	$query=mysqli_query($conn, "select * from tb_login where username='$username' and password='$password'");
	$cek=mysqli_num_rows($query);

	if ($cek>0) {
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['login']=true;
		header("location:admin.php");
	}else{
		header("location:login.php");
	}
 ?>