<x-layout.main title="My posts" title="{{ $post->title }}" h1="Post {{ $post->id }}: {{ $post->title }}">
        <div class='ml-4 mt-4 font-semibold text-gray-600 mb-2'>
            <p>Description: {{ $post->description }}</p>
        </div>
        <div class="ml-4 mt-4">
            <form class="flex flex-col gap-2" action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white rounded p-2">Delete</button>
            </form>
        </div>
</x-layout.main>
