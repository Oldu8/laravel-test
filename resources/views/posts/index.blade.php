<x-layout.main title="My posts">
        <div class='ml-4 mt-4'>
            @foreach ($posts as $post)
            <li class='font-semibold text-gray-600 mb-2'>
                <a href="/posts/{{ $post->id }}" class="text-blue-500 hover:underline">
                    <strong>Title: {{ $post->title }}</strong>
                </a>
                <p>Description: {{ $post->description }}</p>
                <a href="/posts/{{ $post->id }}/edit" class="text-blue-300 hover:underline">Edit Post</a>
            </li>
            @endforeach
        </div>
</x-layout.main>
