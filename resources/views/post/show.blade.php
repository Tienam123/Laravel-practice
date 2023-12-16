@extends('layouts.main')
@section('content')
    <div>
        <div class="card-body">
            <div class="card-body__title">{{$post->id}}. {{$post->title}}</div>
            <div class="card-body__wrapper">{{$post->content}}</div>
            <a class="btn btn-primary" href="{{route('post.edit',$post->id)}}">Редактировать</a>
            <form action="{{route('post.delete',$post)}}" method="post">
                @csrf
                @method('delete')
                <button class="btn-primary btn m-3" type="submit">Delete</button>
            </form>

            <a class="btn btn-primary" href="{{route('post.index')}}">Назад</a>
        </div>
    </div>
@endsection
