<x-layout>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        {{-- article 1 --}}
        @if ($posts->count())
            <x-post-feature :post="$posts[0]">
            </x-post-feature>
        @else
            <p>No posts yet.</p>
            
        @endif
        
        @if ($posts->count() > 1)
            <div class="lg:grid lg:grid-cols-6">
                @foreach ($posts->skip(1) as $post)
                    <x-post-card :post="$post" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}">
                        
                    </x-post-card>
                    
                @endforeach
            </div>
        @endif
        
    </main>


</x-layout>

