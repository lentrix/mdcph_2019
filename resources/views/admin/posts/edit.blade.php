@extends('admin.layout')

@section('content')

<div class="row">
    <div class="col col-md-3">
        <h3>Post Details</h3>
        <table class="table table-striped">
            <tr>
                <th>Author</th>
                <td>{{$post->user->name}}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{{$post->created_at->toFormattedDateString()}}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{{$post->created_at->toFormattedDateString()}}</td>
            </tr>
        </table>
        <div class="card">
            <div class="card-header">
                Change Log
            </div>
            <ul class="list-group">
                <li class="list-group-item">Sam Smith - Sep 30, 2019</li>
                <li class="list-group-item">Sam Smith - Sep 30, 2019</li>
                <li class="list-group-item">Sam Smith - Sep 30, 2019</li>
            </ul>
        </div>
        <br>

        <a href="{{url('')}}" class="btn btn-danger btn-block">Archive Post</a>
        @if($post->published)
        <a href="{{url('')}}" class="btn btn-warning btn-block">Unpublish Post</a>
        @else
        <a href="{{url('')}}" class="btn btn-success btn-block">Publish Post</a>
        @endif
    </div>
    <div class="col col-md-9">

        @include('admin.messages')

        {{Form::model($post, ['url'=>"/admin/post/$post->id", 'method'=>'patch'])}}

        @include('admin.posts._form')

        <div class="form-group">
            <button class="btn btn-primary float-right">Save Changes</button>
        </div>

        {{Form::close()}}
    </div>
</div>

@stop
