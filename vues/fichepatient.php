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

        <div class="row">
            <div class="col">
                <input type="text" placeholder="Search..." class="search-field">
                <h5> Dates de rendez-vous </h5>
                <div> dates enregistrées </div>
                <input type="date" class="form-control mb-3"> 
                <h5> Type de prise en charge : </h5>
                <select class="form-select form-control mb-3" aria-label="Default select example">
                    <option selected>Sélectionnez...</option>
                    <option value="1">Consultation</option>
                    <option value="2">Suivi</option>
                </select>
                <div class="price"> 
                    <h5> Prix : </h5>  
                    <input type="text" placeholder="Eur">
                    <h5> Réglé ? </h5> <input type="checkbox">
                    <h5> Oui </h5>
                </div>
                <div class="left_button">
                    <button> Ajouter/Modifier </button>
                    <button> Supprimer </button>
                </div>
            </div>

            <div class="col">
                <h5> Fiche patient </h5>
                <form action=""></form>
                <input type="text" placeholder="Nom" value=""><br>
                <input type="text" placeholder="Prénom" value=""><br>
                <input type="text" placeholder="Âge" value=""><br>
                <input type="text" placeholder="Nom et prénom du tuteur" value=""><br>
                <input type="text" placeholder="Adresse" value=""><br>
                <input type="text" placeholder="Code postal" value=""><br>
                <input type="text" placeholder="Ville" value=""><br>
                <input type="text" placeholder="Téléphone" value=""><br>
                <input type="text" placeholder="Mail" value=""><br>
                <div class="middle_button">
                    <button> Modifier </button>
                    <button> Supprimer </button>
                </div>
            </div>

            <div class="col">
                <div class="photo">
            
                </div>
                <h5> Prénom et Nom patient </h5>
                <h5> Age </h5>
            </div>
        </div>
    </div>
       
</body>
</html>