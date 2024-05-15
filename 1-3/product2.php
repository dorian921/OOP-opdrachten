<?php

class product {
  public $name;
  public $price;
  
  public function showprice()
  {
    return $this->price;

  }
  
};

$drank1 = new product();
$drank1-> name = "fanta";
$drank1-> price = " 1,99";


$drank2 = new product();
$drank2-> name = "cola";
$drank2-> price = " 1,99";

$drank3 = new product();
$drank3-> name = "7up";
$drank3-> price = " 1,99";

$drank4 = new product();
$drank4-> name = "sprite";
$drank4-> price = " 1,99";

echo "<br> $drank1->name ";
echo   $drank1->showprice();
echo "<br> $drank2->name ";
echo   $drank2->showprice();
echo "<br> $drank3->name";
echo   $drank3->showprice();

$drank1 = new product();
echo "<br>" . $drank1->name = "ice tea" . "";
echo   $drank4->showprice() ;