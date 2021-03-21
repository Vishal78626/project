<?php	
session_start();
echo "<br>Welcome ".$_SESSION['user_name']." ".$_SESSION['last_name']." to WE-SHARE";
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="skyblue">
<form method="post" action="">
<p>Select source address : <select name="source" value="">
	<option></option>
	<option>Chotti Haibowal</option>
	<option>Badi Haibowal</option>
	<option>Model Town</option>
	<option>Sarabha Nagar</option>
	<option>Bus Stand, Ludhiana</option>
	<option>Clock Tower</option>
</select>
</p>
<p><input type="submit" name="s" value="Save"></p>
</form>

<?php
//echo"<br>Your source address is : ".$_SESSION['source']."<br>";
if(!isset($_POST['s'])){
	//$source=$_POST['source'];
	include('connect.php');
	$qry1="select source from register where firstname='$_SESSION[user_name]'";
	$result1=mysqli_query($con,$qry1);

	if($result1){
	$i=1;
	while($r=mysqli_fetch_array($result1))
	{
		//$_SESSION["source"]=$r['source'];
		echo "<br>Your source address is : ".$r['source']."<br>";
		echo"hello";
		$i++;
	}
	}
	// else{
	// echo"enter source address is Empty";
	// }
}
?>

<?php
if(isset($_POST['s'])){
	$source=$_POST['source'];
	
	include('connect.php');
	//session_start();
	$qry="update register set source='$source' where firstname='$_SESSION[user_name]'";
	$result=mysqli_query($con,$qry);	
	
	// if($result){
	// 	echo"<br>data entered";
	// }
	// else
	// {
	// 	echo"<br>data not entered";
	// }

	$qry1="select source from register where firstname='$_SESSION[user_name]'";
	$result1=mysqli_query($con,$qry1);

	$i=1;
	while($r=mysqli_fetch_array($result1))
	{
		//$_SESSION["source"]=$r['source'];
		echo "<br>Your source address is : ".$r['source']."<br>";
		$i++;
	}
	//echo"not entered";

}
?>

<p>
	<br>Your Destination is : Guru Nanak Dev Engineering College, Ludhiana
</p>
<!-- <?php
//echo "<br>Login succesful";
//echo "<br>Password : ";//.$_POST["password"];
?>-->
<p>
<a href="login.php"><input type="submit" value="Logout"></a>
</p> 
</body>
</html>