<?php 
   var_dump($_POST);

echo   "Merci".$_POST['user_prenom']." ".$_POST['user_nom']."de nous avoir contacté à propos de ".$_POST['subject'].

"Un de nos conseillers vous contactera soit à l’adresse ".$_POST['user_email']." ou par téléphone au ".$_POST['user_phone']."  dans les plus brefs délais pour traiter votre demande : ";

echo $_POST['user_message'];
    ?>