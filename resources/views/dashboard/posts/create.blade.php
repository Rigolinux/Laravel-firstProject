<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>

    <form action="{{route('post.store')}}"  method="POST">
        {{--laravel requieres a csrfthis a internal token to validate any request and can be protect
            for cyber attacks like cross site request forgery (CSRF)
            --}}
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" placeholder="Title">

        <label for="">Slug</label>
        <input type="text" name="slug" placeholder="Slug">
        
        <label for="">Description</label>
        <input type="text" name="description" placeholder="Description">

        <label for="">Content</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea>

        <label for="">Category</label>
        <select name="category_id">
            @foreach ($categories as $name =>$id)
                <option value="{{$id}}">{{$name}}</option>
            @endforeach
        </select>

        <label>Posted</label>
        <select name="posted" id="">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <button type="submit">Create</button>
    </form>

</body>
</html>