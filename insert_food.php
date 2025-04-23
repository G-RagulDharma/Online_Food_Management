<?php
require('connection.php');

$sql="insert into food_list(na,price,img) values('idli',10,'images/idli.jfif'),
        ('idli_podi',15,'images/idli_podi.jfif'),
        ('idli_rava',20,'images/idli_rava.jfif'),
        ('chicken_65',80,'images/chicken_65.jfif'),
        ('chicken_tandoori',120,'images/chicken_tandoori.jfif'),
        ('chicken_grill',150,'images/chicken_grill.jfif'),
        ('briyani_hyderabad',180,'images/briyani_hyderabad.jfif'),
        ('briyani_indian',150,'images/briyani_indian.jfif'),
        ('briyani_thalapakattu',200,'images/briyani_thalapakattu.jfif'),
        ('chapati_normal',20,'images/chapati_normal.jfif'),
        ('chapati_masal',30,'images/chapati_masal.jfif'),
        ('chapathi_kothu',80,'images/chapathi_kothu.jfif'),
        ('dosa_south',40,'images/dosa_south.jfif'),
        ('dosa_cheese',60,'images/dosa_cheese.jfif'),
        ('dosa_masal',50,'images/dosa_masal.jfif'),
        ('momos_spicy',100,'images/momos_spicy.jfif'),
        ('momos_kothe',120,'images/momos_kothe.jfif'),
        ('noodle_chineses',120,'images/noodle_chineses.jfif'),
        ('noodle_raman',120,'images/noodle_raman.jfif'),
        ('noodle_japanese',120,'images/noodle_japanese.jfif'),
        ('pizza_italian',150,'images/pizza_italian.jfif'),
        ('pizza_traditional',120,'images/pizza_traditional.jfif'),
        ('pongal_regular',60,'images/pongal_regular.jfif'),
        ('pongal_ven',50,'images/pongal_ven.jfif'),
        ('poori_normal',20,'images/poori_normal.jfif'),
        ('poori_halwa',30,'images/poori_halwa.jfif'),
        ('porotta_normal',20,'images/porotta_normal.jfif'),
        ('porotta_nool',25,'images/porotta_nool.jfif'),
        ('porotta_kothu',80,'images/porotta_kothu.jfif'),
        ('shawarma_chicken',120,'images/shawarma_chicken.jfif'),
        ('shawarma_veg',80,'images/shawarma_veg.jfif')
 ";
$query=mysqli_query($conn,$sql);
if($query)
{
	echo "<br>ALL FOOD LIST INSERT SUCCESSFULLY<br>";
}
else
{
	echo "Table not created:".$conn->error;
}

?>