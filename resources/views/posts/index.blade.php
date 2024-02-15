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
<body class="antialiased">
    <section class="max-w-md mx-auto my-2">
        <header class="flex justify-between">
            <a href="/posts">Home</a>
            <a href="/posts/create/">Create Post</a>
        </header>
        <h1 class="text-3xl font-bold underline text-center">My posts</h1>
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
    </section>
</body>
</html>
