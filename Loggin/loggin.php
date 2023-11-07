<?php
session_start();

$usuarios = array (
  "usuario1" => "1234",
  "usuario2" => "0000",
);

if(isset($_POST['Enviar'])){
  if(isset($_POST['usuario']) && isset($_POST['password'])){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    // Verifica si el usuario y la contraseña son correctos
    if(array_key_exists($usuario, $usuarios) && ($usuarios[$usuario] == $password)){
      header("Location:contenido.php");
      exit();
    } else {
      header("Location:index.html");
      exit();
    };
  };
};
    
?>