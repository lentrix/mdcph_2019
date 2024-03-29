@extends('admin.layout')

@section('content')

    <h1>Posts</h1>
    <table class="table table-striped">
        <thead>
            <tr class="bg-primary text-white">
                <th>Title</th>
                <th>Author</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)

            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <a href='{{url("/admin/posts/$post->id")}}' title="Edit this post">
                        <img src="{{asset('images/icons/edit.png')}}"
                                alt="edit" style="width:18px; height:18px">
                    </a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

@stop
