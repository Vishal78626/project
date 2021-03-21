<?php
echo "<br>hello";
$con = mysqli_connect('localhost','root','','college');
if(!$con)
{
echo " not connected";
} 
else{
echo " connected";
}
?>
