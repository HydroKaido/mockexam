@extends('layout.layout')
<div class="bg-dark d-flex justify-content-between align-items-center">
    <div class="text-white ms-2">
        Blog Post
    </div>
    <div class="d-flex my-auto mt-3">
        <div>
            <form action="{{route('logout.post')}}" method="post">
            @csrf
            @method('POST')
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
        <div class="me-2">
            <a href="{{url('/editpost')}}" class="btn btn-success ms-2">Edit/Delete Blog</a>
        </div>
        <div class="me-2">
            <a href="{{url('/createpost')}}" class="btn btn-success ms-2">Create Blog</a>
        </div>
    </div>
</div>

<div class="" style="background-color:#eee !important">
    <div class="bg-gray m-2 mb-3">
        @foreach ($posts as $post)
            <p class="h2">{{$post->title}}</p>
            <p class="">{{$post->description}}</p>
            <div>
                <a href="{{route('update.view', $post->id)}}">Edit Page</a>
            </div>
            <form action="{{route('delete.post', $post->id)}}" method="post">
                @csrf
                @method('DELETE');
                <button type="submit">Delete Data</button>
            </form>
        @endforeach
    </div>
</div>





