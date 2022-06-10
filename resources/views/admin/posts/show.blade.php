@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10  border-bottom">
            <h1>
                Dettaglio post
            </h1>
        </div>
        <div class="col-2  border-bottom d-flex justify-content-end">
            <div>
                <a class="btn btn-primary" href="{{route('admin.posts.index')}}">Tutti i posts</a>
            </div>
        </div>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h5 class="pt-2">Titolo</h5>
        </div>
        <div class="col-12">
            <p class="w-100 p-1"> {{$post->title}} </p>
        </div>
        <div class="col-12">
            <h5 class="pt-2">cover</h5>
        </div>
        <div class="col-12">
            <img class="w-100" src="{{asset('storage/'. $post->img)}}" alt="">
        </div>
        <div class="col-12">
            <h5 class="pt-2">Category</h5>
        </div>
        <div class="col-12">
            <p class="w-100 p-1"> {{$category->name}} </p>
        </div>
        <div class="col-12">
            <h5 class="pt-2">Contenuto</h5>
        </div>
        <div class="col-12">
            <p class="w-100 p-1"> {{$post->content}} </p>
        </div>
        <div class="col-12">
            <h5 class="pt-2">Tags</h5>
        </div>
        <div class="col-12">
            @foreach ($post->tags as $tag)
            <p class="w-100 p-1">{{$tag->name}} </p>
            @endforeach

        </div>
    </div>
</div>
@endsection