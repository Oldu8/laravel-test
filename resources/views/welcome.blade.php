<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
      <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="max-w-md mx-auto my-2">
        <h2 class="text-3xl font-bold underline text-center">Hello mir!</h2>
        <div class="flex justify-between py-8">
            <a href="/posts" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">All Posts</a>
            <a href="/cars" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">All Cars</a>
        </div>
    </body>
</html>
