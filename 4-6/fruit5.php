<?php

class product {
  public $name;
  public $color;

  public $catagory;

  private $price = 1.99;

public function __construct($naam, $kleur, $prijs )
  {
    echo"fruit gemaakt<br>";
    $this->name = $naam;
    $this->color = $kleur;
    if($prijs !== ""){
      $this->price = $prijs;
    }
     
  }
  public function showprice()
  {
    return $this->price;

  }
  
};

 $apple = new product("elstar","rood",2.59);
$citroen = new product("citroen","paars",3.00 );


echo "<br> $apple->name $apple->color " . $apple->showprice();
