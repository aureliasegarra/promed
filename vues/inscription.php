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
        <form action="./?action=inscription&save" method="POST" class="form-wrapper">
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" aria-describedby="emailHelp" placeholder="Entrez votre nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Prénom</label>
                <input type="text" name="prenom" class="form-control" aria-describedby="emailHelp" placeholder="Entrez votre prénom">
            </div>
            <div class="mb-3">
                <label class="form-label">Activité</label>
                <input type="text" name="activite" class="form-control" aria-describedby="emailHelp" placeholder="Entrez votre activité">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Votre email">
            </div>
            <div class="mb-3">
                <label class="form-label">N° RPPS</label>
                <input type="text" name="rpps" class="form-control" aria-describedby="emailHelp" placeholder="Renseignez votre n° RPPS">
            </div>
            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input type="password" name="mot_de_passe" class="form-control" placeholder="Votre mot de passe">
            </div>

            <button type="submit" name="register_btn" class="btn btn-primary">S'enregistrer</button>
        </form>
    </section>
