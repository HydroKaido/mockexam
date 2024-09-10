<div class="" style="background-color:#eee !important">
    <div class="bg-gray m-2 mb-3">
        @foreach ($posts as $post)
            <p>{{$post->title}}</p>
            <p>{{$post->description}}</p>
        @endforeach
    </div>
</div>