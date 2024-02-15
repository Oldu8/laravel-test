<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
      <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased py-10">
        <section class="max-w-md mx-auto my-2">
        <header class="flex justify-between py-8">
            <a href="/posts">Home</a>
            <a href="/posts/create/">Create Post</a>
        </header>
        <h1 class="text-3xl font-bold underline text-center">Post {{ $post->id }}: {{ $post->title }}</h1>
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
    </section>
</body>
</html>
