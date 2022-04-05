<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>  

<body>   
    
    <div class="wrapper">
        <nav>                   
            <img src="../images/promed_logo.jpg" alt="" class="img-rounded pull-right" width="200" >     
                          
                      
        </nav>
        <div class="trait"></div>
        <div class="form-wrapper">    
            
        </div>
        <div class="container">
        <div class="d-flex justify-content-between">
            <span> <img src="../images/avatar.png" alt="" class="img-rounded pull-right" width="150" >   </span>
            <div>
  <span> </span>
</div>
            <span><h5><?php setlocale(LC_TIME, 'fr_FR.utf8','fra');
                                        date_default_timezone_set('Europe/Paris');
                                        echo (strftime('%A %d %B %Y '));?></h5>

                                        <?php echo (strftime('%H:%M'));?></span>
           
        </div>
       <div class="d-flex justify-content-between"></div>
            <span><h5>Nom</h5></span>                    
  
     
            <div class="row">
            <div class="col">
                
                <h5> </h5>
                
              <div> 

                </div>
            </div>

            <div class="col">
                <h5> Votre praticien</h5>
                <br></br>
                
                <div><h5>Vos prise en charge à venir </h5></div>
                <input type="date" class="form-control mb-3">
                <br></br> 
                <h5> Type de prise en charge : </h5>
               
                
                <input type="text" placeholder="Consultation" value=""><br>
                <div class="middle_button">
                   <div class="left_button">
                    
                </div>
                </div>
            </div>

            <div class="col">
                <div class="photo">

                </div>
                <h5> Nom </h5>
                <h5> Profession</h5>
            </div>
            
       
</body>
</html>