<html>
<head>
	<meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- AUTO REFRESH -->
	<meta http-equiv='refresh' content='5'>
	<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
	<link rel='stylesheet' href='admin_home.css'>
</head>
<script>
        function showSection(sectionId) {
            var sections = document.querySelectorAll('section');
            sections.forEach(section => {
                section.style.display = 'none';
            });
            document.getElementById(sectionId).style.display = 'block';
        }
</script>

<body bgcolor='#bbffe9'>
<h1 class="head">ADMIN VIEW</h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<div class='li_container'>
<ul>
    <li><a href="javascript:void(0)" onclick="showSection('section1')">STOCK LIST</a></li>
    <li><a href="javascript:void(0)" onclick="showSection('section2')">USER & ORDER ITEM</a></li>
    <li><a href="javascript:void(0)" onclick="showSection('section3')">UPDATE</a></li>
	<li><a href="javascript:void(0)" onclick="showSection('section4')">INSERT</a></li>
</ul>
</div>
<!-- SECTION 1 TO DISPLAY STOCK LIST -->
<section id='section1'>
    
<?php
require("connection.php");

$query='select * from food_list';
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
        ?>
        <div class="img1">
			<?php
                echo '<img src="' . $row['img'] . '" width="100" height="60">';
				$_SESSION['img']=$row['img'];
				$img=$_SESSION['img'];
			?>
		</div>
		<div class='container1'>
        <div class='name'>NAME: <?php echo $row['na']; ?></div>
        <div class='price'>PRICE: <?php echo $row['price']; ?></div>
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




</section>

<!-- SECTION2 FOR USER NAME AND ORDER ITEM -->
<section id='section2'>
<?php
require("connection.php");

$query='select * from admin_view';
?>
<form action="">
<div class='big_container'>
<?php
if($result=$conn->query($query))
{
		$foodCount=0;	
		while($row=$result->fetch_assoc())
		{
		?>
		<div class="container2">
		<?php
			$f1=$row["user_na"];
            $f2=$row['na'];
			$f3=$row["price"];
			$f4=$row["tot"];
            $f5=$row['dt'];
            $f6=$row['ti'];
        ?>
        <div class="img">
			<?php
                echo '<img src="' . $row['img'] . '" width="100" height="60">';
				$_SESSION['img']=$row['img'];
				$img=$_SESSION['img'];
			?>
		</div>
		<div class='container3'>
        <div class='user_name'>USERNAME: <?php echo $row['user_na']; ?></div>
        <div class='name'>NAME:  <?php echo $row['na']; ?></div>
        <div class='price'>PRICE: <?php echo $row['price']; ?></div>
        <div class='tot'>TOTAL:   <?php echo $row['tot']; ?></div>
        <div class='date'>DATE:&ensp; <?php echo $row['dt']; ?></div>
        <div class='time'>TIME: &ensp; <?php echo $row['ti']; ?></div>
        </div>
		<?php
		
	}
	?>
</section>



</form>

</div>
	<?php
	
	
}

?>
</div>
</body>




<section id='section3'>
<div class='big_container'>
<form method='post' action=''>
<div class='update_container'>
ENTER ITEM NAME: <input type='text' name='na' class='box'><br><br>
ENTER NEW PRIZE: <input type='number' name='num' class='box'><br><br>
<input type='submit' name='update' value='UPDATE' class='button'>

</form>
<?php
require('connection.php');
if(isset($_POST['update']))
{
	$na=$_POST['na'];
	$num=$_POST['num'];
	$sql_update="update food_list set price=$num where na='$na'";
	$query=mysqli_query($conn,$sql_update);
	if($query)
	{
		echo "<div class='msg'><br>UPDATE SUCCESS<br></div>";
	}
	else
	{
		echo "<div class='msg'>Not Updated:</div>".$conn->error;
	}
}
?>
</div>
</div>
</section>


<section id='section4'>
<?php
require('connection.php');
?>
<div class='big_container'>
<form method='post'  action='' enctype='multipart/form-data'>
<div class='insert_container'>
NAME: <input type='text' name='na' class='box'><br><br>
PRICE:<input type='number' name='price' class='box'><br><br>
<input type='file' name='file_upload' class='file_upload'><br>
<input type='submit' name='insert' value='INSERT' class='button'>
</form>

<?php
$msg='';
if(isset($_POST['insert']))
{
	$na=$_POST['na'];
	$price=$_POST['price'];
	$file_name=$_FILES['file_upload']['name'];
	$tempname=$_FILES['file_upload']['tmp_name'];
	$folder='image/'.$file_name;
	if (!file_exists('image'))//create or make directory - 0777 is used to execute all
	{
        mkdir('image', 0777, true);
    }

    if (move_uploaded_file($tempname, $folder)) {
        $msg = 'Image Uploaded Successfully';

        // Use prepared statements to avoid SQL injection
        $stmt = $conn->prepare("INSERT INTO food_list (na,price,img) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $na, $price, $folder);

        if ($stmt->execute()) 
		{
            echo 'Insert success';
            echo "<img src='$folder' width='100' height='100'>";
        } 
		else
		{
            echo 'Insert failed';
        }
        $stmt->close();
    } 
	else {
        $msg = 'Failed to upload image';
    }

    echo $msg;
}

?>
</div>
</div>
</section>


</html>
