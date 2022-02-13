<?php 
 
 // operator perbandingan
 var_dump(1 < 5) ;
 echo "</br>"; 

 var_dump(1 > 5) ;
 echo "</br>"; 

 var_dump(1 <= 5) ;
 echo "</br>";
 
 var_dump(1 >= 5) ;
 echo "</br>";
 
 var_dump(1 == 5) ;
 echo "</br>"; 

 var_dump(1 != 5) ;
 echo "</br>"; 

//operator identitas
var_dump(1 === "1"); #dibaca apakah 1 bernilai sama dengan 1
echo "</br>";

var_dump(1 !== "1");
echo "</br>";

//operator logika
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
echo "</br>";

$x = 10;
var_dump($x < 5 || $x % 2 == 1);







?>