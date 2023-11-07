<!DOCTYPE html>
<html lang="es">
  <head>
    <title>LOGGIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <style>
  #contenedor {
  color: rgb(141, 224, 224);
  width: 300px;
  border: 1px;
  background-color: azure;
  padding: 60px;
  margin: auto;
}

#contenedor [type="text"], #contenedor [type="password"]{
  color: black;
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

h2{
  color:blue;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  align-items: center;
}

#contenedor [type="submit"]{
  color: rgb(244, 244, 248);
  background-color: rgb(87, 87, 214);
  cursor: pointer;
}

div {
  align-items: center;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }
    </style>
  </head>
  <body>
    <div id="contenedor">
      <h2>LOGGIN DAW</h2>
      <form action="index.php" method ="post">
        USUARIO
        <input type="text" name="usuario" id="usuario">
        <br><br>
        CONTRASEÑA
        <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" name="enviar" id="enviar">
      </form>
    </div>  
  </body>
</html>