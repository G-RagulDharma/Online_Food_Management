<html>
<head>
<meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="chapati.css">
<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body>
<h1 class="header">CHAPATI  VARIETIES</h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<div class="big_container">
<div class="container">   
    <img src="Images/chapati_normal.jfif" class='container_img'>
    <div class="name">
        <p>NAME:CHAPATI NORMAL</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="chapati_normal" ';
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
        <a href='display_item.php?food=chapati_normal'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container">  
    <img src="Images/chapati_masal.jfif" class='container_img'>
    <div class="name">
        <p>NAME:MASAL CHAPATI</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="chapati_masal" ';
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
        <a href='display_item.php?food=chapati_masal'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container"> 
    <img src="Images/chapathi_kothu.jfif" class='container_img'>
    <div class="name">
        <p>NAME:CHAPATI KOTHU</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="chapathi_kothu" ';
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
        <a href='display_item.php?food=chapathi_kothu'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
</div>
</body>

