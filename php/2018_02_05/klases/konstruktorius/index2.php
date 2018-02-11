<?php
  $dog1 = new Dog("Pranius");
  $dog2 = new Dog("Brisius");
  $dog3 = new Dog("Reksas");

  echo $dog2->get_description();
  echo Dog::get_counter();

class Dog{
  const Name = "Šuo";
  private $name, $type, $legs, $realname;

  private static $counter = 0;


  function __construct($rname){
    $this->name = "Šuo";
    $this->type = "Šiltakraujas";
    $this->legs = 4;
    $this->realname = $rname;
    self::$counter++;
   }

   public static function get_counter(){
     return self::$counter;
   }

   public function get_description(){
     return "<h1>Vardas: ".$this->name.", tipas ".$this->type.", koju skaicius ".$this->legs."</h1>";
   }

  function __destruct(){
    //išlaisviname atminti, jei reikia
  }


}

 ?>
