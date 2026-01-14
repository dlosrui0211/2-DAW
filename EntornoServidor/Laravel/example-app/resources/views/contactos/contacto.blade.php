@include('cabecera')
Hola, soy la pagina de contacto de {{ $nom }} y tengo {{ $ed }} años.

@if($ed >= 18)
    <p>Es mayor de edad</p>
@else
    <p>Es menor de edad</p>
@endif


{{-- {{ $ed }}  Esto es como si hicieras un echo en php --}}
