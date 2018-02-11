<?php
  namespace lib;
  class User{
    private $name, $username, $email;

    function __construct(
      $name,
      $username,
      $email){
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
      }
  }

 ?>
