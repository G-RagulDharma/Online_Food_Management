<html>
<head>
<meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="chapati.css">
<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body>
<h1 class="header">NOODLE  VARIETIES</h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<div class="big_container">
<div class="container">   
    <img src="Images/noodle_chineses.jfif" class='container_img'>
    <div class="name">
        <p>NAME:CHINESE NOODLE</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="noodle_chineses" ';
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
        <a href='display_item.php?food=noodle_chineses'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container">  
    <img src="Images/noodle_japanese.jfif" class='container_img'>
    <div class="name">
        <p>NAME:JAPANESE NOODLE</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="noodle_japanese" ';
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
        <a href='display_item.php?food=noodle_japanese'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container"> 
    <img src="Images/noodle_raman.jfif" class='container_img'>
    <div class="name">
        <p>NAME:RAMAN NOODLE</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="noodle_raman" ';
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
        <a href='display_item.php?food=noodle_raman'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
</div>
</body>
