    <div class="main-wrapper">
        <section class="connexion">
            <div class="container">
                <div class="row mt-3 d-flex justify-content-center">
                    <div class="d-flex justify-content-center mt-5 mb-5">
                        <h2>Fiche Patient</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="patient-card">
            <div class="container">
                <div class="row ">
                    <div class="col mr-4">

                        <div class="container mb-5">
                            <div class="search w-60 d-flex justify-content-center align-items-center"> <i class="fa fa-search mr-2"></i> <input type="text" class="form-control" placeholder="search ..."> <button class="btn btn-primary">Chercher</button> </div>
                        </div>
                        <label class="form-label">DATES DE RENDEZ-VOUS</label>
                        <div class="mb-3">
                            ...
                        </div>

                        <div>
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
                            <input type="text" placeholder="Eur" class="form-input-euro mr-2">
                            <label class="form-label ml-3 mr-2 mt-1">REGLE</label> <input type="checkbox" class="mr-2 mt-2">
                        </div>

                    </div>
                    <div class="col mr-4 mb-5">
                        <div class="mb-3">
                            <label class="form-label">NOM</label>
                            <input type="text" class="form-control" placeholder="Données du patient en question">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">PRENOM</label>
                            <input type="text" class="form-control" placeholder="Données du patient en question">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ACTIVITE</label>
                            <input type="text" class="form-control" placeholder="Données du patient en question">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ADRESSE</label>
                            <input type="text" class="form-control" placeholder="Données du patient en question">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">EMAIL</label>
                            <input type="email" class="form-control" placeholder="Données du patient en question">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">N° RPPS</label>
                            <input type="text" class="form-control" placeholder="Données du patient en question">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">MOT DE PASSE</label>
                            <input type="password" class="form-control" placeholder="Données du patient en question">
                        </div>
                        <div class="row d-flex justify-content-around mt-5 mr-4">
                            <button type="button" class="btn btn-primary btn-lg mb-5 ">Modifier</button>
                            <button type="button" class="btn btn-primary btn-lg mb-5 ">Supprimer</button>
                        </div>
                    </div>
                    <div class="col">
                        <label class="form-label mb-4">PHOTO DU PATIENT</label>
                        <div>
                            <img src="../static/images/patient.png" class="photo_patient " alt="avatar patient">
                            <div class="mt-5">
                                <h3>Nom Prénom</h3>
                                <h4>xx ans</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
