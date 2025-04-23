<html>
<head>
    <link rel='icon' type='image/x-icon' href='./Images/logo.png'>
</head>
<body bgcolor='#EBE9E1'>
<div class="home">
    <a href='home.php'>
    <img src="Images\home.jfif" width="50" height="50"></a>
</div>
<div class='container1'>
<?php
session_start();
if (isset($_GET['food'])) 
{
    $na = $_GET['food'];
}
require("connection.php");
if(isset($_POST))
{
	
	$query="select * from food_list where na='$na'";
    if($result=$conn->query($query))
	{
		while($row=$result->fetch_assoc())
		{
			$f1=$row["na"];
			$f2=$row["price"];
        ?>
        <div class="img">
        <?php
         echo '<img src="' . $row['img'] . '" width="100" height="100">';
        $_SESSION['img']=$row['img'];
        ?>
        </div>
        <form method='post'>
        <div class="container">
            <table class="table">
                <tr>
                    <td>NAME:  <?php echo $f1; ?></td>
                </tr>
                <tr>
                    <td>PRICE:  <?php echo $f2; ?></td>
                </tr>
                <tr>
                    <td>
                    QUANTITY:<input type='number' name='quantity' class='quantity_box' required>
                    <input type='submit' value='TOTAL' name='submit' class='tot'>
                    </td>
                </tr>
                
        </div>
        </form>
        <form method='post'>
            <div class="cart"> 
                <input type="submit" name="cart" value="ADD TO CART" class="cart_btn" >
            </div>
        </form>
        <form method='post'>
            <div class="order"> 
                <input type="submit" name="ord" value="ORDER NOW" class="ord_btn" >
            </div>
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $tot=0;
            $quantity=$_POST['quantity'];
            $tot=$quantity*$f2;
            $_SESSION['tot']=$tot;
            ?>
            <td>
             <?php   
             echo "<div class='tot_msg'>";
            echo "TOTAL:".$tot;
            echo "</div>";
            ?>
            </td>
            
            </table>
           
            <?php
            
        }
         
        if(isset($_POST['cart']))
        {
            
          /*  $_SESSION['name']=$f1;
           $_SESSION['price']=$f2;
           $_SESSION['img']=$row['img'];
           
            echo "Cart Added Successfully!";
           echo $_SESSION['name'];
           echo $_SESSION['price'];
           echo $_SESSION['tot'];*/

         
          $img1=$_SESSION['img'];
          #echo "<img src='data:image/jfif;base64,".$img1."' width='150' height='150' >";
          @$tot1=$_SESSION['tot'];
          $sql="insert into cart(na,price,img,tot) values('$f1',$f2,'$img1',$tot1)";  
          $query=mysqli_query($conn,$sql);
	        if($query)
	        {
		        echo "<br><div class='msg'>Item added into cart..!</div><br>";
	        }
	        else
	        {
		        echo "Insert failed:".$conn->error;
	        }

        }
        if(isset($_POST['ord']))
        {
            $img2=$_SESSION['img'];
            #echo "<img src='data:image/jfif;base64,".$img1."' width='150' height='150' >";
            $tot2=$_SESSION['tot'];
            $sql="insert into order_item values('$f1',$f2,'$img2',$tot2)";  
            $query=mysqli_query($conn,$sql);
            if($query)
            {
                echo "<br><div class='msg'>ORDERED SUCESSFULLY..!</div><br>";
            }
            else
            {
                echo "Not Ordered:".$conn->error;
            }
            #----FOR ADMIN
        	@$user_na=$_SESSION['username'];
        	#echo $user_na;
            date_default_timezone_set('Asia/kolkata');
            $date=date('Y/m/d');
            $time=date('h:i:sa'); 
          	$sql1="insert into admin_view(user_na,na,price,img,tot,dt,ti) values('$user_na','$f1',$f2,'$img2',$tot2,'$date','$time')";  
          	$query=mysqli_query($conn,$sql1);
	       /* if($query)
	        {
		        echo "<br><div class='msg'>Admin View..!</div><br>";
	        }
	        else
	        {
		        echo "Insert failed:".$conn->error;
	        }*/
        
		
        }
    }
}
}
?>
</div>
<p class='one'>MORE ITEMS : </p>
<div class='container2'>
    <div class="food">
        <a href='idli.php'>
        <img src="Images/idli.jfif" width="120px" height="70px" style="border-radius:30px;"></a>
        <p class='food_name'>IDLI</p>
        
    </div>
    <div class="food">
        <a href='dosa.php'>
        <img src="Images/dosa.jfif" width="120px" height="70px" style="border-radius:30px;"></a>
        <p class='food_name'>DOSA</p>
    </div>
    <div class="food">
    <a href='poori.php'>
        <img src="Images/poori.jfif" width="120px" height="70px" style="border-radius:30px;"></a>
        <p class='food_name'>POORI</p>
    </div>
    <div class="food">
    <a href='chapati.php'>
        <img src="Images/chapati.jfif" width="120px" height="70px" style="border-radius:30px;"></a>
        <p class='food_name'>CHAPATI</p>
    </div>
    <div class="food">
        <a href='briyani.php'>
        <img src="Images/biryani.jfif" width="120px" height="70px" style="border-radius:30px;"></a>
        <p class='food_name'>BIRYANI</p>
    </div>
    <div class="food">
    <a href='chicken.php'>
        <img src="Images/chicken.jfif" width="120px" height="70px" style="border-radius:30px;"></a>
        <p class='food_name'>CHICKEN</p>
    </div>
    <div class="food">
    <a href='momos.php'>
        <img src="Images/momos.jfif" width="120px" height="70px" style="border-radius:30px;"></a>
        <p class='food_name'>MOMOS</p>
    </div>
    <div class="food">
    <a href='pizza.php'>
        <img src="Images/pizza.jfif" width="120px" height="70px" style="border-radius:30px;"></a>
        <p class='food_name'>PIZZA</p>
    </div>
    <div class="food">
    <a href='pongal.php'>
        <img src="Images/pongal.jfif" width="120px" height="70px" style="border-radius:30px;"></a>
        <p class='food_name'>PONGAL</p>
    </div>
