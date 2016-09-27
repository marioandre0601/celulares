@extends('layouts.content')
@section('title',' JSSS')
@section('content')
    <h1 id="demo">Hello</h1>
    <script>
        var str= "Hola mario";
        document.getElementById("demo").innerHTML= str.charAt(0);
    </script>
@endsection