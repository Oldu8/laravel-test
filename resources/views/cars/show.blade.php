<x-layout.cars-wrap  title="{{ $car->brand }}" h1="Car {{ $car->id }}: {{ $car->brand }}">
        <div class='ml-4 mt-4 font-semibold text-gray-600 mb-2'>
            <p>Model: {{ $car->model }}</p>
            <p>Model: {{ $car->vin }}</p>
            <p>Transmission: {{ $car->transmission }}</p>
        </div>
        <button class="bg-red-500 text-white rounded p-2">Delete</button>
 </x-layout.cars-wrap>
