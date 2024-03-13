<x-layout.cars-wrap  title="{{ $car->brand->title }}" h1="Car {{ $car->id }}: {{ $car->brand->title }}">
        <div class='ml-4 mt-4 font-semibold text-gray-600 mb-2'>
            <p>Model: {{ $car->model }}</p>
            <p>VIN: {{ $car->vin }}</p>
            <p>Transmission: {{ Arr::get($transmissions, $car->transmission) }}</p>
        </div>
        <x-form action="{{ route('cars.destroy', $car->id) }}" method="DELETE"> 
            <button class="bg-red-500 text-white rounded p-2">Delete</button>
        </x-form>
 </x-layout.cars-wrap>
