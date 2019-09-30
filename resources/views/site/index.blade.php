@extends('main')

@section('featured')

<div class="featured" style="margin-bottom: 0!important;">
    <div class="tagline" style="margin-left: 100px; margin-top: 50px; color: #dfdfdf">
        <h1>Welcome!</h1>
        <p>This is a test.</p>
    </div>
</div>

@stop

@section('content')

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-blue">
                <h3>Announcements</h3>
            </div>
            <div class="card-body">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi maxime
                perferendis expedita dolore aliquid repellendus. Iusto maiores,
                sequi earum qui eos aspernatur incidunt. Temporibus aperiam
                delectus nisi veritatis rerum sit.
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Up Coming Activities</h3>
            </div>
            <div class="card-body">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi maxime
                perferendis expedita dolore aliquid repellendus. Iusto maiores,
                sequi earum qui eos aspernatur incidunt. Temporibus aperiam
                delectus nisi veritatis rerum sit.
            </div>
        </div>
    </div>
</div>

<div class="row col" style="margin-top: 20px">
    <h2>MDC Updates</h2>
</div>
<div class="row">
    @foreach($p3 as $post)

    <div class="col-lg-4">
        <a href='{{url("/post/$post->id")}}' class="blog-title-link"><h3 class="blog-title">{{$post->title}}</h3></a>
        <p class="blog-details">{{$post->user->name}} <br>{{$post->created_at}}</p>
        <p>
            {{$post->snip(100)}}
            <br>
            <a href='{{url("/post/$post->id")}}'>More..</a>
        </p>
    </div>

    @endforeach
</div>

<div class="row ads">
    <div class="col">
        <a href="https://mikrotik.com/training/academy" target="_blank">
            <img src="{{asset('images/mikrotik_academy.png')}}" alt="mikrotik academy" width="300">
        </a>
    </div>
</div>

@stop
