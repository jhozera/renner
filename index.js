document.getElementById("button-mobile").onclick = function() {
    let menu = document.getElementById("menu");

    if (menu.style.display === "none") {
        menu.style.display = "block";  
    } else {
        menu.style.display = "none"; 
    }
}

document.getElementById("button-mobilefechar").onclick = function() {
    let menu = document.getElementById("menu");

    if (menu.style.display === "none") {
        menu.style.display = "block";  
    } else {
        menu.style.display = "none";  
    }
}



document.getElementById("button").onclick = function() {
    let atualizacao = document.getElementById("modal-overlay");


    if(atualizacao.style.display ==="none"){
          atualizacao.style.display = "block";
    } else {
        atualizacao.style.display = "none";
    }
}

function closeModal(){
    document.getElementById('modal-overlay').style.display = 'none';
}

