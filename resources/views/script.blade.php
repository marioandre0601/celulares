@extends('layouts.content')
@section('title', 'JS')

@section('content')

    <script>
        document.write("Hola mundo2<br>");
        document.write(Date());
        function myFunction() {
            document.getElementById("funciones").innerHTML="Paragraph changed.";
        }
    </script><br>
    <button type="button" onclick="document.getElementById('demo').innerHTML=Date()">
        Click para ver hora
    </button><br>
    <p id="demo">  </p><br>

    <p id="demos">JavaScript</p><br>
    <button type="button" onclick="document.getElementById('demos').innerHTML='Hello '">Click</button><br>

    <p id="size">Hola JS</p>
    <button type="button" onclick="document.getElementById('size').style.fontSize='35px'">Resize</button>

    <p id="ocultar">Byebye</p>
    <button type="button" onclick="document.getElementById('ocultar').style.display='none'">Ocultar</button>
<br>
    <p id="bloque" style="display: none">Hola </p>
    <button type="button" onclick="document.getElementById('bloque').style.display='block'">Click bloque</button>
    <br>
    <p id="funciones">A paragraph</p>
    <button type="button" onclick="myFunction()">Try it</button>
@endsection
