let boton1 = document.getElementsByName("Cambiartodos")[0];
let boton2 = document.getElementsByName("Cambiarprimero")[0];
let boton3 = document.getElementsByName("Cambiarpares")[0];
let boton4 = document.getElementsByName("CambiarImpares")[0];
let boton5 = document.getElementsByName("Añadiralfinal")[0];
let boton6 = document.getElementsByName("Estadoriginal")[0];

boton1.addEventListener('click', function(){
    let parrafos = document.querySelectorAll('p');
    for (i=0; i< parrafos.length; i++){
        parrafos[i].style.color='red';
    }
});
boton2.addEventListener('click', function(){
    let parrafos = document.querySelectorAll('p');
        parrafos[0].style.color='red';
});
boton3.addEventListener('click', function(){
    let parrafos = document.querySelectorAll('p');
    for (i=0; i< parrafos.length; i++){
        if(i % 2 == 0){
            parrafos[i].style.color='red';
        }
    }
});
boton4.addEventListener('click', function(){
    let parrafos = document.querySelectorAll('p');
    for (i=0; i< parrafos.length; i++){
        if(i % 2 != 0){
            parrafos[i].style.color='red';
        }
    }
});
boton5.addEventListener('click', function(){
    let parrafos = document.querySelectorAll('p');
    let tercerparrafo = parrafos[2];
    let nuevop = document.createElement('p')
    nuevop.textContent="Nuevo texto";

    document.body.insertBefore(nuevop,tercerparrafo);
});

boton6.addEventListener('click', function(){
    location.reload();
})
