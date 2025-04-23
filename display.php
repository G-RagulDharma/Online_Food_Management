
<html>
<body>

<?php
require("connection.php");
if(isset($_POST))
{
	
	$query="select * from food_list ";
	echo "<span style='color:#e90ebe;font-size:40px;font-family:arial'>--FOOD LIST--";
	if($result=$conn->query($query))
	{
		while($row=$result->fetch_assoc())
		{
			$f1=$row["na"];
			$f2=$row["price"];
			
			
			echo "<br>";
			
			echo "<br><span style='color:#ff0080;font-size:20px;'>NAME &emsp;&emsp;&ensp;   :",$f1;
			echo "<br><span style='color:#ff0080;font-size:20px;'>PRICE &emsp; :",$f2;
            echo "<img src='data:image/jfif;base64,".base64_encode($row['img'])."' width='100' height='100'>";
			
			echo "-----------------------------------";
			
		}
	}
	else
		echo "No Record Found";
}
?>

</body>
</html>