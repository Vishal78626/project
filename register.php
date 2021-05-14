<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->

<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        .centerdiv{
            width: 400px;
            height: 650px;
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
 
 <div class="bgimg">
    <div class="centerdiv">   	
        <form method="POST" name="register">
        

            <div class="mb-0 text-center">
                <label class="form-label" style=color:coral;font-weight:bold;>Register Here</label>
            </div>
            
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

            <div class="mb-2 text-center">
                <button type="submit" name="s">Register</button>
            </div>
        </form>
    

        <form method="POST" action="login.php">
            <div class="mb-2 text-center">
                <button class="login_button" type="submit">Login</button>
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
                echo"<p style=color:green;text-align:center;font-size:20px;font-style:italic;>You are succesfully Registered with WE-SHARE</p>";        		
        	}
            else{
                echo"<p style=color:red;text-align:center;font-size:20px;font-style:italic;>Not Registered,Use another email address</p>";
            }
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
</body>
</html>