<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./static/css/styles.css">

    <title>ProMed</title>
</head>
<body>
    <div class="container">
        <nav>
            <div>
                <img src="./static/images/promed_logo.jpg" alt="logo promed">
            </div>
            <div class="button-wrapper">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                    
                        <button type="button" class="btn btn-light border border-primary mr-5">
                            <a class="nav-link" href="#">Praticien</a>
                        </button>
                       
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-light border border-primary mr-5">
                            <a class="nav-link" href="#">Patient</a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-light border border-primary mr-5">
                            <a class="nav-link" href="#">Inscription</a>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="trait"></div>
        <div class="form-wrapper">
            <form class="form-container"> 
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">
                </div>
                <button type="submit" class="btn-lg btn-primary mt-3">Valider</button>
            </form>
        </div>
            
       
    </div>
    
       
</body>
</html>