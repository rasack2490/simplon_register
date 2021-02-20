let tabWindow = document.getElementsByClassName("tab-tete")[0].getElementsByTagName("div");
     

for(let i=0; i<tabWindow.length; i++){
  tabWindow[i].addEventListener("click", function(){

    document.getElementsByClassName("tab-tete")[0].getElementsByClassName("active")[0].classList.remove("active");
  tabWindow[i].classList.add("active");
  document.getElementsByClassName("tab-contenu")[0].getElementsByClassName("active")[0].classList.remove("active");
  document.getElementsByClassName("tab-contenu")[0].getElementsByClassName("tab-corp")[i].classList.add("active");
});
}






/*
function controlleForm(){
  let x= document.getElementsByClassName("form-group");
  if(x.style.display ==="block"){
    x.style.display = "none";
  }
}

function infoLearnerShow(){
  let o = document.getElementsByClassName("afficher");
  if(o.style.display === "none"){
    x.style.display = "block";
  }
}
*/








/*
var typed = Typed('.reg',{
    strings: ['register', 'learner'],
    typeSpeed: 100,
    backSpeed: 50,
    showCursor: true
  })

function clickbtn(){
    document.getElementById("formule").innerHTML= "<h1>xa marche bien</h1>";
}*/