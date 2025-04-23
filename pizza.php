<html>
<head>
<meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="pizza.css">
<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body>
<h1 class="header">PIZZA  VARIETIES</h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<div class="big_container">
<div class="container">   
    <img src="Images/pizza_italian.jfif" class='container_img'>
    <div class="name">
        <p>NAME:PIZZA ITALIAN</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="pizza_italian" ';
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
        <a href='display_item.php?food=pizza_italian'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container">  
    <img src="Images/pizza_traditional.jfif" class='container_img'>
    <div class="name">
        <p>NAME:PIZZA TRADITIONAL</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="pizza_traditional" ';
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
        <a href='display_item.php?food=pizza_traditional'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>

</div>
</body>
