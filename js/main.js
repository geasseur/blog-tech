
//Script pour le tableau interactif

// $(document).ready(function() {

     var invisible = document.getElementsByClassName("toggle");
     function cache(invisible){
       invisible.style.display = "none";
     }
     cache(invisible);


    /* $('.clickable1').click(function() {
         $('.toggle').toggle();
     });




//     $('.clickable2').click(function() {
//         $('.toggle2').toggle();
//     });
//
//
//
//     $('.clickable3').click(function() {
//         $('.toggle3').toggle();
//     });
//
//
//
//     $('.clickable4').click(function() {
//         $('.toggle4').toggle();
//     });
// });*/

//script pour les hovers

function altImg() {

    document.getElementById("altimg").innerHTML += this.alt ;
}

function nonAltImg() {
    document.getElementById("altimg").innerHTML = "" ;
}


//script pour la confirmation d'envois

function confirmation(){
  confirm("êtez vous sûr de vouloir envoyer?");
}

// script pour le compteur
var duree = 0;
function tempReste(){
    parseInt(duree += 1);
    document.getElementById("tmpReste").innerHTML += (duree + " secondes") ;
    setTimeout(function () {
      var delet = parseInt(duree);
      document.getElementById("tmpReste").innerHTML = " " ;
    }, 600);
}

setInterval(tempReste, 1000);

//script pour l'heure.
function horloge(){

var today = new Date();
var minute = today.getMinutes();
var secondes = today.getSeconds();
var heure = today.getHours();
var jour = today.getDay();
var nbjour = today.getDate();
var mois = today.getMonth();
var année = today.getFullYear();
if(jour == 1){
 jour = "lundi";
}
else if (jour == 2) {
 jour = "mardi";
}
else if (jour == 3) {
 jour = "mercredi";
}
else if (jour == 4) {
 jour = "jeudi"
}
else if (jour == 5) {
 jour = "vendredi";
}
else if (jour == 6) {
 jour = "samedi";
}
else {
 jour = "dimanche"
}

if(mois == 0){
 mois ="janvier";
}
else if (mois ==1) {
 mois = "fevrier"
}
else if (mois ==2) {
 mois = "mars";
}
else if (mois ==3) {
 mois = "avril";
}
else if (mois ==4) {
 mois = "mai";
}
else if (mois ==5) {
 mois = "juin";
}
else if (mois==6) {
 mois = "juillet";
}
else if (mois==7) {
 mois ="août";
}
else if (mois==8) {
 mois=="septembre";
}
else if (mois==9) {
 mois = "octobre";
}
else if (mois ==10) {
 mois = "novembre";
}
else{
 mois ="decembre";
}
document.getElementById("horaire").innerHTML += (heure + " h "+ minute + " min " + secondes +" sec "+ jour + " " + nbjour + " " + mois + " année " + année);

}

horloge();
