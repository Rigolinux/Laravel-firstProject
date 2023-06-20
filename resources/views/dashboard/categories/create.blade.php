@extends('dashboard.layout')


@section('content')
<h1>Create Category</h1>
{{-- show errors form--}}

 @include('dashboard.fragments.errors-form')
<form action="{{route('category.store')}}"  method="POST">
    {{--laravel requieres a csrfthis a internal token to validate any request and can be protect
        for cyber attacks like cross site request forgery (CSRF)
        --}}
    @csrf
    @include('dashboard.fragments.formdataCategory')
    <button type="submit">Create</button>
</form>
@endsection