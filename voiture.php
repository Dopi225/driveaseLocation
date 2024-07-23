<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-black" >

    <?php include_once "header.php" ?>

    <main style="background: linear-gradient(rgba(0, 1, 0, 0.5), rgba(0, 0, 0, 0.5)),  url('img/4.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity:0.75;">
    <div class="bs-example">
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><a href="#">voiture</a></li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    <div class="row">
                        <div class=" col-sm col-md ">
                            <div class="container mt-5">
                                <h1 class="mb-5 mt-5">2022 Aston Martin v8</h1>
                                <p class="mb-5">
                                On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, Allez Voire des phrases embarassantes).
                                </p>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div id="carousel" class="carousel slide mt-5 mb-5" data-bs-ride="carousel">

                        <!-- <div class="carousel-indicators w-50">
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div> -->
                        <div class="carousel-inner w-70">
                            <div class="carousel-item active">
                            <img src="img/8.jpg" style="opacity:0.75;" class="d-block" alt="...">
                            <div class="carousel-caption d-none d-md-block ">
                                <h5>Limousine Aston Martin</h5>
                                
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/9.jpg" style="opacity:0.75;" class="d-block" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>2022 Aston Martin v8</h5>
                                
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="img/11.jpg" style="opacity:0.75;" class="d-block" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>2023 Aston Martin v8</h5>
                                
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="mt-5">
                        <h3 class="text-center mb-5">Réservation</h3>
                        <form>
                            <div class="row">
                                <div class="col-6">
                                <label for="inputEmail4">Nom</label>
                                <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-6">
                                    <label for="inputEmail4">Prénom</label>
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                               
                                    <div class="col-6">
                                <label for="inputEmail4">Date De Naissance</label>
                                <input type="date" class="form-control" >
                                </div>
                                <div class="col-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                    
                                </div>
                                <div class="col-6">
                                <label for="inputEmail4">Date Début</label>
                                <input type="date" class="form-control" >
                                </div>
                                <div class="col-6">
                                    <label for="inputEmail4">Date fin</label>
                                    <input type="date" class="form-control" >
                                    
                                </div>

                            </div>
                            <div class="row">
                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Couleur</label>
                                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                    <option selected>Choisissez...</option>
                                    <option value="1">Noir</option>
                                    <option value="2">Bleu Marine</option>
                                    <option value="3">Jaune</option>
                                </select>

                                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Remember my preference</label>
                                </div>

                                <button type="submit" class="btn btn-primary my-1">Reservez</button>
                            </div>
                                
                        
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    

    <?php include_once "footer.php" ?>
</body>
</html>