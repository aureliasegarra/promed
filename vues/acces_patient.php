<!-- <!DOCTYPE html>
<html lang="en">

<body> -->
    <div class="main-wrapper">
        <section class="connexion">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-6 col-lg-6 col-xs-12-col-sm-10 pt-5 pb-5">
                        <h2>Connection Patient</h2>
                        <h4>Bienvenue, veuillez vous connecter</h4>

                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <form class="form-wrapper" method="post" action="./?action=accueilPatient">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input name="identifiant" type="email" class="form-control" id="identifiant" aria-describedby="emailHelp" placeholder="Votre email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mot de passe</label>
                    <input name="mot_de_passe_patient" type="password" class="form-control" id="mot_de_passe" placeholder="Votre mot de passe">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
<!-- </body>

</html> -->