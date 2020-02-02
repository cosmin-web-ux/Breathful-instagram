@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 p-5">
            <img src="img/breathful_hole.png" class="rounded-circle">
        </div>
        <div class="col-md-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline"><h1>{{$user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>24k</strong> followers</div>
                <div class="pr-5"><strong>548</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div class="pb-3"><a href="http://breathfulonline.com" style="color: #2211ff">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <img src="/storage/{{$post->image}}" class="w-100 h-100">
        </div>
        @endforeach
    </div>
</div>
@endsection
