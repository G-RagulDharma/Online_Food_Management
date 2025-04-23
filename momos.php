<html>
<head>
<meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="momos.css">
<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body>
<h1 class="header">MOMOS  VARIETIES</h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<div class="big_container">
<div class="container">   
    <img src="Images/momos_spicy.jfif" class='container_img'>
    <div class="name">
        <p>NAME:SPICY MOMOS</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="momos_spicy" ';
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
        <a href='display_item.php?food=momos_spicy'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container">  
    <img src="Images/momos_kothe.jfif" class='container_img'>
    <div class="name">
        <p>NAME:MOMOS KOTHE</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="momos_kothe" ';
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
        <a href='display_item.php?food=momos_kothe'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>

</div>
</body>
