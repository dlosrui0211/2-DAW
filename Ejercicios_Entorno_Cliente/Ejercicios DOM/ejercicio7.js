let boton = document.getElementsByName('ordenar')[0];

boton.addEventListener('click' , function(){
    let items= document.querySelectorAll('li');
    let arrayitems=[...items];
    let contenedor= document.querySelector('ul');



    let arrayordenado = arrayitems.sort((a,b)=>{
        return a.textContent.localeCompare(b.textContent);
    });

    contenedor.innerHTML="";
    for (let i=0; i < arrayordenado.length; i++){
        contenedor.appendChild(arrayordenado[i]);
    }

})