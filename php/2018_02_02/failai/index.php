<?php
// creat_file_hello("Tekstas");
//get_line_from_file();
  get_all_lines_from_file();

  function creat_file_hello($arg){

    $fh = fopen("tekstas.txt", "w");
    //$text = "Hello world!";

    fwrite($fh, $arg) or die("Sorry nepavyko!");
    fclose($fh);
    echo "Done";
  }
  
  function get_line_from_file(){
      $fh = fopen("tekstas.txt", "r");
      $line = fgets($fh);
      fclose($fh);
      echo $line;

  }

  function get_all_line_from_file(){
      $fh = fopen("daugiau_texto.txt", "r");
      while (!feof($fh)) { //kol ne failo pabaiga
        $line = fgets($fh);
        echo $line."<br />";
      }
      fclose($fh);
  }
 ?>
