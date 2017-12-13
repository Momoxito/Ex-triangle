<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script type="text/javascript" src="../assets/js/jquery.min.js">

  </script>
</head>
<body>

  <form action="" method="post" name="form">
    <label for="nbLigne">Nombre de ligne du triangle : </label>
    <input type="text" name="nbLigne" value="0"/>
    <br/>
    <label for="typrTraingle">Type du triangle :      
    </label>
    <select name="typeTriangle">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
<ul>
        <li>Triangle coté gauche, choisissez : 1</li>
        <li>Triangme coté droite, choisissez : 2</li>
        <li>Triangle isocéle, choisissez : 3</li>
      </ul>
    <input id="AfficherT" type="submit" value="Afficher triangle">
  </form>

  <?php

  require "ClassTriangle.php";
  if(isset($_POST['nbLigne']) && isset($_POST['typeTriangle']))
  {
    $T = new Triangle();
    $T->AfficherTriangle($_POST['nbLigne'],$_POST['typeTriangle']);
  }

  ?>
</body>
</html>
