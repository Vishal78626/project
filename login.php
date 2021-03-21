<!Doctype html>
<html>
<body bgcolor="skyblue">

<!--logindetail.php-->
<form action="" method="POST" name="login">
<p>Username :<br><input type="email" name="username" placeholder="abc@gmail.com" required></p>
<p>Password :<br><input type="password" name="password" placeholder="Password" required></p>
<p><input type="submit" name="s" value="Login"></p>
</form>

<?php
//include('connect.php');

?>

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
		echo "<br>Login unsuccessful";
	//	}

	//$qry1="select firstname from register where email='$username'";
	//$result1=mysqli_query($con,$qry1);


	}
?>

<form action="register.php" method="POST">
<p>New User Register First</p>
<p><button>Register</button></p>
</form>

</body>
</html> 