<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 {{-- add components --}}
@include('fragments.subview')

    {{ $name }}


    {{ $age }}
 <!-- Si se renderiza en html -->

    {{-- No se renderiza en html --}}

    {{ $city }}
    {{ $html }}

    {!! $html !!}

    @if(true)
        <h1>Verdadero</h1>
    @endif

    @foreach($array as $a)
        <div>
            dato: {{ $a }}
        </div>
    @endforeach
    <hr />
    @forelse($array as $a)
        <div>
            dato: {{ $a }}
        </div>
    @empty
        <div>
            No hay datos
        </div>
    @endforelse
</body>
</html>
