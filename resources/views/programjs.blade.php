@extends('layouts.content')
@section('title','Programas JS')
@section('content')
    <button onclick="myFunction()">
        Click
    </button>
    <p id="demo"></p>
    <p id="demo2"></p>
    <script>
        function myFunction(){
            var x= 5;
            var y=6;
            var z= x+y;
            document.getElementById("demo").innerHTML=z;
            document.getElementById("demo2").innerHTML=Date();
        }
     </script>

    <p id="demos"></p>

    <script>
        var xf = 5 + 6;
        var yf = xf * 10;
        document.getElementById("demos").innerHTML = yf;
    </script>

    <p id="demo1"></p>

    <script>
        var lastName = "Doe";
        var lastname = "Peterson";
        document.getElementById("demo1").innerHTML = lastName;
    </script>

    <p id="sumas"></p>
    <script>
        var x=500;
        var y=6;
        var z = x+y;
        document.getElementById("sumas").innerHTML=z;
    </script>

    <p id="myPar">I am a paragraph.</p>
    <div id="myDiv">I am a div.</div>

    <p>
        <button type="button" onclick="myFunctions()">Try it</button>
    </p>

    <script>
        function myFunctions() {
            document.getElementById("myPar").innerHTML = "Hello Dolly.";
            document.getElementById("myDiv").innerHTML = "How are you?";
        }
    </script>

    <h1 id="myH"></h1>
    <p id="myP"></p>

    <script>
        // Change heading:
        document.getElementById("myH").innerHTML = "My First Page";
        // Change paragraph:
        document.getElementById("myP").innerHTML = "My first paragraph.";
    </script>

    <p id="demox"></p>

    <script>
        var price1 = 5;
        var price2 = 6;
        var total = price1 + price2;
        document.getElementById("demox").innerHTML =
                "The total is: " + total;
    </script>
    <h1>
        <p id="fun"></p>
    </h1>

    <script>
        function func(p1,p2){
            return p1 * p2;
        }
        document.getElementById("fun").innerHTML = func(4,3);
    </script>


    <p id="demoxx"></p>

    <script>
        function toCelsius(f) {
            return (5/9) * (f-32);
        }
        document.getElementById("demoxx").innerHTML = toCelsius(77);
    </script>

    <p id="demo12"></p>

    <script>
        var carName = "Volvo";

        // code here can use window.carName
        document.getElementById("demo12").innerHTML = "I can display " + carName;
    </script>

    <button onclick="this.innerHTML=Date()">The time is?</button>

    <span onmouseover="this.style.color='green'">JEJEJEJe</span>

    <p id="demossss"></p>

    <script>

        var x = 'It\'s alright';
        var y = "We are the so-called \"Vikings\" from the north.";

        document.getElementById("demossss").innerHTML = x + "<br>" + y;

    </script>

    <button onclick="myFunction()">Try it</button>

    <p id="demonnn">Please visit Microsoft!</p>

    <script>
        function myFunction() {
            var str = document.getElementById("demonnn").innerHTML;
            var txt = str.replace("Microsoft","W3Schools");
            document.getElementById("demonnn").innerHTML = txt;
        }
    </script>

    <p id="xd">Pasar a mayuscula</p>
    <p id = xxx>PASAR A MINUSCULA</p>
    <button onclick="mayu()">Cambiar a Mayuscula</button>
    <script>
        function mayu(){
            var tex = document.getElementById("xd").innerHTML;
            document.getElementById("xd").innerHTML= tex.toUpperCase();
            var txt = document.getElementById("xxx").innerHTML;
            document.getElementById("xxx").innerHTML = txt.toLowerCase();
        }
    </script>


@endsection