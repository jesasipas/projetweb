<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script async src="/cdn-cgi/bm/cv/669835187/api.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/be9c976c2d.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>CESI Stage</title>

        <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('img/cesi.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>
<body>
    @if (Route::has('login'))
        @auth
            @include ('Header_connecte')
            @include ('sidebar_connecte')
        @else
            @include ('Header_nonconnecte')
            @include ('sidebar_nonconnecte')
        @endauth
    @endif

    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" aria-label="Slide 1" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="presentation" src="img/presentation.webp" alt="Image présentation">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <p><a id="btn-carousel" class="btn btn-warning" href="#presentation">Présentation</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="offres" src="img/offres.webp" alt="Image offres">

                    <div class="container">
                        <div class="carousel-caption">
                            <p><a id="btn-carousel" class="btn btn-warning" href="offres">Offres de stage</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="entreprises" src="img/entreprises.webp" alt="Image entreprises">

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <p><a id="btn-carousel" class="btn btn-warning" href="entreprises">Entreprises</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <br>
        <br>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 justify-content-center">
                <div id="presentation" class="card" style="width: 18rem;">
                    <img src="img/img-presentation.webp" class="card-img-top" alt="Image de présentation">
                    <div class="card-body">
                        <h5 class="card-title cover">Présentation</h5>
                        <p class="card-text">Ce site permet de référencer toutes les offres de stage porposées par les entreprises recensées par CESI. En vous connectant, vous pourrez trouver des offres qui correspondent à votre profil.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/img-ofrres.webp" class="card-img-top" alt="Image d'offres d'entreprises">
                    <div class="card-body">
                        <h5 class="card-title cover">Offres de stage</h5>
                        <p class="card-text">Retrouvez les offres de stage les plus récentes en cliquant ci-dessous.</p>
                        <a href="offres" id="btn-color" class="btn btn-warning">Offres de stage</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/img-entreprises.webp" class="card-img-top" alt="Image d'entreprises">
                    <div class="card-body">
                        <h5 class="card-title cover">Entreprises</h5>
                        <p class="card-text">Retrouvez la liste des entreprises qui recrutent en cliquant ci-dessous.</p>
                        <a href="entreprises" id="btn-color" class="btn btn-warning">Entreprises</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <br>

    @include ('Footer')

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
    }
</script>
</body>
</html>