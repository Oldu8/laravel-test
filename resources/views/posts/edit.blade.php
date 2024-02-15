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
    <section class="max-w-md mx-auto my-10">
        <header class="flex justify-between">
            <a href="/posts">Home</a>
            <a href="/posts/create/">Create Post</a>
        </header>
        <h1 class="text-3xl font-bold underline text-center">Edit Post</h1>
        <div class='ml-4 mt-6 font-semibold text-gray-600 mb-2'>
            <form action="{{ route('posts.update', ['id' => $post->id]) }}"  method="POST" class="flex flex-col gap-2">
                @method('PUT')
                @csrf  
                <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                <x-posts.input name="title" label="Post title" default-value="{{ $post->title }}"/> <!-- :default-value="$post->title" - alternative syntax -->
                <x-posts.input name="description" label="Post description" :default-value="$post->description"/>
                <!-- <input name="description" type="text" placeholder="Description" class="border p-1 rounded " value="{{ $post->description }}">
                @error('description')
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{ $message }}</div>
                @enderror('description') -->
                <input type="submit" value="Update" class="border p-1 rounded bg-blue-500 text-white ">
        </div>
    </section>
</body>
</html>
