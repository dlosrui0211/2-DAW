let boton = document.getElementsByName('invertir')[0];


boton.addEventListener('click' , function(){
    let parrafo = document.querySelectorAll('p');
    
    for(i=0; i < parrafo.length; i++){
        let parrafoainvertir= parrafo[i].textContent;
        let parrafoinvertido = parrafoainvertir.split('').reverse().join('');
        parrafo[i].textContent = parrafoinvertido;
        document.body.insertBefore(parrafo[i], boton);
    }

});