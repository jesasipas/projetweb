<?php
    $ent = (int)@$_GET["ent"];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_fiches_entreprise.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script async src="/cdn-cgi/bm/cv/669835187/api.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/be9c976c2d.js" crossorigin="anonymous"></script>
    <title>CESI Offres de stage</title>
</head>
<body>
@if (Route::has('login'))
        @auth
            @include ('Header_connecte')
        @else
            @include ('Header_nonconnecte')
        @endauth
    @endif

    <div id="content">
        <div id="content_1">
            <div id="logo">
            <img width="200px" height="200px" id="logo_entreprise" src="">
            <div id="logo_fond"></div>
            </div>

            <h2 id="h2content"></h2>

            <div id='evaluation_entreprise'></div>

            <h6 id="secteur">Secteur d'activité</h6>
            <h6 id="nombre_stagiaires">Stagiaires CESI déjà acceptés en stage : </h6>
            <h6 id="confiance">Confiance du Pilote de promotion : </h6>
        </div>

        <div id="content_2">
            <h5 id="localite">Localités : </h5>
            <ul id="liste_adresses" class="localite">
            <li>8, rue du Grand pré ARRAS 62000</li>
            <li>8, rue du Grand pré ARRAS 62000</li>
            <li>8, rue du Grand pré ARRAS 62000</li>
            </ul>
        </div>
    </div>

    <div id="other_content">
    <div id="descriptif">
        <h5>Descriptif :</h5>
        <textarea id="descriptif_texte"></textarea>
    </div>

    <div id="entreprise_offres">
        <h5 id="h5offres">Offres proposées par l'entreprise :</h5>
        <div id="section_offres"></div>
    </div>
    </div>
    <input id="input_de_secours" type="text" value="<?php echo $ent ?>" style="visibility: hidden">

    @include('Footer')
    <script src="js/fiche_entreprise.js"></script>
</body>
</html>