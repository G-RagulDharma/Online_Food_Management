<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="admin.css">
<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<h1 class="class1">ADMIN LOGIN</h1>
<body class="bg">
<div class="square">
	<form name="myform" onsubmit="return log()">
	<div class="login"><img src="Images/login2.png" alt="LOGIN" width="80" height="80" style="background-color:#ffe6f9; border-radius:30px; opacity:0.5;"></div>
	<div class="name"><input type="text" name="name" class="box" placeholder='USERNAME'><br><br></div>
	<div class="pass"><input type="password" name="password" class="box" placeholder='PASSWORD'><br><br></div>
	<!--<div class="button"><a href="home.html">
		<img src="Images/login1.png" width="80" height="40">
	</div>-->
	<input type="submit" value="LOGIN" class="button" >
	</form>
</div>
<script>
function log()
{
	
	var name=document.myform.name.value;
	var password=document.myform.password.value;
				
	if(name=="admin" && password=="admin123")
	{
		window.location.href = "admin_home.php";
        return false;
	}
	else
	{ 
		alert("Login Failed");
		return false;
	}
}
</script>				
</body>

</html>