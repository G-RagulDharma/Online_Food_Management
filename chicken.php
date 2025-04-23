<html>
<head>
<meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="chicken.css">
<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body>
<h1 class="header">CHICKEN VARIETIES</h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<div class="big_container">
<div class="container">   
    <img src="Images/chicken_65.jfif" class='container_img'>
    <div class="name">
        <p>NAME:CHICKEN 65</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="chicken_65" ';
            if($result=$conn->query($sql))
            {	
		        while($row=$result->fetch_assoc())
		        {
			        $price = $row["price"];
                    echo 'PRICE:',$price;
                }
            }
        ?>
        </p>
    </div>
    <div class="view_btn">
        <a href='display_item.php?food=chicken_65'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container">  
    <img src="Images/chicken_tandoori.jfif" class='container_img'>
    <div class="name">
        <p>NAME:CHICKEN TANDOORI</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="chicken_tandoori" ';
            if($result=$conn->query($sql))
            {	
		        while($row=$result->fetch_assoc())
		        {
			        $price = $row["price"];
                    echo 'PRICE:',$price;
                }
            }
        ?>
        </p>
    </div>
    <div class="view_btn">
        <a href='display_item.php?food=chicken_tandoori'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container"> 
    <img src="Images/chicken_grill.jfif" class='container_img'>
    <div class="name">
        <p>NAME:CHICKEN GRILL</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="chicken_grill" ';
            if($result=$conn->query($sql))
            {	
		        while($row=$result->fetch_assoc())
		        {
			        $price = $row["price"];
                    echo 'PRICE:',$price;
                }
            }
        ?>
        </p>
    </div>
    <div class="view_btn">
        <a href='display_item.php?food=chicken_grill'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
</div>
</body>
