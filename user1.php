<?php
     if (isset($_GET['lastname']) && isset($_GET['firstname'])){
      echo 'Bonjour ' . htmlspecialchars($_GET['lastname']) . ' ' . htmlspecialchars($_GET['firstname']); 
  }
 else {
      echo 'Veuillez entrer vos informations';
  }
    ?> 