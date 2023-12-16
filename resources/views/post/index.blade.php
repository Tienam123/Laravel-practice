@extends('layouts.main')
@section('content')
    <a class="btn-primary btn m-3" href="{{route('post.create')}}">Создать пост</a>
    <ul class="page__menu-posts post-list">
        @foreach($posts as $post)
            <li class="m-3"><a href="{{route('post.show',$post->id)}}">{{$post->id}}. {{$post->title}}</a>
            </li>
        @endforeach
    </ul>
@endsection
