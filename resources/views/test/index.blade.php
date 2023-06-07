
{{-- import the master layout --}}
@extends('layout.master')

{{-- define the title of the page --}}
@section('title', 'Test')

{{-- define the content of the page --}}
@section('content')
    <h1>Test</h1>
    <p>Esta es una prueba</p>
@forelse ($array as $a)
<div class="box item">

    <p>{{ $a }}</p>
</div>
@empty
    <p>No hay elementos</p>

@endforelse

@endsection
