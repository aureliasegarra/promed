<!-- <!DOCTYPE html>
<html lang="fr">
    <body> -->
    <div class="main-wrapper">
            <section class="connexion">
                <div class="container">
                    <div class="row mt-3 d-flex justify-content-center">
                        <div class="d-flex justify-content-center mt-5 mb-5">
                            <h2>Nouvelle Fiche Patient</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section class="patient-card">
            <form class="form-wrapper" method="post" action="./?action=addPatient&save">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <label class="form-label">PHOTO DU PATIENT</label>
                            <div class="mb-3">
                                <img src="../static/images/patient.png" class="photo_patient" alt="avatar patient">
                            </div>
                            <button type="button" class="btn btn-secondary mb-5">Ajouter</button>
                            <!-- <div>
                                <label class="form-label">RENDEZ VOUS</label>
                                <input type="date" class="form-control mb-5">
                            </div>
                            <label class="form-label">TYPE DE PRISE EN CHARGE</label>
                            <select class="form-select form-control mb-5" aria-label="Default select example">
                                <option selected>Sélectionnez...</option>
                                <option value="1">Consultation</option>
                                <option value="2">Suivi</option>
                            </select>
                            <div class="row mb-3">
                                <label class="form-label ml-3 mr-2 mt-1">PRIX :</label>
                                <input type="text" placeholder="Eur" class="mr-2">
                                <label class="form-label ml-3 mr-2 mt-1">REGLE</label> <input type="checkbox" class="mr-2 mt-2">
                            </div> -->
                        </div>
                        <div class="col-10">
                            <div class="mb-3">
                                <label class="form-label">NOM</label>
                                <input name="nom" type="text" class="form-control" placeholder="Entrez le nom du patient">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">PRENOM</label>
                                <input name="prenom" type="text" class="form-control" placeholder="Entrez le prénom du patient">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ACTIVITE</label>
                                <input name="activite" type="text" class="form-control" placeholder="Entrez l'activité du patient">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ADRESSE</label>
                                <input name="adresse" type="text" class="form-control" placeholder="Entrez l'adresse du patient">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">EMAIL</label>
                                <input name='email' type="email" class="form-control" placeholder="Entrez le mail du patient">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">TELEPHONE</label>
                                <input name='telephone' type="tel" class="form-control" placeholder="Entrez le numero de telephone du patient">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">N°SECURITE SOCIALE</label>
                                <input name="numSecu" type="text" class="form-control" placeholder="Renseignez le numero de securité sociale du patient">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">MUTUELLE</label>
                                <input name="mutuelle" type="text" class="form-control" placeholder="Renseignez la mutuelle du patient">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">CAISSE</label>
                                <input name="caisse" type="text" class="form-control" placeholder="Renseignez la caisse du patient">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">DATE DE NAISSANCE</label>
                                <input name='dateNaissance' type="date"" class="form-control" placeholder="Entrer la date de naissance du patient">
                            </div>              
                            <div class="mb-3">
                                <label class="form-label">TUTEUR</label>
                                <input name='nomTuteur' type="text" class="form-control" placeholder="Entrer le nom du tuteur du patient">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">GENRE</label>
                                <input name='sexe' type="texte" class="form-control" placeholder="Entrer le genre du patient">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">MOT DE PASSE</label>
                                <input name='password' type="password" class="form-control" placeholder="Entrer le mot de passe du patient">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary btn-lg mb-5 ">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </section>
    <!-- </body>
</html> -->