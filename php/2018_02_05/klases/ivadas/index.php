<?php

  $dog = new Animal();
  $dog->name = "Šuo";
  $dog->type = "Šiltakraujis";
  $dog->legs = 4;
  $dog->eyes = 2;
  $dog->gender = "male";
/*
  echo "<pre>";
    print_r($dog);
  echo "</pre>";
*/
  echo $dog->get_description();

  $cat = new Animal();
  $cat->name = "Katė";
  $cat->type = "Šiltakraujis";
  $cat->legs = 4;
  $cat->eyes = 2;
  $cat->gender = "female";

  echo $cat->get_description();

    class Animal{
    public $name, $type, $legs, $eyes, $gender;

    public function get_description(){
      return "<h1>Pavadinimas: ".$this->name.", tipas ".$this->type.", koju skaicius ".$this->legs.", akiu skaicius ".$this->eyes.". lytis ".$this->gender."</h1>";
    }
  }

 ?>
