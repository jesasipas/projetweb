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
    <title>CESI Entreprises</title>
</head>
<body>

@if (Route::has('login'))
        @auth
            @include ('Header_connecte')
        @else
            @include ('Header_nonconnecte')
        @endauth
    @endif

<div class="margin">
<h2> Modification d'une entreprise </h2>
<div class="separation"></div>
<h3>Veuillez renseigner les information sur l'entreprise : </h3>

<form method="POST" action="{{ route('entreprise.update')}}">
@csrf
    <div class="form">
    <div class="group">
       <label> Banière de l'entreprise</label>
       <img src="" alt="Banière de l'entreprise" border="1" />
       <input type="file" max="50" name="banniere"/> <br>
    </div>
    <div class="group">
       <label>Logo de l'entreprise</label>
       <img src="" alt="Logo de l'entreprise" border="1" />
       <input type="file" name="logo"/>
    </div>
    </div>

            <div class="group">
                <label> Nom de l'entreprise* </label>
                <input type="text" name="nomEntreprise" />
            </div>
            <div class="group">
                <label> site web* </label>
                <input type="text" name="siteWeb" />
            </div>
            <div class="group">
                <label> nombre de stagiaire Cesi* </label>
                <input type="number" name="nbStageCesi" />
            </div>
            <div class="group">
                <label> évaluation par les stagiaires* </label>
                <input type="number" name="evaluationStage" />
            </div>
            <div class="group">
                <label> commentaire du pilot* </label>
                <input type="text" name="confiancePilot" />
            </div>
            <div class="group">
                <label> Présentation de l'entreprise* </label>
                <textarea name="detailent" placeholder="Saisissez le détail de l'offre ici..." rows="10">
                </textarea>
            </div>
     
      <div class="form">  
            <div class="group">
                <label> Code Postal* </label>
                <input type="text" name="codePostal" />
            </div>
            <div class="group">
                <label> Ville* </label>
                <input type="text" name="ville"/>
                <!-- <select >
                <option value="test"> --Sélectionner une ville-- </option>
                <option value="test"> nope </option>
                </select> -->
            </div>
            <div class="group">
                <label> Adresse* </label>
                <input type="text" name="adresse"/>
            </div>    
      </div>

        <div class="Des">
            <div class="group20">
               <button type="submit">Modifie</button>
           </div>
            <div class="group20">
               <button type="reset">Annuler</button>
            </div>
        </div>
   

</form>

<div class="separation"></div>

<div class="form">
            <div class="group">
                <label> All localités </label>
                <select multiple>
                <option value="test">test</option>
                </select>
            </div>
            <div class="group">
                <label> All email </label>
                <select multiple>
                <option value="test">test</option>
                </select>
            </div>
</div>
            <div class="form2">
            <div class="group">
                <label> Nombre de stagiaire </label> 
                <input type="text" />
            </div>
</div>
</div>
@include ('Footer')
</body> 
</html> 
