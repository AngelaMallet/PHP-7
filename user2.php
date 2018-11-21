<?php
     if (isset($_POST['lastname']) && isset($_POST['firstname'])){
      echo 'Bonjour ' . htmlspecialchars($_POST['lastname']) . ' ' . htmlspecialchars($_POST['firstname']); 
  }
 else {
      echo 'Veuillez entrer vos informations';
  }
    ?> 