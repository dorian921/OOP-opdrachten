<?php

class product {
  public $name;
  
  
};

$drank1 = new product();
$drank1-> name = "fanta";


$drank2 = new product();
$drank2-> name = "cola";

$drank3 = new product();
$drank3-> name = "7up";

var_dump($drank1);
var_dump($drank2);
var_dump($drank3);

echo "<br> $drank1->name <br>";
echo "<br> $drank2->name <br>";
echo "<br> $drank3->name <br>";