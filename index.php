<?php
require "animal.php";
require "ape.php";
require "frog.php";
$sheep = new Animal("shaun");

echo "Name : " .$sheep->name. "<br>"; // "shaun"
echo "Legs : " .$sheep->legs; // 2
echo $sheep->cold_blooded()."<br>"; // false // false
var_dump($sheep->cold_blooded())."<br>";
$sungokong = new Ape("kera sakti");
echo "<br>Name : " .$sungokong->name. "<br>";
echo "Sound : ". $sungokong->yell(). "<br>"; // "Auooo"

$kodok = new Frog("kuduk");
$kodok->legs=4;
echo "<br>Name : ". $kodok->name."<br>";
echo "Sound : ". $kodok->jump(). "<br>";
echo "Legs : ". $kodok->legs;






?>