<html>
<head>
    <title>ONLINE FOOD MANAGEMENT SYSTEM</title>
    <meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="home.css">
    <link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body bgcolor='#EDE8F5'>
<?php
session_start();
if(!isset($_SESSION['username'])) //If username not found redirect to login page
{
    echo "<script>alert('Please Login')</script>";
    header("Location: login.php");
}
else
{
?>

<!--<h1 class="header">ONLINE FOOD MANAGEMENT SYSTEM</h1> -->
<h1 class="header1">Eat Good Feel Good</h1>
<div class="logo">
    <img src="Images/logo.png" class='logo_img' style="border-radius:30px;">
    <p class="logo_name">TwiggY</p>
</div>
<div class="login1">Login/Signup</div>
<div class="login">
    <a href="login.php">
    <img src="Images/login.png" width="50px" height="50px" style="border-radius:30px;"></a>
    
</div>
<div class="user_name">
    <?php 
        @$na=$_SESSION['username'];
        echo $na; 
    ?>
</div>
<div class="search">
    <form method="post">
        <input type="text" name="box" placeholder="Search anything you want.." class="search1"  >  
        <input type="image" src="Images/search.webp" alt="Submit" class="submit" onclick="submitForm()">  
    </form>
    <script>
    function submitForm() {
        var name = document.getElementsByName("box")[0].value;
        document.write(name);
        window.location.href = name + ".php";
    }
</script>
 <!--   <script>
        const search=()=>
        {
            const searchbox=document.getElementById('search-item').value.toUpperCase();
            const storeItems=document.getElementById('food-list');
            const food=document.querySelectorAll('.food')
            const fname=document.getElementsByTagName('p')

            for(var i=0;i<fname.length;i++)
            {
                let match=food[i].getElementsByTagName('p')[0];
                if(match)
                {
                    let textValue=match.textContent || match.innerHTML
                    if(textvalue.touppercase().indexof(searchbox)>-1){
                        food[i].style.display='';
                    }
                    else{
                        food[i].style.display='none';
                    }
                }
            }

        }
        
    </script>-->
</div>
<div class="cart">
    <a href="cart_display.php">
    <img src="Images/cart.png" width="40px" height="30px"></a>
</div>
<div class="order">
    <a href="order_item.php">
    <img src="Images/order1.webp" width="40px" height="40px"></a>
</div>
<div class="container">
    <div class="img1">
        <a href='60offer.php'>
        <img src="Images/60offer.jfif" class='container_img' style="border-radius:30px;"></a>
        
    </div>
    <div class="img2">
        <a href='offer.php'>
        <img src="Images/offer_zone.jfif" class='container_img' style="border-radius:30px;"></a>
    </div>
    <div class="img3">
        <a href='combo.php'>
        <img src="Images/combo.jpg" class='container_img' style="border-radius:30px;"></a>
    </div>
    <div class="img4">
        <a href='valentaine.php'>
        <img src="Images/valentine.jpg" class='container_img' style="border-radius:30px;"></a>
    </div>
</div>
<div class="container1" id='food-list'>
    <div class="food">
        <a href='idli.php'>
        <img src="Images/idli.jfif" class='container1_img' style="border-radius:30px;"></a>
        <p>IDLI</p>
        
    </div>
    <div class="food">
        <a href='dosa.php'>
        <img src="Images/dosa.jfif" class='container1_img' style="border-radius:30px;"></a>
        <p>DOSA</p>
    </div>
    <div class="food">
    <a href='poori.php'>
        <img src="Images/poori.jfif" class='container1_img' style="border-radius:30px;"></a>
        <p>POORI</p>
    </div>
    <div class="food">
    <a href='chapati.php'>
        <img src="Images/chapati.jfif" class='container1_img' style="border-radius:30px;"></a>
        <p>CHAPATI</p>
    </div>
    <div class="food">
        <a href='briyani.php'>
        <img src="Images/biryani.jfif" class='container1_img' style="border-radius:30px;"></a>
        <p>BIRYANI</p>
    </div>
    <div class="food">
    <a href='noodle.php'>
        <img src="Images/noodle.jfif" class='container1_img' style="border-radius:30px;"></a>
        <p>NOODLE</p>
    </div>
    <div class="food">
    <a href='shawarma.php'>
        <img src="Images/shawarma.jfif"class='container1_img' style="border-radius:30px;"></a>
        <p>SHAWARMA</p>
    </div>
    <div class="food">
    <a href='porotta.php'>
        <img src="Images/porotta.jfif" class='container1_img' style="border-radius:30px;"></a>
        <p>POROTTA</p>
    </div>
    <div class="food">
    <a href='chicken.php'>
        <img src="Images/chicken.jfif" class='container1_img' style="border-radius:30px;"></a>
        <p>CHICKEN</p>
    </div>
    <div class="food">
    <a href='momos.php'>
        <img src="Images/momos.jfif" class='container1_img' style="border-radius:30px;"></a>
        <p>MOMOS</p>
    </div>
    <div class="food">
    <a href='pizza.php'>
    
        <img src="Images/pizza.jfif" class='container1_img' style="border-radius:30px;"></a>
        <p>PIZZA</p>
    </div>
    <div class="food">
    <a href='pongal.php'>
        <img src="Images/pongal.jfif" class='container1_img' style="border-radius:30px;"></a>
        <p>PONGAL</p>
    </div>
<?php
}
?>

</body>
</html>