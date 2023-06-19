@extends('dashboard.layout')


@section('content')

<h1> Post: {{ $post->title}}</h1>
{{-- show errors form--}}

<p> <strong>Slug: </strong> {{ $post->slug}}</p>
<div> <strong>Content: </strong> {{ $post->content}}</div>
<p> <strong>Posted: </strong>  {{$post->posted}}   </p>

@endsection