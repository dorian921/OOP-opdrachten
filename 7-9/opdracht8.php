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
    $this->color = $kleur;
  }
  public function showprice()
  {
    return $this->price;

  }

  public function getproduct(){
    return " het product" .$this->name . $this->color. " kost". $this->curency . $this->price;
  }
  
};

 $apple = new product(naam: " elstar",kleur: " rood",prijs: 2.59, euro: " $");
 $peer = new product(naam: " peer",kleur: " groen",prijs: 5.22, euro: " $");
 $citroen = new product(naam: " citroen",kleur: " geel",prijs: 8.59, euro: " $");
 


echo  $apple->getproduct() ."<br>";
echo  $peer->getproduct() ."<br>";
echo $citroen->getproduct() ."<br>";
