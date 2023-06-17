@extends('dashboard.layout')


@section('content')
<h1>Create Post</h1>
{{-- show errors form--}}

 @include('dashboard.fragments.errors-form')
<form action="{{route('post.store')}}"  method="POST">
    {{--laravel requieres a csrfthis a internal token to validate any request and can be protect
        for cyber attacks like cross site request forgery (CSRF)
        --}}
    @csrf
    <label for="">Title</label>
    <input type="text" name="title" placeholder="Title"
    {{-- you can set old values when i need it--}}
    value="{{ old('title','no title')}}"
    >

    <label for="">Slug</label>
    <input type="text" name="slug" placeholder="Slug"
    value="{{ old('slug','no slug')}}"
    >
    
    <label for="">Description</label>
    <input type="text" name="description" placeholder="Description"
    value="{{ old('description','no description')}}"
    >

    <label for="">Content</label>
    <textarea name="content" id="" cols="30" rows="10">
        {{ old('content','no content')}}
    </textarea>

    <label for="">Category</label>
    <select name="category_id">
        @foreach ($categories as $name =>$id)
            <option  
           "{{old('category_id','') == $id ? 'selected': ''}}"
            value="{{$id}}">{{$name}}</option>
        @endforeach
    </select>

    <label>Posted</label>
    <select name="posted" id="">
        <option 
        {{old('posted','') == 'yes' ? 'selected': ''}}
        value="yes">Yes</option>
        <option
        {{old('posted','') == 'no' ? 'selected': ''}}
        value="no">No</option>
    </select>

    <button type="submit">Create</button>
</form>
@endsection