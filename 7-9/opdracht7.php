<?php

class product {
  public $name;
  public $color;

  public $catagory;

  public $curency;

  private $price = 1.99;

public function __construct(public $naam, public $kleur, public $prijs,public $euro )
  {
    echo"fruit gemaakt<br>";
    $this->name = ucfirst($naam);
    
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

 $apple = new product(naam: "elstar",kleur: "rood",prijs: 2.59, euro: "$");
 


echo "<br> $apple->naam $apple->kleur $apple->euro" . $apple->showprice();
