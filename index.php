<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
    <style>
        .parallax-effect {
    background-image: url("img/13.jpg");
    min-height: 250px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
 
    </style>   
</head>
<body class="bg-black" >
    <?php include_once 'header.php' ?>
    <main >
        
                <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="img/8.jpg" style="opacity:0.75;" class="d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block ">
                            <h5>Limousine Aston Martin</h5>
                            <p>Profitez de cette voiture à 1500$ pour 3 Jours</p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-danger" type="button">Voir Offre</button>
                            </div>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="img/9.jpg" style="opacity:0.75;" class="d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>2022 Aston Martin v8</h5>
                            <p>Profitez de cette voiture à 500$/Jour</p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-danger" type="button">Voir Offre</button>
                            </div>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="img/11.jpg" style="opacity:0.75;" class="d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>2023 Aston Martin v8</h5>
                            <p>Profitez de cette voiture à 800$/Jour.</p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-danger" type="button">Voir Offre</button>
                            </div>
                        </div>
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
           
        <div class="presentation bg ">
            <div class="container-fluid ">
                <div class="row">
                    <div class=" col-sm col-md ">
                        <div class="container">
                            <h1 class="mb-5">DriveEase Location</h1>
                            <p class="mb-5">
                            DriveEase Location est votre partenaire idéal pour toutes vos aventures sur la route. Que vous soyez en voyage d'affaires, en vacances en famille ou que vous ayez simplement besoin d'une solution de transport temporaire, DriveEase vous offre une expérience de location de voitures sans tracas. Notre flotte diversifiée comprend des véhicules de dernière génération, allant des économiques aux luxueux, pour répondre à tous vos besoins et préférences.
                            Chez DriveEase, nous nous engageons à offrir un service client exceptionnel. Notre équipe dévouée est là pour vous guider à chaque étape du processus de location, de la réservation à la restitution du véhicule. La transparence et la simplicité sont au cœur de notre approche, avec des tarifs compétitifs, des options de location flexibles et aucuns frais cachés.
                            La sécurité est notre priorité absolue. Tous nos véhicules sont régulièrement entretenus et soumis à des contrôles de sécurité rigoureux. De plus, nous offrons des assurances complètes pour vous assurer une tranquillité d'esprit totale pendant votre périple.
                            Choisissez DriveEase Location pour une expérience de location de voitures fluide, fiable et agréable. Transformez vos déplacements en une aventure sans soucis avec nos services de location de voitures de qualité supérieure.
                            </p>
                            <div class=" col-6 col-sm-6 col-md-6 mx-auto d-grid gap-2">
                                <a href="voiture.php" class="btn btn-dark">Allez Voir Nos Voitures</a>
                                <a href="listeActu.php" class="btn btn-dark" >Allez Voir Notre Actualité</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <section>
        <div class="container mt-5">
    <div class="row">
            <h1 class="mb-5">Nos Statistiques...</h1>
        <!-- Chart for Voiture Locations -->
        <div class="col-md-6 mt-5">
            <div class="card bg-transparent">
                <div class="card-body">
                    <h5 class="card-title text-light">Voiture Locations</h5>
                    <canvas id="chartLocations"></canvas>
                </div>
            </div>
        </div>

        <!-- Chart for Retours d'Experience Positives -->
        <div class="col-md-6 mt-5">
            <div class="card bg-transparent">
                <div class="card-body">
                    <h5 class="card-title text-light">Retours d'Experience Positives</h5>
                    <canvas id="chartPositiveFeedback"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    $(document).ready(() => {
        // Sample data for charts
        var locationsData = [85, 15];
        var positiveFeedbackData = [60, 40];

        // Chart for Voiture Locations
        var ctxLocations = document.getElementById('chartLocations').getContext('2d');
        var chartLocations = new Chart(ctxLocations, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: locationsData,
                    backgroundColor: ['red', 'white'],
                    hoverBackgroundColor: ['rgba(0, 255, 0, 1)', 'rgba(255, 255, 255, 0.5)'],
                    borderWidth: 0
                }],
                labels: ['Locations', 'Vacants']
            },
            options: {
                responsive: true,
                cutoutPercentage: 75,
                animation: {
                    animateScale: true
                }
            }
        });

        // Chart for Retours d'Experience Positives
        var ctxPositiveFeedback = document.getElementById('chartPositiveFeedback').getContext('2d');
        var chartPositiveFeedback = new Chart(ctxPositiveFeedback, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: positiveFeedbackData,
                    backgroundColor: ['red', 'white'],
                    hoverBackgroundColor: ['rgba(0, 255, 0, 1)', 'rgba(255, 255, 255, 0.5)'],
                    borderWidth: 0
                }],
                labels: ['Positives', 'Negatives']
            },
            options: {
                responsive: true,
                cutoutPercentage: 75,
                animation: {
                    animateScale: true
                }
            }
        });
    });
</script>
        </section>
        
            
            <div class="actu" style="background: linear-gradient(rgba(0, 1, 0, 0.5), rgba(0, 0, 0, 0.5)),  url('img/7.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity:0.75;">
                <div class="container-fluid bg-transparent">
                    <div class="row">
                        <div class=" col-sm col-md ">
                            <div class="container">
                                <h1 class="mt-5 h1">En ce Moment...</h1>
                                <div class="row mb-5 mt-5">
                                    <div class="col-lg-4 col-sm-6 mb-3 mb-sm-0">
                                        <div class="card bg-transparent">
                                            <img src="img/5.jpg" class="card-img-top img-fluid" style="opacity:0.75;" alt="...">

                                            <div class="card-body text-light">
                                                <h5 class="card-title">Forfait Week-end Découverte</h5>
                                                <p class="card-text">Profitez d'une escapade relaxante avec notre forfait week-end découverte. Réservez une voiture pour le week-end et bénéficiez d'un tarif spécial, avec kilométrage illimité inclus. </p>
                                                <a href="voitureActu.php" class="btn ">Allez Voir</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mb-3 mb-sm-0">
                                        <div class="card bg-transparent">
                                            <img src="img/5.jpg" class="card-img-top" style="opacity:0.75;" alt="...">

                                            <div class="card-body text-light">
                                                <h5 class="card-title">Offre Éco-Conduite </h5>
                                                <p class="card-text"> Contribuez à la préservation de l'environnement en choisissant notre offre éco-conduite. Optez pour l'un de nos véhicules écologiques et adoptez un style de conduite éco-responsable. </p>
                                                <a href="voitureActu.php" class="btn ">Allez Voir</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mb-3 mb-sm-0">
                                        <div class="card bg-transparent">
                                            <img src="img/6.jpg" class="card-img-top" style="opacity:0.75;" alt="...">

                                            <div class="card-body text-light">
                                                <h5 class="card-title">Location Longue Durée Avantageuse</h5>
                                                <p class="card-text">Pour ceux qui ont besoin d'une solution de transport sur le long terme, notre offre de location longue durée est conçue pour vous offrir des tarifs avantageux. </p>
                                                <a href="voitureCollection.php" class="btn ">Allez Voir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        
    </main>
    <?php include_once 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>