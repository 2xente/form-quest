<?php 

$errors = [];

if(!isset($_POST['user_prenom']) || trim($_POST['user_prenom']) === '') {
        $errors[]="Le prénom est obligatoire";
        }
if(!isset($_POST['user_name']) || trim($_POST['user_name']) === '') {
        $errors[]="Le nom est obligatoire";
                }
if(!isset($_POST['user_phone']) || trim($_POST['user_phone']) === '') {
        $errors[]="Un numéro de téléphone est obligatoire";
                        }
if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
        $errors[]="email non valide";
}
if(!isset($_POST['user_message']) || trim($_POST['user_message']) === '') {
    $errors[]="Il manque le message!";
}
if($_POST["subject"]  === "Pourquoi?.."){
            $errors[]="Choisis un sujet";
                }
        if (!empty($errors)){
            foreach($errors as $error){
                echo $error."<br>";
            }
        }
        else {
        echo   "Merci".$_POST['user_prenom']." ".$_POST['user_name']."de nous avoir contacté à propos de ".$_POST['subject'].
        
        "Un de nos conseillers vous contactera soit à l’adresse ".$_POST['user_email']." ou par téléphone au ".$_POST['user_phone']."  dans les plus brefs délais pour traiter votre demande : ";
        
        echo $_POST['user_message'];
        }
    ?>