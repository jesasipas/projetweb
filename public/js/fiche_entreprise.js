// Variables globales
var m;
var idEntreprise;
var htmltemp;

// Fonctions de démarrage
var setupEvents = function(){
   setId();
   getUsers();
   offres();
};

// Lancement des fonctions de base au chargement de la page
window.addEventListener("load", setupEvents);

// Fonction principale pour naviguer entre les pages
function getUsers()
{
   var html = "" ;
   var xhr = new XMLHttpRequest();
   xhr.open("GET", "/dataentreprise", true);
   xhr.onload = function()
   {
   if( xhr.status == 200)
   {
      var response = JSON.parse(xhr.response);
      entreprises = JSON.parse(xhr.response);
      entreprises.forEach(entreprise =>
      {
         if(entreprise.id == idEntreprise){
            document.getElementById("h2content").innerHTML = entreprise.nomEntreprise;
            document.getElementById("logo_entreprise").src = entreprise.logo;
            document.getElementById("nombre_stagiaires").innerHTML = "Stagiaires CESI déjà acceptés en stage : "+entreprise.nbStageCesi;
            document.getElementById("confiance").innerHTML = "Confiance du Pilote de promotion : "+entreprise.confiancePilot;
            document.getElementById("descriptif_texte").innerHTML = entreprise.detailent;
            var k = 0;
            while(k<5){
               if(k<entreprise.evaluationStage){
                  document.getElementById("evaluation_entreprise").innerHTML += "<i class='fa-solid fa-star'></i>";
               }
               else{
                document.getElementById("evaluation_entreprise").innerHTML += "<i class='fa-regular fa-star'></i>";
               }
               k++;
            }
            console.log(adresses());
            document.getElementById("liste_adresses").innerHTML = adresses();
         }
      });
   }
   else{
       html = "Erreur 404";
   }
   };
   xhr.send(); //Envoi de la requête au serveur (asynchrone par défaut)
};


var adresses = function(){
   htmltemp = "";
   var xhr = new XMLHttpRequest();
   xhr.open("GET", "/dataavoir", true);
   xhr.onload = function()
   {
      if( xhr.status == 200)
      {
         var response = JSON.parse(xhr.response);
         entreprises = JSON.parse(xhr.response);
         console.log(entreprises);
         entreprises.forEach(entreprise =>
            {
               if(entreprise.entreprises_id == idEntreprise){
                  var xhm = new XMLHttpRequest();
                  xhm.open("GET", "/dataadresse", true);
                  xhm.onload = function()
                  {
                     var responses = JSON.parse(xhm.responses);
                     ent = JSON.parse(xhm.responses);
                     console.log(ent);
                     ent.forEach(en =>
                     {
                        if(entreprise.adresses_id == en.id){
                           htmltemp += "<li>"+en.ville+" "+en.codePostal+" "+en.adresse+"</li>";
                        }
                     });
                  }
               }
            }
         );
      }
   }
   xhr.send();
   return htmltemp;
}

// Fonction principale pour naviguer entre les pages
function offres()
{
   var html = "" ;
   var xhr = new XMLHttpRequest();
   xhr.open("GET", "/dataoffreentreprise", true);
   xhr.onload = function()
   {
   if( xhr.status == 200)
   {
      var response = JSON.parse(xhr.response);
      entreprises = JSON.parse(xhr.response);
      entreprises.forEach(entreprise =>
      {
         if(entreprise.entreprises_id == idEntreprise){
            document.getElementById("section_offres").innerHTML += "<div id='"+entreprise.id+"' class='offres' style='width:97%; height: 100px;' onClick='window.location.href=\"offres?off="+entreprise.id+"\"'><b><p class='p_offres'>"+entreprise.nomOffre+"</p></b><b><p class='p_offres'>"+entreprise.nomEntreprise+"</p></b><b><p class='p_offres'>"+entreprise.dateDebut.substring(0, 10)+"</p></b></div></div>";
         }
      });
   }
   else{
       html = "Erreur 404";
   }
   };
   xhr.send(); //Envoi de la requête au serveur (asynchrone par défaut)
};

function setId()
{
    idEntreprise = document.getElementById("input_de_secours").value;
    console.log(idEntreprise);
};