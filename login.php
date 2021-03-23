<!Doctype html>
<html>
<head>
	<style type="text/css">
	.login_box{
		/*		T 		R 	 B 	  L*/
		margin:130px 500px 50px 550px;
		padding:2px 0px 10px 30px;
		background-color: #fbf0f0;
		width:25%; 
		color: black;
		font-size: 30px;
		font-style: italic;
		border:3px solid #f08f6b;
	}

	p{}
	
	input{
		font-size: 30px;
		border-style: solid;
		border-radius: 10px;}
	
	.input_box{width:none;
		background-color: #E9D9D5;
		font-style: italic;
	}
	
	.login_button{
		margin-left: 32%;
		background-color: #f08f6b}

	button{
		margin-left: 28%;
		background-color: #f08f6b;
		font-size: 30px;
		border-radius: 10px;
		border-style: solid;
	}
	
	body{
		/*background-color: coral;*/
		background-image: linear-gradient(to right, coral,#C0C0C0);
		
		margin: 0px;
		padding: 0px;
		}

	</style>

</head>
<body>

<!--logindetail.php-->
<div class="login_box">
<form action="" method="POST" name="login">
<p>Username :<br><input class="input_box" type="email" name="username" placeholder=" abc@gmail.com" required></p>
<p>Password :<br><input class="input_box" type="password" name="password" placeholder=" Password" required></p>
<p><input class="login_button" type="submit" name="s" value="Login"></p>
</form>

<form action="register.php" method="POST">
<p style="text-align: center;">New User? Register First</p>
<p><button>Register</button></p>
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
		echo "<p style=color:red;text-align:center;>Login unsuccessful</p>";
	//	}

	//$qry1="select firstname from register where email='$username'";
	//$result1=mysqli_query($con,$qry1);


	}
?>
</div>

</body>
</html> 