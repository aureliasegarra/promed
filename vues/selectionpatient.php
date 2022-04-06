<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/css/styles.css">

    <title>ProMed</title>
</head>

<body>
    <div class="container">
        <nav>
            <div>
                <img src="../static/images/promed_logo.jpg" alt="logo promed">
            </div>

            <div class="button-wrapper">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <button type="button" class="btn btn-light border border-primary mr-5">
                            <a class="nav-link" href="#">+ Fiche patient</a>
                        </button>             
                    </li>

                    <li class="nav-item">
                        <button type="button" class="btn btn-light border border-primary mr-5">
                            <a class="nav-link" href="#">Consulter</a>
                        </button>
                    </li>

                    <li class="nav-item">
                        <button type="button" class="btn btn-light border border-primary mr-5">
                            <a class="nav-link" href="#">Paramètres</a>
                        </button>
                    </li>

                    <li>
                        <img src="../static/images/logout.png" alt="logo logout">
                    </li>
                </ul>
            </div>
        </nav>

        <div class="trait"></div>

        <div class="col">
            <h5> Mon profil </h5>
            <form action=""></form>
            <label for="fname"> Nom :</label><br>
            <input type="text" placeholder="Nom" value=""><br>
            <label for="fname"> Prénom :</label><br>
            <input type="text" placeholder="Prénom" value=""><br>
            <label for="fname"> Activité :</label><br>
            <input type="text" placeholder="Activité" value=""><br>
            <label for="fname"> Adresse :</label><br>
            <input type="text" placeholder="Adresse" value=""><br>
            <label for="fname"> CP :</label><br>
            <input type="text" placeholder="Code postal" value=""><br>
            <label for="fname"> Ville :</label><br>
            <input type="text" placeholder="Ville" value=""><br>
            <label for="fname"> E-mail :</label><br>
            <input type="text" placeholder="E-mail" value=""><br>
            <label for="fname">N° Adélie :</label><br>
            <input type="text" placeholder="Ancien mot de passe" value=""><br>
            <input type="text" placeholder="Nouveau mot de passe" value=""><br> <br>
            <div class="middle_button">
                <button> Modifier </button>
            </div>
        </div>

        <div class="col">
            <h5> Mes prises en charge </h5>
            <select class="form-select form-control mb-3" aria-label="Default select example">
                <option selected>Choisir...</option>
                <option value="1">Consultation</option>
                <option value="2">Suivi</option>
            </select>
            <input type="text" placeholder="Type de prise en charge" value=""><br> <br>
            <label for="minutes"> Minutes </label><br>
            <input type="text" placeholder="Durée en minutes" value=""><br> <br>
            <label for="euro"> Euro </label><br>
            <input type="text" placeholder="Prix de la séance" value=""><br> <br>
            <button> Ajouter / Modifier </button>
        </div>

    </div>
       
</body>
</html>