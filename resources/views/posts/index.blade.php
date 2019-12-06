@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div> 
                    <div class="col-md-10 col-sm-10">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>    
            </div>   
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection