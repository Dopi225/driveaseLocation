<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-black">

    <?php include_once "header.php" ?>
    <main style="background: linear-gradient(rgba(0, 1, 0, 0.5), rgba(0, 0, 0, 0.5)),  url('img/7.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity:0.75;" class="mt-5 mb-5">
        <div class="bs-example">
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active">Accessories</li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid mt-5 mb-5">
            <div class="row mt-5">
              
                    
                    <div class="col-sm-4 col-md-4 col-lg-4 mb-5 mt-5">
                        <div class="row">
                            <h5 class="h2"> <u>Adresse</u>: 10 boulevard de la debauche,<br>59100 Roubaix.</h5>
                            <div class="col-lg col-md-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2527.0292149150628!2d3.1692816!3d50.7008424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c328c2fb2ae62d%3A0xff0e4aa89156956f!2sSalle%20Alma!5e0!3m2!1sfr!2sfr!4v1705575299121!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8 mb-5 mt-5">
                        <h5 class="h2 text-center">Nous contacter :</h5>
                        <form action="#" method="post">
                            <div>
                                <label class="h3" for="nom">Votre nom :</label>
                                <input type="text" class="form-control" placeholder="Votre Nom">
                            </div>
                            <div>
                                <label class="h3" for="prenom">Votre prénom :</label>
                                <input type="text" class="form-control" placeholder="Votre Prénom">
                            </div>
                            <div>
                                <label class="h3" for="email">Votre email :</label>
                                <input type="text" class="form-control" placeholder="Votre Email">
                            </div>
                            <div>
                                <label class="h3" for="message">Votre message :</label>
                                <textarea name="message" class="form-control" id="" cols="30" rows="8" placeholder="Votre message"></textarea>
                                
                            </div>
                            <button type="submit" class="btn btn-primary my-1">Envoyer</button>
                        </form>
                    </div>
    
                

            </div>
        </div>
            
    </main>
    

    <?php include_once "footer.php" ?>
</body>
</html>