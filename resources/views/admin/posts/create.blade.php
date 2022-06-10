@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10  border-bottom">
            <h1>
                Creazione nuovo post
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
    <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <h5 class="pt-2">Titolo</h5>
            </div>
            <div class="col-12">
                <input class="w-100 p-1" type="text" name="title" placeholder="Inserisci il titolo"
                    value="{{old('title')}}" required>
            </div>
            <div class="col-12">
                <h5 class="pt-2">Categoria</h5>
            </div>
            <div class="col-12">
                <select name="category_id">
                    <option value="">Scegli categoria</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{$category->id == old('category_id')?'selected':''}}
                        >{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="d-block invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="col-12">
                <h5 class="pt-2">Inserisci immagine</h5>
            </div>
            <div class="col-12">
                <input type="file" name="image">
            </div>
            <div class="col-12">
                <h5 class="pt-2">Contenuto</h5>
            </div>
            <div class="col-12">
                <textarea name="content" class="w-100" rows="10" placeholder="Inserisci il contenuto"></textarea>
            </div>
            <div class="col-12">
                <h5 class="pt-2">Tags</h5>
            </div>
            <div class="col-12">
                @foreach($tags as $tag)
                <input type="checkbox" value="{{$tag->id}}" name="tags[]" {{in_array($tag->id,
                old('tags',[]))?'checked':''}}>
                <span class="form-check-label">{{$tag->name}}</span>

                @endforeach
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success text-white">Crea post</button>
            </div>
        </div>
    </form>

</div>
@endsection