<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>formulaires php</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_lastname">
    </div>
    <div>
      <label  for="Prenom">Prenom :</label>
      <input  type="text"  id="Prenom"  name="user_firstname">
    </div>
    <div>
      <label  for="tel">Numero de tel :</label>
      <input  type="tel"  id="phone"  name="phone">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
    <label for="sujets">choissisez un sujet:</label>
<select id="sujets" name="sujets">
  <option value="problemestechnique">Problemes technique</option>
  <option value="commandes">Commandes</option>
  <option value="infos">demande d'informations</option>
  <option value="recrutement">recrutement</option>
</select>
</div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit" >Envoyer votre message</button>
    </div>
    
  </form>
  <?php
  var_dump($_POST);
?>
  </body>
</html>

