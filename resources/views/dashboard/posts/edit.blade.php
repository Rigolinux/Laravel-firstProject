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
    <label for="">Title</label>
    <input type="text" name="title" placeholder="Title" value="{{ $post->title}}">

    <label for="">Slug</label>
    <input type="text" name="slug" placeholder="Slug" value="{{ $post->slug}}">
    
    <label for="">Description</label>
    <input type="text" name="description" placeholder="Description" value="{{ $post->description }}">

    <label for="">Content</label>
    <textarea name="content" id="" cols="30" rows="10" >{{ $post->content}}</textarea>

    <label for="">Category</label>
    <select name="category_id">
        @foreach ($categories as $name =>$id)
            <option {{ $post->category_id == $id ? 'selected': '' }}  value="{{$id}}">{{$name}}</option>
        @endforeach
    </select>

    <label>Posted</label>
    <select name="posted" id="">
        <option {{ $post->posted == 'yes' ? 'selected': '' }} value="yes">Yes</option>
        <option  {{ $post->posted == 'no' ? 'selected': '' }} value="no">No</option>
    </select>

    <button type="submit">Create</button>
</form>

@endsection