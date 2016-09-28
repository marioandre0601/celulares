@extends('layouts.content')
@section('title','Input')
@section('content')
    <div class="form-group ">
        <input type="number" style="border-color: #2aabd2" id="edad" placeholder="Ingresa Edad">
        <button type="button" class="btn btn-primary" onclick="calcular()">
            Calcular
        </button>
        <p id="demo"></p>
    </div>
    <script>
        function calcular(){
            var age,votea;
            age = document.getElementById("edad").value;
            votea = (age<18) ? "Menor de Edad ":"Mayor de Edad";
            document.getElementById("demo").innerHTML = votea + " to vote.";
        }
    </script>

@endsection