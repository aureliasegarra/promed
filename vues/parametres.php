<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css'>
    <link rel="stylesheet" href="../static/css/index.css" />
    <link rel="stylesheet" href="../static/css/responsive.css">
    </head>
    <body>

        

        <div class="container header">
            <nav class="navbar navbar-expand-lg border-0">
                <button class="navbar-toggler header-btn-collapse-nav tetx-white" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toogle Navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <a href="index.html" class="logo"> <img src="../static/images/logo.png" alt="logo"> </a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
                    <ul class="header-bottom-menu-list navbar-nav">
                        <li><a href="">Ajouter fiche patient</a></li>
                        <li><a href="">Consulter</a></li>
                        <li><a href="">Paramètres</a></li>
                        <li><i class="fa-solid fa-right-from-bracket"></i></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="main-wrapper">
            <section class="connexion">
                <div class="container">
                    <div class="row mt-3 d-flex justify-content-center">
                        <div class="d-flex justify-content-center mt-5 mb-5">
                            <h3>Mon profil </h3>
                        </div> 
                    </div>
                </div>
            </section>
            <section class="patient-card">
                <div class="container">
                    <div class="row">
                        <div class="col mb-5">
                                <div class="mb-3">
                                    <label class="form-label">NOM :</label>
                                    <input type="text" class="form-control"   placeholder="Entrez votre nom">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">PRENOM :</label>
                                    <input type="text" class="form-control"   placeholder="Entrez votre prénom">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">ACTIVITE :</label>
                                    <input type="text" class="form-control"   placeholder="Entrez votre activité">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">ADRESSE :</label>
                                    <input type="text" class="form-control"  placeholder="Entrez votre adresse">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">CODE POSTAL :</label>
                                    <input type="text" class="form-control"   placeholder="Entrez votre code postal">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">VILLE :</label>
                                    <input type="email" class="form-control"  placeholder="Entrez votre ville">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">EMAIL :</label>
                                    <input type="text" class="form-control"  placeholder="Entrez votre Email">
                                </div>
                                <div class="mb-5">
                                    <label class="form-label">N° RPPS :</label>
                                    <input type="password" class="form-control"  placeholder="Entrez votre N° Adélie">
                                </div>

                                <div class="mb-5">
                                    <input type="text" class="form-control mb-2"   placeholder="Ancien mot de passe">
                                    <input type="text" class="form-control"   placeholder="Nouveau mot de passe">
                                </div>

                                <div class="d-flex justify-content-center mt-3">
                                    <button type="button" class="btn btn-primary btn-lg mb-5">Modifier</button>
                                </div>  
                        </div>

<!-- début modif -->        <div class="col">
                                <label class="form-label">MES PRISES EN CHARGES</label>

                                <select class="form-select form-control mb-5" aria-label="Default select example">
                                    <option selected>Choisir...</option>
                                    <option selected>Consultation</option>
                                    <option selected>Suivi</option>
                                </select>

                                <div class="row mb-3 ml-1">
                                    <input type="text" class="form-control w-50 mr-3"   placeholder="Durée en minutes"> <label class="form-label">Minutes</label>
                                </div>

                                <div class="row mb-3 ml-1">
                                    <input type="text" class="form-control w-50 mr-3"   placeholder="Prix de la séance"> <label class="form-label">Euro</label>
                                </div>
                                
                                <div class="d-flex justify-content-center mt-5">
                                    <button type="button" class="btn btn-secondary">Ajouter / Modifier</button>
                                </div>
                            <div>

                       
                        </div>




                        </div>
                       
                    </div>
                    
                </div>
                
            </section>  
            
            <section class="py-5 services">
                <div class="container my-3">
                    <p class="text-left text-white"></p>
                    <h3 class="text-white"></h3>
                    <div class="row my-3">
                    </div>
                </div>
            </section>
            <section class="footer-grid">
                <div class="container-fluid">
                    
                </div>
            </section>
            <section class="footer pt-5" id="footer">
                <div class="container">
                    <div class="row copyright py-2">
                        <div class="col-xs-12 col-md-12 text-whit text-center">
                            @2021 Promed App - Made in Breizh ♥️
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js'></script>
    </body>
</html>