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
                        <li><i class="fa-solid fa-right-from-bracket"></i></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="main-wrapper">
            <section class="connexion">
                <div class="container mt-5">
                    <div class="row mt-3">
                        <div class="col d-flex  align-items-center flex-column">
                            <img src="../static/images/patient.png" class="photo_fiche_patient" alt="avatar patient">
                            <label class="form-label mt-4"><b> Nom Prenom</b></label>
                        </div>
                        <div class="col">
                            <h4 class="mb-5">Votre praticien : <b class="ml-3">Sylvain Perrin</b>  - <span>Podologue</span></h4>
                            <h4 class="mb-4">Vos prises en charges à venir :</h4>
                            <div class="mb-5">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Date rdv</th>
                                            <th scope="col">Heures rdv</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>11/10/2022</td>
                                            <td>10h30</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>03/03/2022</td>
                                            <td>14h00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h4 class="mb-4 type-pec">Type de prise en charge : <span><em>Consultation</em></span></h4>
                            <button type="button" class="btn btn-outline-primary my-5">Annuler ce rendez-vous</button>
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