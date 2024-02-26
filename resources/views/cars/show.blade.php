<x-layout.cars-wrap  title="{{ $car->brand }}" h1="Car {{ $car->id }}: {{ $car->brand }}">
        <div class='ml-4 mt-4 font-semibold text-gray-600 mb-2'>
            <p>Model: {{ $car->model }}</p>
            <p>Transmission: {{ $car->transmission }}</p>

        </div>
 </x-layout.cars-wrap>
