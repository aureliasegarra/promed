
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
                <div class="container">
                    <div class="row">
                        <div class="col mb-5">
                                <div class="mb-3">
                                    <label class="form-label">NOM</label>
                                    <input type="text" class="form-control"   placeholder="Entrez votre nom">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">PRENOM</label>
                                    <input type="text" class="form-control"   placeholder="Entrez votre prénom">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">ACTIVITE</label>
                                    <input type="text" class="form-control"   placeholder="Entrez votre activité">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">ADRESSE</label>
                                    <input type="text" class="form-control"  placeholder="Entrez votre adresse">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">EMAIL</label>
                                    <input type="email" class="form-control"  placeholder="Votre email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">N° RPPS</label>
                                    <input type="text" class="form-control"  placeholder="Renseignez votre n° RPPS">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">MOT DE PASSE</label>
                                    <input type="password" class="form-control"  placeholder="Votre mot de passe">
                                </div>
                            </div>
                        <div class="col">
                            <label class="form-label">PHOTO DU PATIENT</label>
                            <div class="mb-3">
                                <img src="../static/images/patient.png" class="photo_patient" alt="avatar patient">
                            </div>
                            <button type="button" class="btn btn-secondary mb-5">Ajouter</button>

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
                                <input type="text" placeholder="Eur" class="mr-2">
                                <label class="form-label ml-3 mr-2 mt-1">REGLE</label>  <input type="checkbox" class="mr-2 mt-2">
                            </div>
                           
                        </div>
                       
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="button" class="btn btn-primary btn-lg mb-5 ">Enregistrer</button>
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