<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="login_new.css">
</head>
<body class="bg">

<h1 class="one">CREATE ACCOUNT</h1>
<div class="home"><a href="login.php">
		<img src="Images/home.jfif" width="40" height="40" style="border-radius:30px;"></a>
	</div>
<form method="post">
 <div class="border">
    <div class="input-field">
      <label class="input-label">NAME:</label>
      <input type="text" name="na" class="input-box" placeholder="NAME" required="">
    </div>
    <div class="input-field">
      <label class="input-label">DATE OF BIRTH:</label>
      <input type="date" name="dob" class="input-box" placeholder="DOB" required="">
    </div>
    <div class="input-field">
	  
		<label class="input-label">GENDER:</label>
		<label class="radio-label">
			<input type="radio" name="gender" value="M" class="input-box"> MALE
		</label>
			<label class="radio-label">
			<input type="radio" name="gender" value="F" class="input-box"> FEMALE
		</label>
	   
    </div>
    <div class="input-field">
      <label class="input-label">CREATE A NEW EMAIL:</label>
      <input type="email" name="email" class="input-box" placeholder="EMAIL" required="">
    </div>
    <div class="input-field">
      <label class="input-label">PASSWORD:</label>
      <input type="password" name="password" class="input-box" placeholder="PASSWORD" required="">
    </div>
    <div class="input-field">
      <label class="input-label">RE-TYPE PASSWORD:</label>
      <input type="password" name="repassword" class="input-box" placeholder="PASSWORD" required="">
    </div>
    <input type="submit" value="submit" name="submit1" class="button">
  </div>
</form>
<?php
require("connection.php");
if(isset($_POST['submit1']))
{
  @$na=$_POST['na'];
  @$dob=$_POST['dob'];
  @$gender=$_POST['gender'];
  @$email=$_POST['email'];
  @$password=$_POST['password'];
  @$repassword=$_POST['repassword'];

  $sql="insert into login values('$na','$dob','$gender','$email','$password','$repassword')";
  $query=mysqli_query($conn,$sql);
  if($query)
  {
    header("Location:login.php");
  }
  else
  {
    echo "Insert failed:".$conn->error;
  }
}


?>
</body>
</html>