</div>
</body>
<style>
*
{
    font-family:arial;
    font-size:20px; 
}
.img
{
    text-align:center;
    margin-top:90px;
    margin-left:40px;
    width:2px;
    height:2px;
}
.container1
{
    margin-top:60px;
    margin-left:300px;
    padding:10px;
    height:300px;
    width:600px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, 
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, 
    rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    border-radius:20px;
    display:flex;
    background-color:white;
}
.container
{
    margin-left:-40px;
    margin-top:-30px;
}
.cart
{
    position:fixed;
    margin-left:190px;
    margin-top:240px;
    width:220px;
    height:140px;
}
.cart_btn
{ 
    width: 130px; 
    height: 40px; 
    background-color:green;
    color:white;
    border-radius:10px;
    cursor: pointer;
    font-size:16px; 
    text-align: center; 
    border:none;
    font-weight:20px;
    transition:transform .2s;
}
.cart_btn:hover
{
    transform:scale(1.1);
}
.order
{
    position:fixed;
    margin-left:400px;
    margin-top:240px;
    width:220px;
    height:140px;
}
.ord_btn
{  
    width: 130px; 
    height: 40px; 
    background-color:green;
    color:white;
    border-radius:10px;
    cursor: pointer;
    font-size:16px; 
    text-align: center; 
    border:none;
    font-weight:20px;
    transition:transform .2s;
}
.ord_btn:hover
{
    transform:scale(1.1);
}
.tot
{
    margin-left:10px;
    padding:5px;
    background-color:cyan;
    color:white;
    border-radius:5px;
    cursor: pointer;
    font-size:13px; 
    text-align: center;
    border:none; 
    transition:transform .2s;
    font-weight:bold;
}
.tot:hover
{
    transform: scale(1.2);
}
.quantity_box
{
    width:100px;
    height:20px;
    border-radius:20px;
    border-color:cyan;
    padding:10px;
    text-align:center;
    font-size:15px;
    margin-left:10px;
}
.quantity_box:hover
{
    color:red;
    border-color:cyan;
    font-style:arial;
}
table
{
    margin-top:30px;
    border-spacing:20px;
    margin-left:150px;
    padding:20px;
    
}
.tot_msg
{
    margin-left:80px;
    color:red;
    font-family:elephant;
}
.msg
{
    margin-left:190px;
    position:fixed;
    margin-top:280px;
}
.home
{
    position:absolute;
    right:10px;
}
.container2
{
    display:flex;
    position:absolute;
    width:1200px;
    height:140px;
    margin-left:-300px;
    margin-top:323px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-radius:20px;
    overflow:hidden;
    background-color:white;
}
.food
{
    padding:20px;
    text-align:center;
    animation:marquee 10s linear infinite;
}
@keyframes marquee
{
    0%
    {
        transform:translateX(50%);
    }
    100%
    {
        transform:translateX(-50%);
    }
}
.food_name
{
    font-size:12px;
}
.one
{
    position:absolute;
    margin-left:-300px;
    margin-top:290px;
    color:#a83293;
}
</style>
</html>