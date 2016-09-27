@extends('layouts.content')
@section('title',' JSSS')
@section('content')
    <h1 id="demo">Hello</h1>
    <script>
        var str= "Hola mario";
        document.getElementById("demo").innerHTML= str.charAt(0);
    </script>
    <p id="num">Numero Menor</p>
    <p id="numer">Numero Mayor</p>
    <button onclick="myfunciones()">Cambiar</button>
    <p id="fecha">Fecha</p>
    <p id="fechas">Fecha</p>
    <button onclick="fecha()">Fecha Actual</button>

    <p id="fru">frutas</p>
    <button onclick="forrr()">Frutas</button>
    <script>
        function myfunciones() {
            var x = 100.45;
            var y = 2.6;
          var xxx= document.getElementById("num").innerHTML = Math.min(x,y);
            document.getElementById("num").innerHTML = Math.round(xxx); //REDONDEO
            document.getElementById("numer").innerHTML = Math.max(x,y);
        }
        function fecha(){
            var fech = new Date();
            document.getElementById("fecha").innerHTML = fech.toUTCString();
            document.getElementById("fechas").innerHTML = fech.toDateString();
        }

        function forrr() {
            var fruts,text,flen,i;
            fruts = ["Pera","Manzana","Fresa","Papaya"];
            flen = fruts.length;
            text = "<ul>";
            for (i = 0; i < flen; i++){
                text += "<li>"+ fruts[i]+ "</li>";
            }
            text += "</ul>";
            document.getElementById("fru").innerHTML = text;

        }

    </script>

    <p id="demore"></p>

    <script>
        var fruits, text, fLen, i;

        fruits = ["Banana", "Orange", "Apple", "Mango"];
        fLen = fruits.length;
        text = "<ul>";
        for (i = 0; i < fLen; i++) {
            text += "<li>" + fruits[i] + "</li>";
        }
        text += "</ul>";
        document.getElementById("demore").innerHTML = text;
    </script>

    <button onclick="borr()">Borrar ultima fruta</button>
    <button onclick="agr()">Agregar kiwi</button>
    <button onclick="borr1()">Eliminar primera fruta</button>
    <button onclick="agr1()">Agregar Lemon al inicio</button>
    <button onclick="pos()">Eliminar pos 3 y agregar piña</button>
    <p id="fut"></p>

    <script>
        var fuits = ["Pera","Sandia","Cereza","Uva","Mango"];
        document.getElementById("fut").innerHTML = fuits;
        function borr() {
            fuits.pop();
            document.getElementById("fut").innerHTML = fuits;
        }
        function agr() {
            fuits.push("Kiwi");
            document.getElementById("fut").innerHTML = fuits;
        }
        function borr1() {
            fuits.shift();
            document.getElementById("fut").innerHTML = fuits;
        }
        function agr1() {
            fuits.unshift("Lemon");
            document.getElementById("fut").innerHTML = fuits;
        }
        function pos(){
            fuits.splice(3,1,"Piña");
            document.getElementById("fut").innerHTML = fuits;
        }
    </script>

    <button onclick="myFunctiones()">Sort</button>
    <p id="democar"></p>
    <p id="democar1"></p>

    <script>
        var cars = [
            {type:"Volvo", year:2016},
            {type:"Saab", year:2001},
            {type:"BMW", year:2010},
            {type:"YARIS", year:2010}
            ];
        var i,text;
        var ca = cars.length;
        displayCars();

        function myFunctiones() {
            cars.sort(function(a, b){
                var x = a.type.toLowerCase();
                var y = b.type.toLowerCase();
                if (x < y) {return -1;}
                if (x > y) {return 1;}
                return 0;
            });
            displayCars();
        }

        function displayCars() {
            text = "<ul>";
            for(i =0 ; i < ca ; i++ ){
                text = text + "<li>" + cars[i].type+"  "+cars[i].year + "</li>";
            }
            text += "</ul>";
            document.getElementById("democar1").innerHTML = text;


        }
    </script>
@endsection