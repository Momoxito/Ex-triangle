<?php

class Triangle
{

  public function AfficherTriangle($NbLigneIn,$TypeTriangleIn)
  {
    /*var_dump($_POST);
    die();
    */
    switch($TypeTriangleIn) {
      case 1: $this->AfficherTriangleGauche($NbLigneIn);break;
      case 2: $this->AfficherTriangleDroite($NbLigneIn);break;
      case 3: $this->AfficherTriangleIsocele($NbLigneIn);break;
    }
  }

  function AfficherTriangleGauche($NbLigne){
    for ($i = 0; $i <= $NbLigne; $i++)
    {
      for ($j = 0; $j < $i; $j++)
      {
        echo '*';
      }
      echo '<br/>';
    }
  }

  function AfficherTriangleDroite($NbLigne){
    for ($i = 0; $i <= $NbLigne; $i++)
    {
      for ($j = 0; $j <= $NbLigne - $i - 1; $j++)
      {
        echo ' ';
      }
      for ($j = 1; $j < $i + 1; $j++)
      {
        echo '*';
      }
      echo '<br/>';
    }
  }

  function AfficherTriangleIsocele($NbLigne){
    echo '<br/>';
    for ($i = 0; $i < $NbLigne; $i++)
    {
      for ($j = 0; $j < $NbLigne - $i - 1; $j++)
      {
        echo ' ';
      }
      for ($j = 0; $j <= 2 * $i; $j++)
      {
        echo '*';
      }
      echo '<br/>';
    }

  }

}

?>
