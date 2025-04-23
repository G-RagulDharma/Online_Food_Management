<html>
<head>
<meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="idli.css">
<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body>
<h1 class="header">IDLI  VARIETIES</h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<div class="big_container">
<div class="container">   
    <img src="Images/idli.jfif" class='container_img'>
    <div class="name">
        <p>NAME:IDLI</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="idli" ';
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
        <a href='display_item.php?food=idli'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container">  
    <img src="Images/idli_podi.jfif" class='container_img'>
    <div class="name">
        <p>NAME:IDLI PODI</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="idli_podi" ';
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
        <a href='display_item.php?food=idli_podi'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container"> 
    <img src="Images/idli_rava.jfif" class='container_img'>
    <div class="name">
        <p>NAME:IDLI RAVA</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="idli_rava" ';
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
        <a href='display_item.php?food=idli_rava'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
</div>
</body>
