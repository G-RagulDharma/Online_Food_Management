<html>
<head>
<meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="shawarma.css">
<link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body>
<h1 class="header">SHAWARMA  VARIETIES</h1>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<div class="big_container">
<div class="container">   
    <img src="Images/shawarma_chicken.jfif" class='container_img'>
    <div class="name">
        <p>NAME:CHICKEN SHAWARMA</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="shawarma_chicken" ';
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
        <a href='display_item.php?food=shawarma_chicken'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>
<div class="container">  
    <img src="Images/shawarma_veg.jfif" class='container_img'>
    <div class="name">
        <p>NAME:VEG SHAWARMA</p>
        <p><?php
            require('connection.php');
            $sql='select price from food_list where na="shawarma_veg" ';
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
        <a href='display_item.php?food=shawarma_veg'>  
        <img src="Images/view.png" class='view_btn1'></a>
    </div>
</div>

</div>
</body>
