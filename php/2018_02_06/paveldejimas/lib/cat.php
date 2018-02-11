<?php
  class Cat{
    private $eyes, $legs;

    function __construct($eyes, $legs){
    $this->eyes = $eyes;
    $this->legs = $legs;

  }
  protected function get_eyes(){
    return $this->eyes;
  }
 ?>
