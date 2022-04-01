// Variables globales
var itemsMax = 2;
var pageID;
var nombrePages;
var m;

// Fonctions de démarrage
var setupEvents = function(){
   pagination();
   getUsers(1);
   setId();
};

// Lancement des fonctions de base au chargement de la page
window.addEventListener("load", setupEvents);

// Fonction principale pour naviguer entre les pages
function getUsers(pageID)
{
   var html = "" ;
   var xhr = new XMLHttpRequest();
   xhr.open("GET", "/dataoffreentreprise", true);
   xhr.onload = function()
   {
   if( xhr.status == 200)
   {
      var maximum = itemsMax*pageID;
      var minimum = maximum-itemsMax;
      var response = JSON.parse(xhr.response);
      users = JSON.parse(xhr.response);
      m = 0;
      users.forEach(user =>
      {
         if(m<minimum){
            m++;
         }
         else if(m>=minimum && m<maximum){
            html += "<div id='"+user.id+"' class='offres' style='width:97%; height: 100px;' onclick='details(this.id);'><b><p class='p_offres'>"+user.nomOffre+"</p></b><b><p class='p_offres'>"+user.nomEntreprise+"</p></b><b><p class='p_offres'>"+user.dateDebut.substring(0, 10)+"</p></b></div></div>";
            m++;
         }
      });
      pagePrecedente = pageID - 1;
      pageSuivante = pageID + 1;
      if(pageSuivante >= nombrePages){
           pageSuivante = nombrePages;
      }
      if(pagePrecedente <= 1){
         pagePrecedente = 1;
      }
      if(html==""){
         html = "Aucun résultat."
      }
   }
   else{
       html = "Erreur 404";
   }
   document.getElementById("section_offres").innerHTML = html;
   i=1;
   while (i<nombrePages){
      document.getElementById("page_"+i).className = "mlkj";
      i++;
   }
   document.getElementById("page_"+pageID).className = "active";
   };
   xhr.send(); //Envoi de la requête au serveur (asynchrone par défaut)
};


// Affichage des détails de l'offre
var details = function(id) {
   document.getElementById("before_details_offres").style.visibility = "hidden";
   var html = "" ;
   var xhr = new XMLHttpRequest();
   xhr.open("GET", "/dataoffreentreprise", true);
   xhr.onload = function()
   {
   if( xhr.status == 200)
   {
      var response = JSON.parse(xhr.response);
      pageNb = response.page;
      users = JSON.parse(xhr.response);
      users.forEach(user =>
         {if(user.id == id){
            document.getElementById("details_offres").innerHTML = "<div id='rappel' style='width: 98%; height: 15%;'><p>"+user.nomOffre+"</p><a href='' id='btn_postuler' class='btn btn-warning btn-color'>Postuler</a><i id='heart' style='bottom: 5px;' class='fa-regular fa-heart'></i></div><div id='details' style='width: 98%; height: 74%;'><p id='competence'>Compétence : "+user.competance+"</p><p id='lieu_stage'>Lieu : "+user.lieuStage+"</p><p id='email'>Email : "+user.emailEntreprise+"</p><p id='type_promo'>Type de promo : "+user.typePromo+"</p><p id='duree'>Durée (jours) : "+user.dureeJour+"</p><p id='nbplace'>Nombre de places : "+user.nbPlace+"</p><p id='remuneration'>Rémunération : "+user.baseRemunerationEuro+"</p><p id='detail_de_loffre'>Détails de l'offre : "+user.detailOffre+"</p></div>";
            document.getElementById("details_offres").style.visibility = "visible";
         };});
   }
   else{
       html = "Erreur 404";
   }
   };
   xhr.send()
};

// Création de la pagination
function pagination()
{
var html = "" ;
var xhr = new XMLHttpRequest();
xhr.open("GET", "/dataoffreentreprise", true);
xhr.onload = function()
{
if( xhr.status == 200)
{
   var response = JSON.parse(xhr.response);
   users = JSON.parse(xhr.response);
   html += "<a href='#' onclick='getUsers(pagePrecedente); actualiserOffres()'>&laquo;</a>";
   html+="<a id='page_1' class=' ' href='#' onclick='getUsers(id.substr(5)); actualiserOffres()'>"+1+"</a>";
   var i = 1;
   var j = 2;
   users.forEach(user =>

   {if (i<=itemsMax){
      i++;
   }
   else {
      html+="<a id='page_"+j+"' class=' ' href='#' onclick='getUsers(id.substr(5)); actualiserOffres()'>"+j+"</a>";
      i = 2;
      j++;
   }});
   nombrePages = j;
   }
   html += "<a href='#'' onclick='getUsers(pageSuivante); actualiserOffres()'>&raquo;</a>";

// else {
//    html = "Erreur 404";
// }
document.getElementById("pagination").innerHTML = html;
};
xhr.send(); //Envoi de la requête au serveur (asynchrone par défaut)
};

// Actualiser Offres (reset scroll)
function actualiserOffres() {
   document.getElementById("section_offres").scrollTo(0,0);
}

function setId()
{
    details(document.getElementById("input_de_secours2").value);
};