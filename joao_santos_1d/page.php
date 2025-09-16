<?php
include "conexao.php"; 
$result = mysqli_query($conexao, "SELECT * FROM recados");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stistylsheet" href="css.css">
</head>
<body>
    <form action="">
    <div style="width: 300px; height: 250px; border: 2px solid rgb(77, 77, 77); padding: 10px; border-radius: 8px; ">
    <form action="">
 <h1>recados</h1>
      <input type="text" placeholder="nome" id="nome">
      <input type="password" placeholder="email" id="email">
      <input type="submit" onclick="logar(); return false">
    </form>
  </div>
</body>
</html>