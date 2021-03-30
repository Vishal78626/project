<!doctype html>
<html lang="en">
 <head>

 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="bootstrap.css">

	<style type="text/css">
	.login_box{
		/*		T 		R 	 B 	  L*/
		margin:130px 500px 50px 550px;
		padding:2px 0px 10px 30px;
		width:25%; 
	}
	
	input{
		font-size: 20px;
  		border-style: solid;
  		border-radius: 10px;
		}
	
	.input_box{
		background-color: #E9D9D5;
		font-style: italic;
	}
	
	.login_button{
		margin-left: 33%;
		background-color: #f08f6b;}

	button{
		margin-left: 28%;
		background-color: #f08f6b;
		font-size: 30px;
		border-radius: 10px;
		border-style: solid;
	}
	
	body{
		/*background-color: coral;		
		margin: 0px;
		padding: 0px;*/
		background-image: linear-gradient(to right, coral,#C0C0C0);
		}
	.check_box{
		padding-left: 10px;
	}

	</style>

</head>
<body>

<!--logindetail.php-->
<div class="container">
<form action="" method="POST" name="login">

<div class="mb-3">
<label class="form-label">Username : </label>
<input class="form-control" type="email" name="username" placeholder=" abc@gmail.com" required>
</div>

<div class="mb-3">
<label class="form-label">Password : </label>
<input class="form-control" type="password" id="show" name="password" placeholder=" Password" required>
<p class="check_box"><input type="checkbox" onclick="show_pass()"><span style="font-size: 20px;font-style: italic;"> Show Password</span></p>
</div>

<div class="mb-3">
<p><input class="login_button" type="submit" name="s" value="Login"></p>
</form>
</div>

<form action="register.php" method="POST">
<div class="mb-3">
<p style="padding-left:21%;font-size: 20px;font-weight: bold;font-style: italic;">New User? Register First</p>
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
	while($r=mysqli_fetch_array($result)) {
		$_SESSION["user_name"]=$r['firstname'];
		$_SESSION["last_name"]=$r['lastname'];
		header('Location:logindetail.php');
		//echo "<br>Username : ".$r['firstname'];
		$i++;
	}
	//if ($count>0) {
		//$_SESSION["user_name"]=$username;
		//header('Location:logindetail.php');
		//echo "<br>Login succesful";	
	//}
	//if(!$count>0){
		echo "<p style=color:red;text-align:center;font-size:20px;>Login unsuccessful</p>";
	//	}
	}
?>

</div>

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

</body>
</html> 