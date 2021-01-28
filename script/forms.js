var body=document.querySelector("body");//selectionne le body
setInterval(setSize, 1);//Une fonction permettant de redimensioner page quelqu'en soit la taille de la fenetre*//
body.style.display ="flex";
body.style.justifyContent="center";//Pour centrer le formulaire//
body.style.alignItems="center";// centrer les elements du formulaire
function setSize (){
var aicha =window.innerHeight;//la taille de la fenêtre//
body.style.height= aicha+"px";//
}

