// Esto sirve basicamente para traerse modulos desde otros sitios sabiendo de ante mano que se pueden utilizar
import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';

@Component({ // Esto lo que hace es convertir una clase a un componente
  selector: 'app-root', //Asi es como se le llama despues a la etiqueta en el html principal
  imports: [RouterOutlet],
  templateUrl: './app.html', // La ruta donde se encuentra el template de la pagina
  styleUrl: './app.css' // Lo mismo que lo anterior pero con los estilos
})
export class App { // Esto es definir la clase que lo como una propiedad de solo lectura y el signal lo que hacer es dejar las cosas como son realmente
  protected readonly title = signal('proyecto_prueba');
}
