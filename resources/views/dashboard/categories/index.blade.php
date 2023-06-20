@extends('dashboard.layout')

@section('content')
    <a href="{{route('category.create')}}">Create Category</a>
    <h1>Posts</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
             
                <th>Categoria</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->name}}</td>
                <td>{{$p->slug}}</td>
                <td>
                    <a href="{{route('category.show',$p->id)}}">Mostrar</a>
                    <a href="{{route('category.edit',$p->id)}}">Editar </a>
                    <form action="{{route('category.destroy',$p->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$category->links()}}

@endsection