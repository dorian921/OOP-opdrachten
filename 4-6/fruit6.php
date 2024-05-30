<?php

class product {
  public $name;
  public $color;

  public $catagory;

  public $curency;

  private $price = 1.99;

public function __construct($naam, $kleur, $prijs,$euro )
  {
    echo"fruit gemaakt<br>";
    $this->name = $naam;
    $this->color = $kleur;
    if($prijs !== ""){
      $this->price = $prijs;
    };
    $this->curency = $euro;
     
  }
  public function showprice()
  {
    return $this->price;

  }
  
};

 $apple = new product("elstar","rood",2.59,"$");
 


echo "<br> $apple->name $apple->color $apple->curency" . $apple->showprice();
