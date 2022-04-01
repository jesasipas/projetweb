<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/formStyle.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script async src="/cdn-cgi/bm/cv/669835187/api.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/be9c976c2d.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>CESI Formulaire Utilisateur</title>
</head>
<body>
@if (Route::has('login'))
        @auth
            @include ('Header_connecte')
            @include ('sidebar_connecte')

<main>
    <div class="margin">
<h2> Création/modification des utilisateurs </h2>
<div class="separation"></div>
<h3> Remplir offre second </h3>
<form>
    <div class="form">
       <input type="file"/>
            <div class="group">
                <label> Nom </label>
                <input type="text" />
            </div>
            <div class="group">
                <label> Prénom </label>
                <input type="text" />
            </div>
            <div class="group">
                <label> Code Postal* </label>
                <input type="text" />
            </div>
            <div class="group">
                <label> Ville* </label>
                <select >
                <option value="test"> --Sélectionner une ville-- </option>
                <option value="test"> nope </option>
                </select>
            </div>
            <div class="group">
                <label> Adresse* </label>
                <input type="text" />
            </div>  
            <div class="group">
                <label> Adresse mail* </label>
                <input type="text" />
            </div>  
            <div class="group">
                <label> Mot de passe* </label>
                <input type="text" />
            </div>  
            <div class="group">
                <label> Centre </label>
                <select  >
                <option value="test">test </option>
                </select>
            </div>
            <div class="group">
                <label> Promotion </label>
                <select  >
                <option value="test">test </option>
                </select>
            </div>
            <div class="group">
            <label> Statut </label>
                <select>
                @if(Gate::allows('access_admin') or Gate::allows('access_pilot') or Gate::allows('access_delegue'))
                <option value="test">Etudiant</option>
                @endif
                @if(Gate::allows('access_admin') or Gate::allows('access_pilot') or Gate::allows('access_delegue'))
                <option value="test">Délégué </option>
                @endif
                @if(Gate::allows('access_admin'))
                <option value="test">Pilote</option>
                @endif
                </select>
            </div>
            
<fieldset> <legend> Cocher les permissions si besoin : </legend>
            <div class="group">
            <div>

  <input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox">
  <label for="checkbox-1" class="checkbox-custom-label">Rechercher une entreprise</label>
</div>
<div>
  <input id="checkbox-2" class="checkbox-custom" name="checkbox-2" type="checkbox">
  <label for="checkbox-2" class="checkbox-custom-label">Créer une entreprise</label>
</div>
<div>
  <input id="checkbox-3" class="checkbox-custom" name="checkbox-3" type="checkbox">
  <label for="checkbox-3" class="checkbox-custom-label">Modifier une entreprise</label>
</div>
<div>
  <input id="checkbox-4" class="checkbox-custom" name="checkbox-4" type="checkbox">
  <label for="#checkbox-4" class="checkbox-custom-label">Evaluer une entreprise</label>
</div>

<div>
  <input id="checkbox-5" class="checkbox-custom" name="checkbox-5" type="checkbox">
  <label for="checkbox-5" class="checkbox-custom-label">Supprimer une entreprise</label>
</div>
<div>
  <input id="checkbox-6" class="checkbox-custom" name="checkbox-6" type="checkbox">
  <label for="checkbox-6" class="checkbox-custom-label">Consulter les stats des entreprises</label>
</div>

<div>
  <input id="checkbox-7" class="checkbox-custom" name="checkbox-7" type="checkbox">
  <label for="checkbox-7" class="checkbox-custom-label">Rechercher une offre</label>
</div>
<div>
  <input id="checkbox-8" class="checkbox-custom" name="checkbox-8" type="checkbox">
  <label for="checkbox-8" class="checkbox-custom-label">Créer une offre</label>
</div>

<div>
  <input id="checkbox-9" class="checkbox-custom" name="checkbox-9" type="checkbox">
  <label for="checkbox-9" class="checkbox-custom-label">Rechercher une offre</label>
</div>
<div>
  <input id="checkbox-10" class="checkbox-custom" name="checkbox-10" type="checkbox">
  <label for="checkbox-10" class="checkbox-custom-label">Créer une offre</label>
</div>
<div>
  <input id="checkbox-11" class="checkbox-custom" name="checkbox-11" type="checkbox">
  <label for="checkbox-11" class="checkbox-custom-label">Modifier une offre</label>
</div>
<div>
  <input id="checkbox-12" class="checkbox-custom" name="checkbox-12" type="checkbox">
  <label for="checkbox-12" class="checkbox-custom-label">Supprimer une offre</label>
</div>
<div>
  <input id="checkbox-13" class="checkbox-custom" name="checkbox-13" type="checkbox">
  <label for="checkbox-13" class="checkbox-custom-label">Rechercher un compte délégué</label>
</div>
<div>
  <input id="checkbox-14" class="checkbox-custom" name="checkbox-14" type="checkbox">
  <label for="checkbox-14" class="checkbox-custom-label">Créer un compte délégué</label>
</div>
<div>
  <input id="checkbox-15" class="checkbox-custom" name="checkbox-15" type="checkbox">
  <label for="checkbox-15" class="checkbox-custom-label">Modifier un compte délégué</label>
</div>
<div>
  <input id="checkbox-16" class="checkbox-custom" name="checkbox-16" type="checkbox">
  <label for="checkbox-16" class="checkbox-custom-label">Supprimer un compte délégué</label>
</div>


<div>
  <input id="checkbox-17" class="checkbox-custom" name="checkbox-17" type="checkbox">
  <label for="checkbox-17" class="checkbox-custom-label">Rechercher un compte étudiant</label>
</div>
<div>
  <input id="checkbox-20" class="checkbox-custom" name="checkbox-20" type="checkbox">
  <label for="checkbox-20" class="checkbox-custom-label">Créer un compte étudiant</label>
</div>
<div>
  <input id="checkbox-18" class="checkbox-custom" name="checkbox-18" type="checkbox">
  <label for="checkbox-18" class="checkbox-custom-label">Modifier un compte étudiant</label>
</div>
<div>
  <input id="checkbox-21" class="checkbox-custom" name="checkbox-21" type="checkbox">
  <label for="checkbox-21" class="checkbox-custom-label">Supprimer un compte étudiant</label>
</div>
<div>
  <input id="checkbox-19" class="checkbox-custom" name="checkbox-19" type="checkbox">
  <label for="checkbox-19" class="checkbox-custom-label">Consulter les stats des étudiants</label>
</div>
<div>
  <input id="checkbox-22" class="checkbox-custom" name="checkbox-22" type="checkbox">
  <label for="checkbox-22" class="checkbox-custom-label">Candidatures step 3</label>
</div>
<div>
  <input id="checkbox-23" class="checkbox-custom" name="checkbox-23" type="checkbox">
  <label for="checkbox-23" class="checkbox-custom-label">Candidatures step 4</label>
</div>

</fieldset>
        </div>
            
    <div class="Des"> 
          <div class="group20">
              <button>Enregistrer</button>
          </div>
          <div class="group20">
              <button>Annuler</button>
          </div>
          </div>
</form>

</div>
@else
    @include ('Header_nonconnecte')
    @include ('sidebar_nonconnecte')
    <p> Vous n'êtes pas connecté </p>
    
@endauth
@endif
</main>
<script src="js/sidebar.js"></script>
</body>
@include ('Footer')
</html>