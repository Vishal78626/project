<!doctype html>
<html lang="en">
 <head>

 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="bootstrap.css">

	<style type="text/css">
		/*		T 		R 	 B 	  L
		margin:130px 500px 50px 550px;*/
	
		.form-control{
			font-size: 20px;
			padding: 10px;
		}
		
		.form-label{
			margin-bottom: 0px;
		}
		
		.login_button{
			margin-left: 37%;
			padding: 3px;
			background-color: #f08f6b;
			font-size:25px;
		}

		button{
			margin-left: 33%;
			padding: 3px;
			background-color: #f08f6b;
			font-size: 25px;
			border-radius: 10px;
			border-style: solid;
		}
		
		body{
			background-image: linear-gradient(to right, coral,#C0C0C0);
			}

		.check_box{
			padding-left: 10px;
		}

		/*.container{
			margin-top: 10%;
			margin-bottom: 10%;
			display: block;
		}*/

	</style>

</head>
<body>

<!--logindetail.php-->
<section class="container-fluid">
	<section class="row justify-content-center align-items-center">
		<section class="col-12 col-sm-4 col-md-8 col-lg-12">
			<form action="" method="POST" name="login">

			    <div class="mb-0">
		        	<h3 class="text-center" style=color:coral;font-style:italic;font-weight:bold;>Login Here</h3>
		        </div>

				<div class="mb-0">
					<label class="form-label">&nbsp;Username : </label>
					<input class="form-control" type="email" name="username" placeholder="abc@gmail.com" required>
				</div>

				<div class="mb-0">
					<label class="form-label">&nbsp;Password : </label>
					<input class="form-control" type="password" id="show" name="password" placeholder="password" required>
					<p class="check_box"><input type="checkbox" onclick="show_pass()"><span style="font-size: 20px;font-style: italic;"> Show Password</span></p>
				</div>

				<div class="mb-0">
					<p><button class="login_button align-items-center" type="submit" name="s">Login</button></p>
				</div>
			</form>

			<form action="register.php" method="POST">
				<div class="mb-0">
					<p style="text-align:center;font-size: 20px;font-weight: bold;font-style: italic;">New User? Register First</p>
					<p><button>Register</button></p>
				</div>
			</form>
		</section>	
	</section>

	<?php
	if(isset($_POST['s']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		include('connect.php');
		session_start();
		$qry="select firstname,lastname from register where email='$username' and password='$password'";
		$result=mysqli_query($con,$qry);
		//$count=mysqli_num_rows($result);
		$i=0;
		while($r=mysqli_fetch_array($result))
		 {
			$_SESSION["user_name"]=$r['firstname'];
			$_SESSION["last_name"]=$r['lastname'];
			header('Location:logindetail.php');
			$i++;
		}
		echo "<p style=color:red;text-align:center;font-size:20px;font-style:italic;>Login unsuccessful</p>";
	}
	?>
</section>

<script type="text/javascript">
	function show_pass(){
	var r=document.getElementById("show");
	if (r.type === "password") {
		r.type="text";
	}
	else{
		r.type="password";
	}
	}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html> 