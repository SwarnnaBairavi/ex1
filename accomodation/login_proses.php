<?php
	session_start();
	include 'config/koneksi.php';
	
	$user = @$_POST['name'];
	$pass = @$_POST['password'];
	
	$query=mysqli_query($conn,"select * from user where names='$user' and passwords='$pass'");
	$jumlahdata =mysqli_num_rows($query);
	
	if ($jumlahdata == 0 ) {
		echo "<script>alert('name and password doesnt match !');
				window.location.href='login.php';</script>";
	} else{
		$data= mysqli_fetch_array($query);

		if($data['level']=="1"){
			$_SESSION['name'] = $data['nama_user'];
			$_SESSION['level'] = "Manager";
				echo "<script>alert('Login Success !');
				</script>";
			header("location:index.php");
		
		}else if($data['level']=="2"){
			$_SESSION['name'] = $data['nama_user'];
			$_SESSION['level'] = "Student";
			echo "<script>alert('Login Success !');
				</script>";
			header("location:index.php");
		}
		else if($data['level']=="3"){
			$_SESSION['name'] = $data['nama_user'];
			$_SESSION['level'] = "Admin";
				echo "<script>alert('Login Succes !');
				</script>";
			header("location:index.php"); 
		}
		
	}
?>
<meta http-equiv="refresh" content="3,URL=index.php">
