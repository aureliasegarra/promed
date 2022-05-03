<!DOCTYPE html>
<html lang="en">
<body>
<div class="main-wrapper">
            <section class="connexion">
                <div class="container mt-5">
                    <div class="row mt-3">
                        <div class="col d-flex  align-items-center flex-column">
                            <img src="../static/images/patient.png" class="photo_fiche_patient" alt="avatar patient">
                            <label class="form-label mt-4"><b><?=$_SESSION['nomPrenom']?></b></label>
                        </div>
                        <div class="col">
                            <h4 class="mb-5">Votre praticien : <b class="ml-3"><?=$nomPraticien?></b>
                             <!-- - <span>Podologue</span></h4> -->
                            <h4 class="mb-4">Vos prises en charges à venir :</h4>
                            <div class="mb-5">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Date rdv</th>
                                            <th scope="col">Heures rdv</th>
                                            <th scope="col">Prise en charge</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?=$tableRdv;?>                                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- <h4 class="mb-4 type-pec">Type de prise en charge : <span><em>Consultation</em></span></h4> -->
                            <button type="button" class="btn btn-outline-primary my-5">Annuler ce rendez-vous</button>
                        </div>
                    </div>
                </div>
            </section>
            </body>
</html>        
         