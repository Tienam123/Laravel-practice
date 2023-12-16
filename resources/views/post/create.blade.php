@extends('layouts.main')
@section('content')
    <div>
        <form class="col-3 m-auto" action="{{route("post.store")}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                <div id="title" class="form-text">Input the title</div>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <input type="text" name="content" class="form-control" id="content" placeholder="Content">
                <div id="content" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <button type="submit" class="btn m-1 btn-primary">Submit</button>
            <a class="btn m-1 btn-primary">Назад</a>
        </form>
    </div>
@endsection
