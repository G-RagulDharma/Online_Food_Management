<html>
<head>
	<meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="order_item.css">
	<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body bgcolor='#0B0C10'>
<h1 class="head">ORDER LIST</h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<?php
require ("connection.php");

$query='select * from order_item';
?>
<form action="payment.php">
<div class='big_container'>
<?php
if($result=$conn->query($query))
{
		$foodCount=0;	
		while($row=$result->fetch_assoc())
		{
		?>
		<div class="container">
		<?php
			$f1=$row["na"];
			$f2=$row["price"];
			$f3=$row["tot"];
        ?>
        <div class="img">
			<?php
                echo '<img src="' . $row['img'] . '" width="100" height="60">';
				$_SESSION['img']=$row['img'];
				$img=$_SESSION['img'];
			?>
		</div>
		<div class='container1'>
        <div class='name'>NAME: <?php echo $row['na']; ?></div>
        <div class='price'>PRICE: <?php echo $row['price']; ?></div>
        <div class='tot'>TOTAL: <?php echo $row['tot']; ?></div>
        </div>
		<?php
		
	}
	?>
	
</form>

</div>
	<?php
	
	
}

?>
</div>
</body>

</html>