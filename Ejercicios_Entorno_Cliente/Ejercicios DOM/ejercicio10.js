let boton = document.getElementsByName('insertar')[0];
boton.addEventListener('click', function() {
    
    let inputcontenido = document.querySelector('input[name="contenido"]').value;
    
    let inputnumerico = parseInt(document.querySelector('input[name="posicion"]').value);

    let lista = document.querySelector('ul');
    
    let listali = document.querySelectorAll('li');

    let nuevoli = document.createElement('li');

    nuevoli.textContent=inputcontenido;

    if (inputnumerico > 0 && inputnumerico <= listali.length) {
        lista.insertBefore(nuevoli,listali[inputnumerico-1]);
    } else {
        lista.appendChild(nuevoli);
    }

});