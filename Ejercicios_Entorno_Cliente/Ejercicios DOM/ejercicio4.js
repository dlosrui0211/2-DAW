let botonenviar = document.getElementsByName("enviar")[0];
let botonlimpiar = document.getElementsByName("limpiar")[0];
let formulario = document.getElementById("formulario");


botonenviar.addEventListener('click' , function() {
    
    let nombre = document.getElementById("nombre").value;
    let apellidos = document.getElementById("apellidos").value;
    let nuevop= document.createElement('p');
    nuevop.textContent='Hola, bienvenido '+nombre+" "+apellidos;
    formulario.appendChild(nuevop);
    
});

botonlimpiar.addEventListener('click', function(){
    formulario.reset();
    let parrafos = formulario.querySelectorAll('p');
    for (i=0; i < parrafos.length; i++){
        parrafos[i].remove();
    }
})
