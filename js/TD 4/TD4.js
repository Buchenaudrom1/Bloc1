
// Exercice 1 :

function changeColor(color) { 
    document.body.style.background = color; 
}

document.addEventListener("DOMContentLoaded",function(){

    const inputElement = document.getElementById("inputElement");
    const ajouterBtn = document.getElementById("ajouterBtn");
        
    const liste = document.getElementById("liste");

    ajouterBtn.addEventListener("click",
        function(){
            const texte = inputElement.value;
            if(texte !== ""){
                const li = document.createElement("li");
                li.textContent = texte;

                liste.appendChild(li);
                inputElement.value = "";
            }
        });

    const survolElement = document.getElementById("survolElement");

    survolElement.addEventListener("mouseover",
        function(){
            alert("Vous avez survolé l'élement ! ");
        });
        
    
});

function somme(){
    let nbr1, nbr2, sum;
    nbr1 = Number(document.getElementById("nbr1").value);
        nbr2 = Number(document.getElementById("nbr2").value);
        sum = nbr1 + nbr2;
        document.getElementById("sum").value = sum;
}

function changeit(val) {
    document.getElementById("hidden").style.display="none";
    document.getElementById("hidden2").style.display="none";
    document.getElementById("hidden3").style.display="none";
    document.getElementById(val).style.display="block";
}

function refresh(){
    var t = 1000; // rafraîchissement en millisecondes
    setTimeout('showDate()',t)
}

function showDate() {
    let date = new Date()
    let h = date.getHours();
    let m = date.getMinutes();
    let s = date.getSeconds();
    if( h < 10 ){ h = '0' + h; }
    if( m < 10 ){ m = '0' + m; }
    if( s < 10 ){ s = '0' + s; }
    let time = h + ':' + m + ':' + s
    document.getElementById('horloge').innerHTML = time;
    refresh();
 }

 
function ConfirmerAge(){
if (confirm("Confirmez vous avoir "+ formulaire.age.value +" ans ?")){
    formulaire.submit();
    }
}
