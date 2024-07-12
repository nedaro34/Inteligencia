var indice = 1;
mostrar(indice);

function cambiar(n) {
    mostrar(indice += n);
}

function mostrar(n) {
    var i;
    var elementos = document.getElementsByClassName("visibilidad");
    if (n > elementos.length) {
        indice = 1
    }
    if (n < 1) {
        indice = elementos.length
    }
    for (i = 0; i < elementos.length; i++) {
        elementos[i].style.display = "none";
    }
    elementos[indice-1].style.display = "block";  
}