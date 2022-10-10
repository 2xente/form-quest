<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form  action="thanks.php"  method="POST">
    
        <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name">
        </div>

        <div>
        <label  for="prenom">prenom :</label>
        <input  type="text"  id="prenom"  name="user_prenom">
        </div>
    
        <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
        </div>

        <div>
        <label  for="telephone">Numéro de téléphone :</label>
        <input  type="tel"  id="telephone"  name="user_phone">
        <small>format : xx-xx-xx-xx-xx</small>
    </div>

    <div>
    <label for="subject-select">Le sujet de ton contact</label>

        <select name="subject" id="subject-select">
        <option>Pourquoi?..</option>
        <option>Info</option>
        <option>Rendez-vous</option>
        <option>Prise de contact</option>
        </select>
</div>
        <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
        </div>
    
        <div  class="button">
    
          <button  type="submit">Envoyer votre message</button>
    
        </div>
    <?php
    $_POST();
    ?>
      </form>
</body>
</html>