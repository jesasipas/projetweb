<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script async src="/cdn-cgi/bm/cv/669835187/api.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/be9c976c2d.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>CESI Mot de passe</title>
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
        <h5 class="txt-jaune" id="exampleModalLabel">Mot de passe oublié ?</h5>
        <h6 class="txt-noir" id="exampleModalLabel">Veuillez contacter un administrateur par mail</h6>
        <div class="row row-cols-1 row-cols-md-2 g-5">
            <div class="col">
                <div class="card">
                    <img src="img/Valentin.webp" class="card-img-top" alt="Valentin">
                    <div class="card-body">
                        <h5 class="card-title">Valentin CAMPAGNE</h5>
                        <p class="card-text">Adresse mail : <a href="valentin.campagne@viacesi.fr" class="email">valentin.campagne@viacesi.fr</a></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/Nathan.webp" class="card-img-top" alt="Nathan">
                    <div class="card-body">
                        <h5 class="card-title">Nathan Szusciak</h5>
                        <p class="card-text">Adresse mail : <a href="nathan.szusciak@viacesi.fr" class="email">nathan.szusciak@viacesi.fr</a></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="img/Thomas.webp" class="card-img-top" alt="Thomas">
                    <div class="card-body">
                        <h5 class="card-title">Thomas Blondel</h5>
                        <p class="card-text">Adresse mail : <a href="thomas.blondel@viacesi.fr" class="email">thomas.blondel@viacesi.fr</a></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/Arthur.webp" class="card-img-top" alt="Arthur">
                    <div class="card-body">
                        <h5 class="card-title">Arthur Kubiak</h5>
                        <p class="card-text">Adresse mail : <a href="arthur.kubiak@viacesi.fr" class="email">arthur.kubiak@viacesi.fr</a></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/Benoit.webp" class="card-img-top" alt="Benoit">
                    <div class="card-body">
                        <h5 class="card-title">Benoit Savary</h5>
                        <p class="card-text">Adresse mail : <a href="benoit.savary@viacesi.fr" class="email">benoit.savary@viacesi.fr</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <br>

    @include ('Footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>
</body>
</html>