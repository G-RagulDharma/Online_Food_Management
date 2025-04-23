<?php
    require('connection.php');
?>
<html>
<head>
<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body bgcolor='#AFDDE5'>
<h1 class='head'> 60 % OFFERS </h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<!-- I OFFER -->
<form method='post'>
<div class='box'>
    <img src="Images/briyani_indian.jfif" width="150px" height="150px" style="border-radius:30px;">
	<h1 class='name'>INDIAN BRIYANI</h1>
	<h1 class='price'><s>RS 150</s></h1> 
    <h1 class='price1'> 90 </h1>
    <input type="submit" value="ORDER" class="button" name='order'>
	<input type="submit" value="CART" class="button" name='cart'>
</form>
</div>
<?php
    if(isset($_POST['order']))
    {
        $imgPath = 'Images/briyani_indian.jfif';

        $sql = "INSERT INTO order_item (na, price, img, tot) VALUES ('INDIAN BRIYANI',90, '$imgPath', 90)";
        $query=mysqli_query($conn,$sql);
        if($query)
        {
            echo 'Order1 success';
        }
        else
        {
            echo 'Error';
        }
    }
    if(isset($_POST['cart']))
	{
		$imgPath = "images/briyani_indian.jfif";
        $sql = "INSERT INTO cart ( na, price, img,tot) VALUES ('INDIAN BRIYANI',90, '$imgPath', 90)";
        $query=mysqli_query($conn,$sql);

        if($query)
        {
            echo "<br> CART1 Inserted<br>";
        }
        else
        {
            echo "Not Inserted:".mysqli_error($conn);
        }

	}
?>

<!-- II OFFER -->
<form method='post'>
<div class='box'>
    <img src="Images/momos_spicy.jfif" width="150px" height="150px" style="border-radius:30px;">
	<h1 class='name'>SPICY MOMOS</h1>
	<h1 class='price'><s>RS 100</s></h1> 
    <h1 class='price1'> 60 </h1>
    <input type="submit" value="ORDER" class="button" name='order1'>
	<input type="submit" value="CART" class="button" name='cart1'>
</form>
</div>
<?php
    if(isset($_POST['order1']))
    {
        $imgPath = 'Images/momos_spicy.jfif';

        $sql = "INSERT INTO order_item (na, price, img, tot) VALUES ('SPICY MOMOS',60, '$imgPath', 60)";
        $query=mysqli_query($conn,$sql);
        if($query)
        {
            echo 'Order2 success';
        }
        else
        {
            echo 'Error';
        }
    }
    if(isset($_POST['cart1']))
	{
		$imgPath = "images/momos_spicy.jfif";
        $sql = "INSERT INTO cart ( na, price, img,tot) VALUES ('SPICY MOMOS',60, '$imgPath', 60)";
        $query=mysqli_query($conn,$sql);

        if($query)
        {
            echo "<br> CART2 Inserted<br>";
        }
        else
        {
            echo "Not Inserted:".mysqli_error($conn);
        }

	}
?>

<!-- III OFFER -->
<form method='post'>
<div class='box'>
    <img src="Images/pizza_italian.jfif" width="150px" height="150px" style="border-radius:30px;">
	<h1 class='name'>ITALIAN PIZZA</h1>
	<h1 class='price'><s>RS 150</s></h1> 
    <h1 class='price1'> 90 </h1>
    <input type="submit" value="ORDER" class="button" name='order2'>
	<input type="submit" value="CART" class="button" name='cart2'>
</form>
</div>
<?php
    if(isset($_POST['order2']))
    {
        $imgPath = 'Images/pizza_italian.jfif';

        $sql = "INSERT INTO order_item (na, price, img, tot) VALUES ('ITALIAN PIZZA',90, '$imgPath', 90)";
        $query=mysqli_query($conn,$sql);
        if($query)
        {
            echo 'Order2 success';
        }
        else
        {
            echo 'Error';
        }
    }
    if(isset($_POST['cart2']))
	{
		$imgPath = "images/pizza_italian.jfif";
        $sql = "INSERT INTO cart ( na, price, img,tot) VALUES ('ITALIAN PIZZA',90, '$imgPath', 90)";
        $query=mysqli_query($conn,$sql);

        if($query)
        {
            echo "<br> CART2 Inserted<br>";
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
	color:white;
}
.box
{
	width:450px;
	height:150px;
	padding:40px;
	display:flex;
	margin-left:400px;
	margin-top:80px;
	box-shadow: 0px -25px 20px -20px rgba(0, 0, 0, 0.45), 
				25px 0 20px -20px rgba(0, 0, 0, 0.45), 
				0px 25px 20px -20px rgba(0, 0, 0, 0.45),
				 -25px 0 20px -20px rgba(0, 0, 0, 0.45);
	border-radius:20px;
    background-color:white;
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
	margin-left:230px;
	font-family:arial;
	font-style:italic;
	font-size:30px;
	color:pink;
}
.price1
{
	margin-top:40px;
	position:absolute;
	margin-left:350px;
	font-family:arial;
	font-style:italic;
	font-size:30px;
	color:cyan;
}
.button 
{
  margin-top:25%;
  margin-left:10%;
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
</style>
</html>
