<!--
<?php
	//include('connect.php');
	//session_start();
?>
-->
<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->

    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css">
		/*		T 		R 	 B 	  L
		margin:130px 500px 50px 550px;*/
	.centerdiv{
		width: 400px;
		height: 540px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		background-color: #fbf0f0;
		padding: 10px;
		border:5px solid #f08f6b;
		border-radius: 10px;
		box-shadow:0px 0px 20px 2px;
	}
	</style>

</head>
<body>

<!--logindetail.php-->

<section class="bgimg">
	<section class="centerdiv">
		<form action="" method="POST" name="login">
			<div class="mb-0">
		      	<h2 class="text-center" style=color:coral;font-weight:bold;>Login Here</h2>
		    </div>

		    <div class="mb-0">
				<label class="form-label">&nbsp;Username</label>
				<input class="form-control" type="email" name="username" placeholder="abc@gmail.com" required>
			</div>

			<div class="mb-0">
				<label class="form-label">&nbsp;Password</label>
				<input class="form-control" type="password" id="show" name="password" placeholder="password" required>
				<p class="check_box"><input type="checkbox" onclick="show_pass()"><span style="font-size: 20px;font-style: italic;"> Show Password</span></p>
			</div>

			<div class="mb-0 text-center">
				<p><button class="login_button align-items-center" type="submit" name="s">Login</button></p>
			</div>
		</form>

		<form action="register.php" method="POST">
			<div class="mb-0 text-center">
				<p style="text-align:center;font-size:25px;font-weight:bold;font-style: italic;">New User? Register First</p>
				<p><button>Register</button></p>
			</div>
		</form>

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
	echo "<p style=color:red;text-align:center;font-size:25px;font-style:italic;>Login unsuccessful</p>";
}
?>
	</section>
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

<!--
<section class="container form-container">
	<section class="row justify-content-center">
		<section class="col-12 col-lg-12">
			<form action="" method="POST" name="login">

			    <div class="mb-0">
		        	<h2 class="text-center" style=color:coral;font-style:italic;>Login Here</h2>
		        </div>

				<div class="mb-0">
					<label class="form-label">&nbsp;Username</label>
					<input class="form-control" type="email" name="username" placeholder="abc@gmail.com" required>
				</div>

				<div class="mb-0">
					<label class="form-label">&nbsp;Password</label>
					<input class="form-control" type="password" id="show" name="password" placeholder="password" required>
					<p class="check_box"><input type="checkbox" onclick="show_pass()"><span style="font-size: 20px;font-style: italic;"> Show Password</span></p>
				</div>

				<div class="mb-0 text-center">
					<p><button class="login_button" type="submit" name="s">Login</button></p>
				</div>

			</form>

			<form action="register.php" method="POST">
				<div class="mb-0 text-center">
					<p style="text-align:center;font-size:25px;font-weight:bold;font-style: italic;">New User? Register First</p>
					<p><button>Register</button></p>
				</div>
			</form>-->
		<!--</section>	
	</section>-->
<!--
			/*body{
			background-image: linear-gradient(to right, coral,#C0C0C0);
			font-style:italic;
			font-size: 25px;
			font-family: 'Crimson','sans-serif';
			margin: 0px;
			padding: 0px;
			}*/

		/*.form-container{
			display: block;
						width: 30%;
			background-color: #fbf0f0;
			padding: 10px;
  			border:5px solid #f08f6b;
  			border-radius: 20px;
  			margin-top: 5%; 
  			box-shadow:0px 0px 20px 2px;
		}*/-->