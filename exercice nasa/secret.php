<!DOCTYPE html>
<html>
<head>
<title>Codes NASA</title>
</head>
<body>

<h1> NASA.com</h1>
<h2>Vos codes secrets</h2>

<?php 
if ($_POST['mdp'] == 'kangourou')
{
	echo '<p>Voici Vos MPD</p>';
}
else 
{
	echo '<p>Erreur <br> Veuillez retaper votre mot de passe</p>' ;

}
 ?>

<form action="index.php" method="post">
	<input type="submit" value="Valider">
</form>


</body>
</html>