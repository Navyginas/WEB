<?php
  class Animal{
    private $eyes, $legs;

    function __construct($eyes, $legs){
      $this->eyes = $eyes;
      $this->legs = $legs;

    }
    protected function get_eyes(){
      return $this->eyes;
    }
    protected function get_legs(){
      return $this->legs;
    }

  }
 ?>
