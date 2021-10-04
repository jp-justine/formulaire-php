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
      <input  type="text"  id="nom"  name="lastName" required>
    </div>
    <div>
      <label  for="Prenom">Prenom :</label>
      <input  type="text"  id="Prenom"  name="firstName" required>
    </div>
    <div>
      <label  for="tel">Numero de tel :</label>
      <input  type="tel"  id="phone"  name="phone" required>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="email" required>
    </div>
    <div>
    <label for="subjets">choissisez un sujet:</label>
<select id="subjets" name="subjets" required>
  <option value="">choissisez une option</option>
  <option value="problemestechnique">Problemes technique</option>
  <option value="commandes">Commandes</option>
  <option value="infos">demande d'informations</option>
  <option value="recrutement">recrutement</option>
</select>
</div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="message" required></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
  </body>
</html>

