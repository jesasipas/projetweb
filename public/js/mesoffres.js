// Variables globales
var itemsMax = 2;
var pageID;
var nombrePages;
var m;

// Fonctions de démarrage
var setupEvents = function(){
   pagination();
   getUsers(1);
};

// Lancement des fonctions de base au chargement de la page
window.addEventListener("load", setupEvents);

// Fonction principale pour naviguer entre les pages
function getUsers(pageID)
{
   var html = "" ;
   var xhr = new XMLHttpRequest();
   xhr.open("GET", "https://reqres.in/api/users?page="+1, true);
   xhr.onload = function()
   {
   if( xhr.status == 200)
   {
      var maximum = itemsMax*pageID;
      var minimum = maximum-itemsMax;
      var response = JSON.parse(xhr.response);
      users = JSON.parse(xhr.response);
      m = 0;
      users.data.forEach(user =>
      {
         if(m<minimum){
            m++;
         }
         else if(m>=minimum && m<maximum){
            html += "<div id='"+user.id+"' class='offres' style='width:97%; height: 100px;' onclick='details(this.id);'><b><p class='p_offres'>"+user.first_name+"</p></b><b><p class='p_offres'>"+user.last_name+"</p></b><b><p class='p_offres'>"+user.email+"</p></b><b><p class='accroche_offres'>Accroche</p></b><div class='rating'><div class='stars'><img src='img/filled_star.png' class='star'></img><img src='img/filled_star.png' class='star'></img><img src='img/empty_star.png' class='star'></img><img src='img/empty_star.png' class='star'></img><img src='img/empty_star.png' class='star'></img></div></div></div>";
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
   xhr.open("GET", "https://reqres.in/api/users?page="+1, true);
   xhr.onload = function()
   {
   if( xhr.status == 200)
   {
      var response = JSON.parse(xhr.response);
      pageNb = response.page;
      users = JSON.parse(xhr.response);
      users.data.forEach(user =>
         {if(user.id == id){
            document.getElementById("details_offres").innerHTML = "<div id='rappel' style='width: 98%; height: 15%;'><p>"+user.email+"</p></div><div id='details' style='width: 98%; height: 74%;'><p>Réponse : </p><input type='radio' id='radio_oui' name='reponse' value='Oui' checked><label for='oui'>   Oui   </label><br><input type='radio' id='radio_non' name='reponse' value='Non'><label for='non'>   Non   </label><br><br><a href='' id='btn_add' class='btn btn-warning btn-color'>Envoyer</a><br><br><br><p>Fiche de validation : </p><input type='checkbox' id='checkbox_emise' name='fichee_validation' value='Emise' disabled><label for='emise'>   Émise par l'entreprise   </label><br><input type='checkbox' id='checkbox_signee' name='fiche_validation' value='Signee' disabled><label for='signee'>   Signée par le pilote   </label><br><br><p>Convention : </p><input type='checkbox' id='checkbox_emise_entreprise' name='convention' value='Emise_entreprise' disabled><label for='emise_entreprise'>   Émise à l'entreprise   </label><br><input type='checkbox' id='checkbox_signee_convention' name='convention' value='Signee_entreprise' disabled><label for='signee'>   Signée par l'entreprise   </label><br></div>";
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
xhr.open("GET", "https://reqres.in/api/users?page="+1, true);
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
   users.data.forEach(user =>

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