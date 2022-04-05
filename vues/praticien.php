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
                          
            <div class="button-wrapper">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                    
                        <button type="button" class="btn btn-light border border-primary mr-4">
                            <a class="nav-link active" href="#">+Fiche patient</a>
                             
                        </button>                       
                       
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-light border border-primary mr-4">
                            <a class="nav-link active" href="#">consulter</a>
                            
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-light border border-primary mr-4">
                            <a class="nav-link active" href="#">parametre</a>
                        </button>
                       
                        <li class="nav-item">  

                        <p><img src="../images/logout.png" alt="" class="img-rounded pull-right" width="85" ></p>   
                        
                     
                        </button>

                    </li>
                </ul>
                
            </div>
          
        </nav>
        <div class="trait"></div>
        <div class="form-wrapper">    
            
        </div>
        <div class="container">
        <div class="d-flex justify-content-between">
            <span><h3>Bienvenue:</h3></span>
            <div>
  <span> </span>
</div>
            <span><h5><?php setlocale(LC_TIME, 'fr_FR.utf8','fra');
                                        date_default_timezone_set('Europe/Paris');
                                        echo (strftime('%A %d %B %Y '));?></h5>

                                        <?php echo (strftime('%H:%M'));?></span>
           
        </div>
       <div class="d-flex justify-content-between"></div>
            <span><h5>Mon activité:</h5></span>                    
  
     
      <table class="table">
        <thead>
          <tr>
            <th><font color="ff0000">RDV</font></th>
            <th><font color="ff0000">Patients</font></th>
            <th><font color="ff0000">Prise en charge</font></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>

          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>

          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>

          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>

          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>

          <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>


        </tbody>
      </table>
    </div>   
       
</body>
</html>