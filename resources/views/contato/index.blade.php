
@extends('layout.site')
<!--<html>-->
<!--<head>-->
@section('titulo', 'Contatos')

<!--</head>-->
@section('conteudo')
<!--<body>-->
    @foreach($contatos as $contato)
        <p>{{ $contato->nome }}</p>
        <p>{{ $contato->tel }}</p>
    @endforeach

<!--</body>-->
@endsection()
<!--</html>-->


