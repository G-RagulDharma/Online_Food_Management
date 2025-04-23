<html>
<head>
<meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="poori.css">
<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body>
<h1 class="header">POORI  VARIETIES</h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<div class="big_container">
<div class="container">   
    <img src="Images/poori_normal.jfif" class='container_img'>
    <div class="name">
        <p>NAME:POORI</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="poori_normal" ';
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
        <a href='display_item.php?food=poori_normal'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container">  
    <img src="Images/poori_halwa.jfif" class='container_img'>
    <div class="name">
        <p>NAME:POORI HALWA</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="poori_halwa" ';
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
        <a href='display_item.php?food=poori_halwa'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>

</div>
</body>
