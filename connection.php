<?php
	$servername="localhost";
	$username="root";
	$password="";
		
	$conn=new mysqli($servername,$username,$password);
	if($conn->connect_error)
	{
		die("Connection Failed".$conn->connect_error);
	}
	
	$sql="CREATE DATABASE if not exists food";
	$query=mysqli_query($conn,$sql);
	/**if($query)
	{
		echo "<br>Database Created<br>";
	}
	else
	{
		echo "Database Created:".$conn->error;
	}*/

	
	
	mysqli_select_db($conn,'food');

	$sql="create table if not exists food_list(na varchar(20),price int(10),img longblob)";
	$query=mysqli_query($conn,$sql);
	/**if($query)
	{
		echo "<br>Table Created<br>";
	}
	else
	{
		echo "Table not created:".$conn->error;
	}*/

	$sql="create table if not exists cart(id INT AUTO_INCREMENT PRIMARY KEY,na varchar(50),price int(10),img longblob,tot int(20))";
	$query=mysqli_query($conn,$sql);
	/**if($query)
	{
		echo "<br>Cart Table Created<br>";
	}
	else
	{
		echo "Table not created:".$conn->error;
	}*/
	$sql="create table if not exists login(na varchar(20),dob date,gender varchar(10),email varchar(50),password varchar(10),repassword varchar(10))";
	$query=mysqli_query($conn,$sql);
	/**if($query)
	{
		echo "<br>Cart Table Created<br>";
	}
	else
	{
		echo "Table not created:".$conn->error;
	}*/

	$sql1="create table if not exists order_item(na varchar(50),price int(10),img longblob,tot int(20))";
	$query=mysqli_query($conn,$sql1);
	/*if($query)
	{
		echo "<br>Cart Table Created<br>";
	}
	else
	{
		echo "Table not created:".$conn->error;
	}*/
	$sql2="create table if not exists admin_view(user_na varchar(50),na varchar(50),price int(10),img longblob,tot int(20),dt DATE,ti TIME)";
	$query=mysqli_query($conn,$sql2);
	/*if($query)
	{
		echo "<br>Details<br>";
	}
	else
	{
		echo "Table not created:".$conn->error;
	}*/
	
?>