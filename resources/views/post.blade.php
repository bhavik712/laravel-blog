<x-layout>
    <article class="article">
        <div class="title">{{ $post->title }}</a></div>
        <div class="body">
            {!! $post->body !!}
            {{ $post->category->name  }}
        </div>
    </article>
    <a href="/">Home</a>

</x-layout>



