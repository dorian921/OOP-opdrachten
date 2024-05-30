<?php

class produc {
  public $name;
  public $color;

  public $catagory;

  private $price = 1.99;
  
  public function setname($name, $catagory){
    $this->name = ucfirst($name);
    $this->catagory = strtoupper($catagory);
  }
};

$fruit1 = new produc;
 $fruit1->setname(name: "apple", catagory: "elstar");



echo "<br>". $fruit1->name . "<br>" . $fruit1->catagory;


