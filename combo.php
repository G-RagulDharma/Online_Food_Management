<?php
	require('connection.php');
	
?>
<html>
<head>
    <link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body>
<h1 class='head'> COMBO OFFER </h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<!--COMBO 1      -->
<form method="post">
<div class="combo1">
	<img src="Images/briyani_indian.jfif" width="150px" height="150px" style="border-radius:30px;">
	<h1 class='name'>INDIAN BRIYANI</h1>
	
	<div class="plus">
		<img src="Images/plus.jfif" width="70px" height="70px" style="border-radius:30px;">
	</div>
	<img src="Images/chicken_65.jfif" width="150px" height="150px" style="border-radius:30px;">
	<h1 class='name' style='margin-left:320px;'>CHICKEN 65</h1>
	<h1 class='price'>PRIZE:200</h1>
	<input type="submit" value="ORDER" class="button" name='order'>
	<input type="submit" value="CART" class="button" name='cart'>
</div>
</form>
<?php
#error_reporting(0);
    if(isset($_POST['order']))
    {
        
       # $imgPath = 'images/briyani_indian.jfif';
        $imgPath = 'images/combo1.jpg';

        $sql = "INSERT INTO order_item (na, price, img, tot) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        
        $name = "IND BRIYANI+CHICKEN 65";
        $price = 200;
        $total = 200;
        mysqli_stmt_bind_param($stmt, "sdsd", $name, $price, $imgPath, $total);

        
        $success = mysqli_stmt_execute($stmt);

        if($success)
        {
            echo "<br>COMBO 1 Inserted<br>";
        }
        else
        {
            echo "Not Inserted:".mysqli_error($conn);
        }
    }
	if(isset($_POST['cart']))
	{
		#$imgPath = "images/briyani_indian.jfif;images/chicken_65.jfif";
		#$imgPath = "images/briyani_indian.jfif";
         $imgPath = 'images/combo1.jpg';
        $sql = "INSERT INTO cart ( na, price, img,tot) VALUES ('IND BRIYANI+CHICKEN 65',200, '$imgPath', 200)";
        $query=mysqli_query($conn,$sql);

        if($query)
        {
            echo "<br>COMBO 1 CART Inserted<br>";
        }
        else
        {
            echo "Not Inserted:".mysqli_error($conn);
        }

	}

?>
<!-- COMBO 2   -->

<form method="post">
<div class="combo1">
	<img src="Images/noodle_chineses.jfif" width="150px" height="150px" style="border-radius:30px;">
	<h1 class='name'>CHINESE NOODLE</h1>
	
	<div class="plus">
		<img src="Images/plus.jfif" width="70px" height="70px" style="border-radius:30px;">
	</div>
	<img src="Images/shawarma_chicken.jfif" width="150px" height="150px" style="border-radius:30px;">
	<h1 class='name' style='margin-left:320px;'>CHICKEN 65</h1>
	<h1 class='price'>PRIZE:200</h1>
	<input type="submit" value="ORDER" class="button" name='order1'>
	<input type="submit" value="CART" class="button" name='cart1'>
</div>
</form>
<?php
#error_reporting(0);
    if(isset($_POST['order1']))
    {
        
        #$imgPath = 'images/noodle_chinese.jfif';
         $imgPath = 'images/combo1.jpg';
        $sql = "INSERT INTO order_item (na, price, img, tot) VALUES ('CHINESE NOODLE+C SHAWARMA',200, '$imgPath', 200)";
        $query=mysqli_query($conn,$sql);

        if($query)
        {
            echo "<br>COMBO 2 Inserted<br>";
        }
        else
        {
            echo "Not Inserted:".mysqli_error($conn);
        }
    }
	if(isset($_POST['cart1']))
	{
		#$imgPath = 'images/noodle_chinese.jfif';
         $imgPath = 'images/combo1.jpg';

		$sql = "INSERT INTO cart ( na, price, img,tot) VALUES ('CHINESE NOODLE+C SHAWARMA',200, '$imgPath', 200)";
        $query=mysqli_query($conn,$sql);

        if($query)
        {
            echo "<br>COMBO 2 CART Inserted<br>";
        }
        else
        {
            echo "Not Inserted:".mysqli_error($conn);
        }

	}

?>
</body>
<style>
.head
{
	text-align:center;
	font-style:italic;
	color:blue;
}
.combo1
{
	width:800px;
	height:150px;
	padding:40px;
	display:flex;
	margin-left:260px;
	margin-top:80px;
	box-shadow: 0px -25px 20px -20px rgba(0, 0, 0, 0.45), 
				25px 0 20px -20px rgba(0, 0, 0, 0.45), 
				0px 25px 20px -20px rgba(0, 0, 0, 0.45),
				 -25px 0 20px -20px rgba(0, 0, 0, 0.45);
	border-radius:20px;
}
.plus
{
	margin-top:-10px;
	padding:50px;
}
.name
{
	position:absolute;
	padding:20px;
	margin-left:-10px;
	margin-top:139px;
	font-family:arial;
	font-style:20px;
	font-size:20px;
	color:red;
}
.price
{
	margin-top:40px;
	position:absolute;
	margin-left:580px;
	font-family:arial;
	font-style:italic;
	font-size:30px;
	color:blue;
}
.button 
{
  margin-top:13%;
  margin-left:7%;
  background-color: #e600e6;
  color:cyan;
  font-weight: bold;
  height: 30px;
  width: 100px;
  box-shadow: 0 0 13px 4px cyan;
  border-color:pink;
}

.button:hover 
{
  background-color: #e600e6;
  font-weight: bold;
  font-size: 18px;
  font-family: Arial;
  color: white;
}
.home
{
    position:absolute;
    right:10px;
}