<x-layout>
    @foreach ($posts as $post) 
        <article class="article">
            <div class="title"><a href="posts/{{$post->id}}">{{$post->title}}</a></div>
            <div class="body">
                {{ $post->excerpt }}
                <br>
                {{ $post->category->name  }}
            </div>
        </article>
                
    @endforeach


</x-layout>

