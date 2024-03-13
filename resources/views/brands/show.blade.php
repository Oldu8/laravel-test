<x-layout.brands-wrap  title="{{ $brand->title }}">
        <div class='ml-4 mt-4 font-semibold text-gray-600 mb-2'>
            <p>Title: {{ $brand->title }}</p>
            <p>Description: {{ $brand->description }}</p>
            <ol>
                @foreach($brand->cars as $car)
                    <li>{{ $car->model }}</li>
                @endforeach
            </ol>
        </div>
        <x-form action="{{ route('brands.destroy', $brand->id) }}" method="DELETE"> 
            <button class="bg-red-500 text-white rounded p-2">Delete</button>
        </x-form>
 </x-layout.brands-wrap>
