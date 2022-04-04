<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">

    <title>ProMed</title>
</head>
<body>
    <div class="wrapper">
        <nav>
            <div>
                <img src="./images/promed_logo.jpg" alt="logo promed">
            </div>
            <div class="button-wrapper">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                    
                        <button type="button" class="btn btn-light border border-primary mr-5">
                            <a class="nav-link active" href="#">Praticien</a>
                        </button>
                       
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-light border border-primary mr-5">
                            <a class="nav-link active" href="#">Patient</a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-light border border-primary mr-5">
                            <a class="nav-link active" href="#">Inscription</a>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="trait"></div>
        <div class="form-wrapper">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
       
</body>
</html>