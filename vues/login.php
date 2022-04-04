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


function connexionPDO():PDO {
    $login = "root";
    $mdp = "";
    $bd = "promed";
    $serveur = "localhost";

    try {
        $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;

    } catch (PDOException $e) {
        print "Erreur de connexion PDO ";
        die();
    }
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog de test
    header('Content-Type:text/plain');

    echo "connexionPDO() : \n";
    print_r(connexionPDO());
}

public function create($objet)
{
    $sql = "INSERT INTO $this->table (nom,prenom,activite,adr,email,numeroadeli,) VALUES (:nom, :prenom, :activite, :adr, :email, :numeroadeli)";
    $stmt = Connexion::getInstance()->prepare($sql);
    $nom = $objet->getnom();
    $prenom = $objet->getprenom();
    $activite = $objet->getactivite();
    $adr = $objet->getadr();
    $email = $objet->getemail();
    $numeroadeli = $objet->getnumeroadeli();
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':activite', $activite);
    $stmt->bindParam(':adr', $adr);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':numeroadeli', $numeroadeli);
    $stmt->execute();
    $objet->setNumPil(parent::getLastKey());
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