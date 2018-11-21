<?php
     if (isset($_POST['lastname']) && isset($_POST['firstname'])){
      echo 'Bonjour ' . $_POST['lastname'] . ' ' . $_POST['firstname']; 
  }
 else {
      echo 'Veuillez entrer vos informations';
  }
    ?> 