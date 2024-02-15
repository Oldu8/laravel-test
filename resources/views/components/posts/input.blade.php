@props([
	'label',
	'name',
	'defaultValue' => ''
])

<div class="mb-4 flex flex-col">
	<label for="{{ $name }}" class="font-semibold">{{ $label }}</label>
	<input name="{{ $name }}" type="text" class="border p-1 rounded" value="{{ $errors->any() ? old($name) : $defaultValue }}"> 
     @error($name)
    	<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{ $message }}</div>
     @enderror
</div>