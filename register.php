<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <style type="text/css">
            
        .form-control{
        font-size: 25px;
        padding: 10px;
        }
                
        .form-label{
        margin-bottom: 0px;
        }

        body{
        background-image: linear-gradient(to right, coral,#C0C0C0);
        }

        button{
        margin-left: 28%;
        margin-right: auto;
        padding: 3px;
        background-color: #f08f6b;
        font-size: 30px;
        border-radius: 10px;
        border-style: solid;
        }

        .login_button{
        margin-left: 33%;
        padding: 3px;
        background-color: #f08f6b;
        }

    </style>

</head>
    <body bgcolor="skyblue">
    	
    <form method="POST" name="register">
    <div class="container">
        
        <div class="mb-0">
            <label class="form-label">&nbsp;Firstname : </label>
            <input class="form-control" type='text' name='fname' placeholder='eg : john' required>
        </div>

        <div class="mb-0">
            <label class="form-label">&nbsp;Lastname : </label>
            <input class="form-control" type='text' name='lname' placeholder='eg : surname' required>
        </div>
  
        <div class="mb-0">
            <label class="form-label">&nbsp;Email : </label>
            <input class="form-control" type='email' name='email' id='email' placeholder="eg : abc@gmail.com" required>
        </div>

        <div class="mb-2">
            <label class="form-label">&nbsp;Password : </label> 
            <input class="form-control" type='password' name='password' placeholder='Password' required>
        </div>

        <div class="mb-2">
            <button type="submit" name="s">Register</button>
            <!--<input type='submit' name='s' value='Register now'>-->
        </div>
    </form>
    

    <form method="POST" action="login.php">
        <div class="mb-2">
            <button class="login_button" type="submit">Login</button>
            <!--<a href="login.php"><input type="submit" value="Login"></a>-->
        </div>
    </form>
    

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
                echo"<p style=color:green;text-align:center;font-size:20px;>You are succesfully Registered with WE-SHARE</p>";        		
        	}
            else{
                echo"<p style=color:red;text-align:center;font-size:20px;>Not Registered,Use another email address</p>";
            }
        }
        ?>
    </div>
    
    </body>
</html>