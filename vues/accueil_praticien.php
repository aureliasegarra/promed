<?php


?>
        <div class="main-wrapper">
            <section class="connexion">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-md-6 col-lg-6 col-xs-12-col-sm-10 pt-5 pb-5">
                            <h2><?php echo "Bienvenue"." ".$_SESSION["nomPrenom"]; ?></h2>                        
                            <h4>Mon activité : <span> <?=$activite?></span></h4>
                        </div>
                    </div>
                </div>
            </section>
            <section class="table-wrapper">
                <div class="container">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">RDV</th>
                            <th scope="col">Patients</th>
                            <th scope="col">Prise en charge</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?=$tableRdv;?>
                        </tbody>
                    </table>
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

