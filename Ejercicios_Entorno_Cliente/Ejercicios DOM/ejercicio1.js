// Contar enlaces de toda la pagina

let Totalenlaces = document.querySelectorAll('a');

console.log("Total de enlaces de la pagina "+Totalenlaces.length);


// Direccion en la que enlaza el penultimo enlace

let enlaces = document.querySelectorAll('a');

let penultimo = enlaces[enlaces.length -2];

console.log("Penultimo enlace: "+penultimo.href);

// Numeros de enlaces que enlaza con la pagina marca

contador=0;
for (let i=0; i < enlaces.length; i++){
    if(enlaces[i].href == "http://www.marca.es/"){
        contador++
    }
}

console.log("Numeros de enlaces con marca: "+contador);

// Numero de enlaces en el tercer parrafo

let parrafos = document.querySelectorAll('p');

let tercerparrafo = parrafos[2];

let enlacestercerparrafo=tercerparrafo.querySelectorAll('a').length;

console.log("Numeros de enlaces en el tercer parrafo: "+enlacestercerparrafo);