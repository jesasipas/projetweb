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
    <title>CESI Formulaire Offre</title>
</head>
<body>



<div class="margin">
<h2> Modification d'une offre </h2>
<div class="separation"></div>
<h3>Veuillez renseigner les information sur l'offre : </h3>

<form method="POST" action="{{ route('offre.update')}}">
   @csrf

            <div class="group">
                <label> Nom de l'entreprise* </label>
                <input type="text" name="nomEntreprise" />
            </div>
            <div class="group">
                <label> titre de l'offre* </label>
                <input type="text" name="nomOffre" />
            </div>
            <div class="group">
                <label> competance </label>
                <select name="typePromo" id="typePromo" >
                <option id="typePromo" value="info"> info </option>
                <option id="typePromo" value="btp"> btp </option>
                <option id="typePromo" value="gene"> gene </option>
                </select>
            </div>
            <div class="group">
                <label> competance* </label>
                <input type="text" name="competance" />
            </div>
            <div class="group">
                <label> Présentation de la mission* </label>
                <textarea name="detailOffre" placeholder="Saisissez le détail de l'offre ici..." rows="10">
                </textarea>
            </div>
     
      <div class="form">  
            <div class="group">
                <label> Code Postal* </label>
                <input type="text" />
            </div>
            <div class="group">
                <label> Ville* </label>
                <input type="text" name="lieuStage" />
                <!-- <select >
                <option value="test"> --Sélectionner une ville-- </option>
                <option value="test"> nope </option>
                </select> -->
            </div>
            <div class="group">
                <label> Adresse* </label>
                <input type="text" />
            </div>    
            <div class="group">
                <label> Email a contacter </label>
                <input type="email" name="emailEntreprise" />
            </div>   
            <div class="group">
                <label> duré du stage en semaine </label>
                <input type="number" name="dureeJour" />
            </div>  
            <div class="group">
                <label> date du Debut </label>
                <input type="date" name="dateDebut" />
            </div>  
            <div class="group">
                <label> nombre de place</label>
                <input type="number" name="nbPlace" />
            </div> 
            <div class="group">
                <label> base de la Remuneration en Euro</label>
                <input type="number" name="baseRemunerationEuro" />
            </div> 
      </div>

        <div class="Des"> 
            <div class="group20">
               <button>Rajouter</button>
           </div>
            <div class="group20">
               <button>Annuler</button>
            </div>
        </div>
   

</form>

<div class="separation"></div>
<h3>Informations et satistiques de l'entreprise : </h3>
<div class="form">
            <div class="group">
                <label> Ville </label>
                <select multiple>
                <option value="test">test</option>
                </select>
            </div>
            <div class="group">
                <label> Email des contacts </label>
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
            note des stagiaires
            
            </div>
            <div class="group">
                <label> Note des tuteurs </label>
                <select multiple>
                <option value="test">test</option>
                </select>
            </div>
</div>


@include ('Footer')
<script src="js/sidebar.js"></script>
</body> 
</html> 