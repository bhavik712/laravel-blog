<x-layout>
    <article class="article">
        <div class="title">{{ $post->title }}</a></div>
        <div class="category"><a href="/categories/{{ $post->category->name }}">{{ $post->category->name  }}</a></div>
        <div class="body">
            {!! $post->body !!}
            
        </div>
    </article>
    <a href="/">Home</a>

</x-layout>



