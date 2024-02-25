@props(['title', 'h1' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
      <script src="https://cdn.tailwindcss.com"></script>
      <!-- @vite('resources/css/app.scss') -->
</head>
<body class="antialiased">
<section class="max-w-md mx-auto my-2">
	<header class="flex justify-between">
		<a href="/posts">Home </a>
		<a href="/posts/create/">Create Post</a>
	</header>
	<h1 class="text-3xl font-bold underline text-center">{{ $h1 ?? $title}}</h1>
    {{$slot}}
</section>
    <!-- @vite('resources/js/app.js') -->
</body>
</html>
