<!-- <!DOCTYPE html>
<html lang="en">

<body> -->

<div class="main-wrapper">
    <section class="connexion">
        <div class="container mt-5">
            <div class="row mt-3">
                <div class="col d-flex  align-items-center flex-column" id="avatar">
                    <img src="./static/images/patient.png" class="photo_fiche_patient" alt="avatar patient">
                    <label class="form-label mt-4"><b><?= $patient->nom . " " . $patient->prenom ?></b></label>
                </div>
                <div class="col" id="pec">
                    <!-- <h4 class="mb-5">Votre praticien : <b class="ml-3">                          -->
                    </b>
                    <h4 class="mb-4">Vos prises en charges à venir :</h4>
                    <div class="mb-5">
                        <table class="table table-hover" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Praticien</th>
                                    <th scope="col">Activite</th>
                                    <th scope="col">Date rdv</th>
                                    <th scope="col">Heures rdv</th>
                                    <th scope="col">Prise en charge</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?= $table; ?>
                            </tbody>
                        </table>

                        <script>
                            function selectedRow() {

                                var index,
                                    table = document.getElementById("table");

                                for (var i = 1; i < table.rows.length; i++) {
                                    table.rows[i].onclick = function() {
                                        // remove the background from the previous selected row
                                        if (typeof index !== "undefined") {
                                            table.rows[index].classList.toggle("selected");
                                        }
                                        console.log(typeof index);
                                        // get the selected row index
                                        index = this.rowIndex;
                                        // add class selected to the row
                                        this.classList.toggle("selected");

                                    };
                                }
                            }
                            selectedRow();
                        </script>


                    </div>
                    <!-- <h4 class="mb-4 type-pec">Type de prise en charge : <span><em>Consultation</em></span></h4> -->
                    <button id="buttonCancel" type="button" class="btn btn-outline-primary my-5">Annuler ce rendez-vous</button>

                    <!-- <script>

                        function addTextCancel() {

                            line= document.querySelector('.selected')
                            
                            line.append('Annulé')

                        }
                        button = document.getElementById("buttonCancel");

                        button.onclick = function() {
                            addTextCancel()
                        };

                    </script> -->

                </div>
            </div>
        </div>
    </section>


    <!-- </body>

</html> -->