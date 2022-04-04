<?php 
require_once('layout_praticien.php');
?>
<div class="container_fiche_patient">
    <h1 class="title_patient"> Nouvelle fiche patient </h1>

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

    <button class="button_send_fiche_patient"> Créer la fiche </button>
</div>

