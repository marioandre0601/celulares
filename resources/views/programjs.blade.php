@extends('layouts.content')
@section('title','Programas JS')
@section('content')
    <button onclick="myFunction()">
        Click
    </button>
    <p id="demo"></p>
    <p id="demo2"></p>
    <script>
        function myFunction() {
            var x= 5;
            var y=6;
            var z= x+y;
            document.getElementById("demo").innerHTML=z;
            document.getElementById("demo2").innerHTML=Date();
        }
     </script>


@endsection