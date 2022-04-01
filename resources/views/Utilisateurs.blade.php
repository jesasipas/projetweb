<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_entreprises.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script async src="/cdn-cgi/bm/cv/669835187/api.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/be9c976c2d.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>CESI Utilisateurs</title>
</head>
<body>
@if (Route::has('login'))
        @auth
            @include ('Header_connecte')
        @else
            @include ('Header_nonconnecte')
        @endauth
    @endif

    <h2 id="h2content" styonClick='window.location.href="Wishlist.php"'>Utilisateurs</h2>
    <div id="bottom">
    <div id="dropdown_secteur" class="filtre">
    <select>
        <option>Secteur d'activité</option>
        <option class="test">Fournisseur1</option>
        <option>Fournisseur2</option>
        <option>Fournisseur3</option>
    </select>
    </div>
    <div id="dropdown_localite" class="filtre">
    <select>
        <option>Localité</option>
        <option class="test">Fournisseur1</option>
        <option>Fournisseur2</option>
        <option>Fournisseur3</option>
    </select>
    </div>
    <div id="dropdown_stagiaires" class="filtre">
    <select>
        <option>Stagiaires acceptés</option>
        <option class="test">Fournisseur1</option>
        <option>Fournisseur2</option>
        <option>Fournisseur3</option>
    </select>
    </div>
    <div id="dropdown_note_stagiaires" class="filtre">
    <select>
        <option>Note des stagiaires</option>
        <option class="test">Fournisseur1</option>
        <option>Fournisseur2</option>
        <option>Fournisseur3</option>
    </select>
    </div>

    <div id="boutons_offres">
    @if(Gate::allows('access_admin') or Gate::allows('access_pilote') or Gate::allows('access_delegue'))
        <a href="formulaireUtilisateur" id="btn_add" class="btn btn-warning btn-color">Ajouter</a>
        <a href="formulaireUtilisateur" id="btn_update" class="btn btn-warning btn-color">Modifier</a>
        <a href="formulaireUtilisateur" id="btn_delete" class="btn btn-warning btn-color">Supprimer</a>
    @endif
    </div>

    <div id="search_entreprises">
        <input name="bar" id="searchbar" type="search" class="form-control" placeholder="Nom de l'entreprise..." aria-label="Search">
        <button id="search_button" class="btn btn-dark" onclick="recherche()" type="submit" id="oSoumettre" style="border-top-right-radius:.25rem;border-bottom-right-radius:.25rem;"><i class="fas fa-search"></i></button>
    </div>

</div>
    <div id="entreprises" class="container">
      <div id="liste_entreprises" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"></div>
    </div>

    <div id="pagination"></div>
</main>
    @include('Footer')
    <script src="js/entreprises.js"></script>
</body>
</html>