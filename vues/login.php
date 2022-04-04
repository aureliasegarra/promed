<?php

if(isset($_POST['sub'])){
    if(isset($_POST['password'])){
        if(!empty($_POST['password'])){
            $password = htmlspecialchars($_POST['password']);

            if($password == 'margo'){
                header('location:index.php');

        }else{
            $error = "Mot de passe invalide";
        }
        
        }else{
            $error = "Veuillez entrer le mot de passe";

        }

    }

}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
</head>

<body>
<div align="center">
    <h1>Nouveau praticien</h1>
    <form method="post" action="">
        <input type="name" placeholder="Nom" name="name"><br></br>
		<input type="surname" placeholder="Prénom" name="surname"><br></br>
		<input type="activity" placeholder="Activité" name="activity"><br></br>
		<input type="adress" placeholder="Adresse" name="adress"><br></br>
		<input type="mail" placeholder="email" name="mail"><br></br>
		<input type="number" placeholder="N°Adelie" name="number"><br></br>
		<input type="password" placeholder="Mot de passe" name="password"><br></br>

        <input type="submit" name="sub" value="s'enregistrer">
</form>

<p style="color: red;"><?php if(isset($error)){ echo $error;}?></p>
</body>
</html>