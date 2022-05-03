<?php
date_default_timezone_set('Europe/Paris');
?>
        <div class="main-wrapper">
            <section class="connexion">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-md-6 col-lg-6 col-xs-12-col-sm-10 pt-5 pb-5">
                            <h2><?php echo "Bienvenue"." ".$_SESSION["nomPrenom"]; ?></h2>                        
                            <h4>Mon activité : <span> <?=$activite?></span></h4>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xs-12-col-sm-10 pt-5 pb-5">
                            <h2><?php echo date('d/m/y'); ?></h2>                        
                            <h4><?php echo date('h:i');?></h4>
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
           
                      
  