@extends('dashboard.layout')

@section('content')
    <a href="{{route('post.create')}}">Create Post</a>
    <h1>Posts</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Categoria</th>
                <th>Posted </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->title}}</td>
                <td></td>
                <td>{{$p->posted}}</td>
                <td>
                    <a href="{{route('post.show',$p->id)}}">Mostrar</a>
                    <a href="{{route('post.edit',$p->id)}}">Editar </a>
                    <form action="{{route('post.destroy',$p->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$posts->links()}}

@endsection