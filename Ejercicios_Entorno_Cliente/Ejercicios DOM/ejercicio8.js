let boton = document.getElementsByName('cambiarperiodico')[0];

boton.addEventListener('click', function(){
    let parrafo = document.querySelector('p');
    let enlace = parrafo.querySelector('a');
    
    enlace.href="http://www.as.com";
    enlace.textContent="as";

})
