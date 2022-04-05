<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/css/styles.css">

    <title>Nouvelle Fiche Patient</title>
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
        
        <div class="container_fiche_patient">
            <h1 class="title_patient mt-5"> Nouvelle fiche patient </h1>
    
            <div class="patient_wrapper">
                <div class="left-side">
                    <h5> Photo du patient: </h5>
                    <div class="photo_patient">  </div>
                    <button class="add_photo_button"> Ajouter </button>  
                    <h5> Premier rendez-vous</h5>
                    <input type="date" 
                    class="form-control mb-3">
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
                </div>
    
                <div class="right-side">
                    <input type="text" placeholder="Nom">
                    <input type="text" placeholder="Prénom">
                    <input type="text" placeholder="Age">
                    <input type="text" placeholder="Nom et prénom du tuteur">
                    <input type="text" placeholder="Adresse">
                    <input type="text" placeholder="Code postal">
                    <input type="text" placeholder="Ville">
                    <input type="text" placeholder="Téléphone">
                    <input type="text" placeholder="Mail">
                </div>
            </div>
            <div class="mx-auto">
                <button type="button" class="btn btn-primary btn-lg mb-5 ">Créer la fiche</button>
            </div>
        </div>
    </div>  
 
</body>
</html>