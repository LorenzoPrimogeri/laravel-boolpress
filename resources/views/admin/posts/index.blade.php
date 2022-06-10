@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10  border-bottom">
            <h1>
                Tutti i Posts
            </h1>
        </div>
        <div class="col-2  border-bottom d-flex justify-content-end">
            <div>
                <a class="btn btn-primary" href="{{route('admin.posts.create')}}">Crea nuovo post</a>
            </div>
        </div>
    </div>
    <div class="row py-2 ">
        <div class="col-3 border-bottom">
            <h4>ID</h4>
        </div>
        <div class="col-3 border-bottom">
            <h4>Titolo</h4>
        </div>
        <div class="col-3 border-bottom">
            <h4>Slug</h4>
        </div>
        <div class="col-3 border-bottom">
            <h4>Azioni</h4>
        </div>
    </div>
    <div class="row py-2 ">
        @foreach ($posts as $item)
        <div class="col-3 border-bottom">
            <p>{{$item->id}}</p>
        </div>
        <div class="col-3 border-bottom">
            <p>{{$item->title}}</p>
        </div>
        <div class="col-3 border-bottom">
            <p>{{$item->slug}}</p>
        </div>
        <div class="col-3 border-bottom">
            <a href="{{route('admin.posts.show', $item->id)}}">show </a>/
            <a href="{{route('admin.posts.edit', $item->id)}}">edit </a>/
            <form class="d-inline" action="{{route('admin.posts.destroy',$item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input name="_method" type="hidden" value="DELETE">

                <button class="border-0 text-primary bg-transparent" onclick="return confirm('Are your sure?')"
                    type="submit">remove</button>
            </form>
        </div>
        @endforeach

    </div>

</div>
@endsection