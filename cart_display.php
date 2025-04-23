<html>
<head>
	<meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="cart_display.css">
	<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body bgcolor='#E8CBF4'>
<h1 class="head">CART LIST</h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>

<?php
require ("connection.php");


?>


<form action="" method="post">
<div class="container">
<div class="submit">
		<input type="submit" value="ORDER ALL" name="submit" class="order_btn">
	</div>
		<table>
        <tr>
			<th>FOOD</th>
			<th>NAME</th>
			<th>PRICE</th>
			<th>TOTAL</th>
			<th>DELETE</th>
		</tr>
<?php
$query='select * from cart';
if($result=$conn->query($query))
{
		$foodCount=0;	
		while($row=$result->fetch_assoc())
		{
			$id = $row["id"];
			$f1=$row["na"];
			$f2=$row["price"];
			$f3=$row["tot"];
        ?>
        <div class="img">
		
		<tr class='img_tr'>
			<td>
			<?php
        		#echo "<img src='data:image/jfif;base64,".$row['img']."' width='100' height='60' >";
				echo '<img src="' . $row['img'] . '" class="food_img">';
			?>
			</td>
			<td>
			<?php
        		echo $f1;
			?>
			</td>
			<td>
			<?php
        		echo $f2;
			?>
			</td>
			<td>
			<?php
        		echo $f3;
			?>
			</td>
			<td>
				<form action="" method="post">
				<input type="hidden" name="delete_id" value="<?php echo $id; ?>">
					<div class="cross">
						<input type="submit" name="del" value=""  class="cross_btn">
					</div>
				</form>
				<?php
					if(isset($_POST['del']))
					{
						$delete_id = $_POST['delete_id'];
						$sql="delete from cart where id=$delete_id";
						$query=mysqli_query($conn,$sql);
						/*echo "<script>
							setTimeout(function()
							{
								location.reload();
							},2000);

						</script>
						";*/
						/*if($query)
						{
							echo "<br>Delete Success<br>";
						}
						else
						{
							echo "Not deleted:".$conn->error;
						}*/
					}
				?>
				 
			</td>
		
		</tr>
		</div>
		<?php
		
	}
	?>
	

</form>
</table>
</div>

<?php
//---THIS SUBMIT BUTTON USED TO INSERT ALL ITEMS INTO ORDER_ITEM TABLE
$query='select * from cart';

if (isset($_POST['submit']))
{
	if($result=$conn->query($query))
	{
    	while ($row = $result->fetch_assoc())
		{
       		$f1 = $row["na"];
        	$f2 = $row["price"];
        	$f3 = $row["tot"];
        	$img = $row['img']; 

        	$sql = "INSERT INTO order_item (na, price, img, tot) VALUES ('$f1', $f2, '$img', $f3)";
        	$query = mysqli_query($conn, $sql);

       		/* if ($query) {
            	echo "<br><div class='msg'>INSERT SUCCESSFULLY..!</div><br>";
        	} else {
           		echo "Not Inserted: " . mysqli_error($conn);
        	}*/
   		}
	}
}	
	
}

?>
</body>

</html>