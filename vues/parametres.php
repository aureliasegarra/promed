<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<body>
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
                            <input type="text" class="form-control" placeholder="Entrez votre nom">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">PRENOM :</label>
                            <input type="text" class="form-control" placeholder="Entrez votre prénom">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ACTIVITE :</label>
                            <input type="text" class="form-control" placeholder="Entrez votre activité">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ADRESSE :</label>
                            <input type="text" class="form-control" placeholder="Entrez votre adresse">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">CODE POSTAL :</label>
                            <input type="text" class="form-control" placeholder="Entrez votre code postal">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">VILLE :</label>
                            <input type="email" class="form-control" placeholder="Entrez votre ville">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">EMAIL :</label>
                            <input type="mail" class="form-control" placeholder="Entrez votre Email">
                        </div>
                        <div class="mb-5">
                            <label class="form-label">N° RPPS :</label>
                            <input type="password" class="form-control" placeholder="Entrez votre N° Adélie">
                        </div>
                        <div class="mb-5">
                            <input type="password" class="form-control mb-2" placeholder="Ancien mot de passe">
                            <input type="password" class="form-control" placeholder="Nouveau mot de passe">
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button type="button" class="btn btn-primary btn-lg mb-5">Modifier</button>
                        </div>
                    </div>
                    <!-- début modif -->
                    <div class="col">
                        <label class="form-label">MES PRISES EN CHARGES</label>
                        <select class="form-select form-control mb-5" aria-label="Default select example">
                            <option selected>Choisir...</option>
                            <option selected>Consultation</option>
                            <option selected>Suivi</option>
                        </select>
                        <div class="row mb-3 ml-1">
                            <input type="text" class="form-control w-50 mr-3" placeholder="Durée en minutes"> <label class="form-label">Minutes</label>
                        </div>
                        <div class="row mb-3 ml-1">
                            <input type="text" class="form-control w-50 mr-3" placeholder="Prix de la séance"> <label class="form-label">Euro</label>
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
</body>

</html>