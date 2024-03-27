@props([
    'id',
    'model',
])
<div class='ml-4 mt-4'>
            <x-form action="{{ route('comments.store') }}">
                <input type="hidden" name="id" value="{{ $id }}">
                <input type="hidden" name="model" value="{{ $model }}">
            <x-form-textarea name="text" label="Text" />
            <button class="bg-blue-500 text-white rounded p-2">Submit</button>
            </x-form>
        </div>
