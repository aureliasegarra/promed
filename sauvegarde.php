<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">

    <title>ProMed</title>
</head>
<body>
    <div class="wrapper">
        <nav>
            <div>
                <img src="../images/promed_logo.jpg" alt="logo promed">
                           
                
            </div>
            <div class="button-wrapper">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                    
                        <button type="button" class="btn btn-light border border-primary mr-5">
                            <a class="nav-link active" href="#">+Fiche patient</a>
                             
                        </button>
                        
                       
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-light border border-primary mr-5">
                            <a class="nav-link active" href="#">consulter</a>
                            
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-light border border-primary mr-5">
                            <a class="nav-link active" href="#">parametre</a>
                        </button>
                        <img src="../images/logout.png" alt="img-rounded pull-right" width="50" >
                    </li>
                </ul>
                
            </div>
          
        </nav>
        <div class="trait"></div>
        <div class="form-wrapper">
            
        </div>
        <p>
                <span><h3>Bienvenue</h3><h5 align="right"><?php setlocale(LC_TIME, 'fr_FR.utf8','fra');
                                        date_default_timezone_set('Europe/Paris');
                                        echo (strftime('%A %d %B %Y '));?></h5>
                                        <h5 align="right"><?php echo (strftime('%H:%M'));?></h5></h3></span>

<table>
  <tr>
    <td class='left'>Bienvenue</td>
    <td class='right'><?php setlocale(LC_TIME, 'fr_FR.utf8','fra');
                                        date_default_timezone_set('Europe/Paris');
                                        echo (strftime('%A %d %B %Y '));?></h5>
                                        <h5 align="right"><?php echo (strftime('%H:%M'));?></td>
  </tr>
</table>
                                    
				Mon activité:</P>
				
				
				<div align="left">
    <h1></h1>
    <form method="post" action="">
        <input type="rdv" placeholder="rdv" name="rdv"><br></br>
		<input type="" placeholder="" name=""><br></br>
		<input type="" placeholder="" name=""><br></br>
		<input type="" placeholder="" name=""><br></br>
		<input type="" placeholder="" name=""><br></br>
		<input type="" placeholder="" name=""><br></br>
		<input type="" placeholder="" name=""><br></br>
                               
	        
    </div>  
        
    </div>
    
	
	
       
</body>
</html>