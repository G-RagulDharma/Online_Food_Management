<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login.css">
<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body class="bg">

<h1 class="class1">TWIGGY</h1>

<div class="user"><a href="admin.php">
		<img src="Images/user.png" width="40" height="40" style="border-radius:30px;"></a>
		<p class='admin_name'>ADMIN</p>
	</div>
<div class="square">
	<form method="post">
	<div class="login"><img src="Images/login2.png" alt="LOGIN" width="80" height="80" style="background-color:#ffe6f9; border-radius:30px; opacity:0.5;"></div>
	<div class="name">USERNAME:<input type="text" name="name" class="box"><br><br></div>
	<div class="pass">PASSWORD:<input type="password" name="password" class="box"><br><br></div>
	<input type="submit" value="LOGIN" class="button" name="submit1" >
	<p class='one'>Don't have an account? <a href='login_new.php' class='two'>Register</a></p>
	</form>
</div>
<!--
<script>
function log()
{
	
	var name=document.myform.name.value;
	var password=document.myform.password.value;
				
	if(name=="admin" && password=="admin123")
	{
		window.location.href = "home.html";
        return false;
	}
	else
	{ 
		alert("Login Failed");
		return false;
	}
}
</script> -->			
<?php
require("connection.php");

if(isset($_POST['submit1']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$sql="select * from login";
	if($result=$conn->query($sql))
	{
		while($row=$result->fetch_assoc())
		{
			$na=$row["na"];
			$pass=$row["password"];
			
		}
		if($na==$name and $pass==$password)
		{
			session_start();
			$_SESSION['username']=$name;
			echo '<script>window.location.href = "home.php";</script>';
       		exit; 
		}
		else
		{
			echo '<script>alert("Please Enter correct name or password") </script>';
		}
	}
}
?>
</body>
</html>