<!Doctype html>
<html>
    <body bgcolor="skyblue">
    	
    	<form method="POST" name="register">
       
        <p>Firstname :<br><input type='text' name='fname' placeholder='eg : john' required></p>
        <p>Lastname :<br><input type='text' name='lname' placeholder='eg : surname' required></p>
        <p>Email :<br><input type='email' name='email' id='email' placeholder="eg : abc@gmail.com" required><span id='text'></span></p>
        <p>Password : <br><input type='password' name='password' placeholder='Password' required></p>
        <p><input type='submit' name='s' value='Register now'></p>
 
        </form>
        <a href="login.php"><input type="submit" value="Login"></a>
        <?php
        if(isset($_POST['s']))
        {
        	$firstname=$_POST['fname'];
        	$lastname=$_POST['lname'];
        	$email=$_POST['email'];
        	$password=$_POST['password'];
        	include('connect.php');

        	$qry="insert into register(`firstname`,`lastname`,`email`,`password`) values ('$firstname','$lastname','$email','$password')";
        	$result = mysqli_query($con,$qry);
        	if($result)
        	{
                echo"<br>You are succesfully Registered with WE-SHARE";        		
        	}
            else{
                echo"<br>Not Registered,Use another email address";
            }
        }
        ?>
    

        <script type="text/javascript">
            // function validate()
            // {
            //     var f=document.register.fname.value;
            //     if(f==null || f=="")
            //     {
            //         document.getElementById("text1").innerHTML="Enter firstname";
            //     }

            // }

        	
        </script>

    </body>
</html>