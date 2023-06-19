@extends('dashboard.layout')


@section('content')

<h1>Edit Post: {{ $post->title}}</h1>
{{-- show errors form--}}

 @include('dashboard.fragments.errors-form')

<form action="{{route('post.update',$post->id)}}"  method="POST">
    {{--laravel requieres a csrfthis a internal token to validate any request and can be protect
        for cyber attacks like cross site request forgery (CSRF)
        --}}
    @csrf
    @method('PUT')
    @include('dashboard.fragments.formdata')

    <button type="submit">Create</button>
</form>

@endsection