<html>
<head>
<meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="porotta.css">
<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body>
<h1 class="header">POROTTA  VARIETIES</h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<div class="big_container">
<div class="container">   
    <img src="Images/porotta_normal.jfif" class='container_img'>
    <div class="name">
        <p>NAME:POROTTA</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="porotta_normal" ';
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
        <a href='display_item.php?food=porotta_normal'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container">  
    <img src="Images/porotta_nool.jfif" class='container_img'>
    <div class="name">
        <p>NAME:NOOL POROTTA</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="porotta_nool" ';
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
        <a href='display_item.php?food=porotta_nool'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container"> 
    <img src="Images/porotta_kothu.jfif" class='container_img'>
    <div class="name">
        <p>NAME:KOTHU POROTTA</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="porotta_kothu" ';
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
        <a href='display_item.php?food=porotta_kothu'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
</div>
</body>
