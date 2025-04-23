<html>
<head>
<meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="briyani.css">
<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body>
<h1 class="header">BIRYANI  VARIETIES</h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<div class="big_container">
<div class="container">   
    <img src="Images/briyani_hyderabad.jfif" class='container_img'>
    <div class="name">
        <p>NAME:BIRYANI HYDERABAD</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="briyani_hyderabad" ';
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
        <a href='display_item.php?food=briyani_hyderabad'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container">  
    <img src="Images/briyani_indian.jfif" class='container_img'>
    <div class="name">
        <p>NAME:BIRYANI INDIAN</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="briyani_indian" ';
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
        <a href='display_item.php?food=briyani_indian'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container"> 
    <img src="Images/briyani_thalapakattu.jfif" class='container_img'>
    <div class="name">
        <p>NAME:BIRYANI THALAPAKATTO</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="briyani_thalapakattu" ';
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
        <a href='display_item.php?food=briyani_thalapakattu'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
</div>
</body>
