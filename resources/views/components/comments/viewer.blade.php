@props([
    'model',
])

@php 
// dd($model);
@endphp
<div class='ml-4 mt-4'>
    @foreach ($model->comments as $comment)
        <div class='font-semibold text-gray-600 mb-2 bg-green-100 p-2'>
            {{ $comment->text }}
        </div>
    @endforeach
</div>
