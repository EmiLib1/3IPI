<?php
// servidores variaveis super globais GET, POST

// GET
//  $nome =  $_GET["nome"];
//  $email = $_GET["email"];
//  $sexo = $_GET["sexo"];


 // POST 

  $nome = $_POST["nome"]; 
  $email = $_POST["email"];
  $sexo = $_POST["sexo"];


 echo $nome . ", " . $email . ", " . $sexo;

 echo "<br>";
 
//  print_r($_GET);
     print_r($_POST);

?>