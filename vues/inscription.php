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
                <a href="../index.html" class="logo"> <img src="../static/images/logo.png" alt=""> </a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
                    <ul class="header-bottom-menu-list navbar-nav">
                        <li><a href="../index.html">Accueil</a></li>
                        <li><a href="./acces_praticien.php">Praticiens</a></li>
                        <li><a href="./acces_patient.php">Patients</a></li>
                        <li><a href="./inscription.php">Inscription</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="main-wrapper">
            <section class="connexion">
                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-md-6 col-lg-6 col-xs-12-col-sm-10 pt-5 pb-5">
                                <h2>Inscription Praticien</h2>
                                <h4>Bienvenue ! Pour utiliser l'application merci de vous inscrire</h4>
                                
                            
                            </div>
                        </div>
                    </div>
            </section>
            <section class="container">
                <form class="form-wrapper">
                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre nom">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre prénom">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Activité</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre activité">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre adresse">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">N° RPPS</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Renseignez votre n° RPPS">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Votre mot de passe">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">S'enregistrer</button>
                </form>
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