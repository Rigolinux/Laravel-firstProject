@extends('dashboard.layout')


@section('content')

<h1> Categories: {{ $category->name}}</h1>
{{-- show errors form--}}

<p> <strong>Slug: </strong> {{ $category->slug}}</p>


@endsection