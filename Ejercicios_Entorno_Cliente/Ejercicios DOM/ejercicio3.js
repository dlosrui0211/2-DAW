let boton = document.querySelector('input[type="button"]');
let lista = document.getElementById("diariosdeportivos");


boton.addEventListener('click', function() {
    let nuevoli= document.createElement('li');
    nuevoli.textContent="Nuevo elemento";
    lista.appendChild(nuevoli);
});