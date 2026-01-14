let parrafo = document.querySelectorAll('p');

let parrafonuevo = document.createElement('p');
parrafonuevo.textContent="Este es el nuevo parrafo"
document.body.insertBefore(parrafonuevo, parrafo[1]);