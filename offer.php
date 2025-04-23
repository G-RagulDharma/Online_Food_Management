<html>
    <head>
    <link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body>
<h1 class='head'>BUY 1 GET 1 FREE </h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<form method='post'>
<div class='box'>
    <img src="Images/shawarma_veg.jfif" width="150px" height="150px" style="border-radius:30px;">
	<h1 class='name'>VEG SHAWARMA</h1>
    <h1 class='quantity'>QUANTITY:2</h1>
	<h1 class='price'><s>RS 240</s></h1> 
    <h1 class='price1'> 120 </h1>
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
	<h1 class='name'>NORMAL POROTTA</h1>
    <h1 class='quantity'>QUANTITY:2</h1>
	<h1 class='price'><s>RS 40</s></h1> 
    <h1 class='price1'> 20 </h1>
    <input type="submit" value="ORDER" class="button" name='order1'>
	<input type="submit" value="CART" class="button" name='cart1'>
</form>
</div>
<?php
    if(isset($_POST['order1']))
    {
        $imgPath = 'Images/porotta_normal.jfif';

        $sql = "INSERT INTO order_item (na, price, img, tot) VALUES ('porotta',20, '$imgPath', 20)";
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
		$imgPath = "images/porotta_normal.jfif";
        $sql = "INSERT INTO cart ( na, price, img,tot) VALUES ('porotta',20, '$imgPath', 20)";
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
    <img src="Images/chapati_masal.jfif" width="150px" height="150px" style="border-radius:30px;">
	<h1 class='name'>MASAL CHAPATI</h1>
    <h1 class='quantity'>QUANTITY:2</h1>
	<h1 class='price'><s>RS 60</s></h1> 
    <h1 class='price1'> 30 </h1>
    <input type="submit" value="ORDER" class="button" name='order2'>
	<input type="submit" value="CART" class="button" name='cart2'>
</form>
</div>
<?php
    if(isset($_POST['order2']))
    {
        $imgPath = 'Images/chapati_masal.jfif';

        $sql = "INSERT INTO order_item (na, price, img, tot) VALUES ('MASAL CHAPATI',30, '$imgPath', 30)";
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
		$imgPath = "images/chapati_masal.jfif";
        $sql = "INSERT INTO cart ( na, price, img,tot) VALUES ('MASAL CHAPATI',30, '$imgPath', 30)";
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
	color:blue;
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
.quantity
{
    margin-top:-3px;
	position:absolute;
	margin-left:220px;
	font-family:arial;
	font-style:italic;
	font-size:30px;
	color:green;
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
