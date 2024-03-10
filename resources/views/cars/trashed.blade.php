<x-layout.cars-wrap title="Deleted cars">
        <div class='ml-4 mt-4'>
            @foreach ($cars as $car)
            <li class='font-semibold text-gray-600 mb-2'>
                <strong>Brand: {{ $car->brand }}</strong>
                <p>Model: {{ $car->model }}</p>
                <p>Transmission: {{ $car->transmission }}</p>
                <x-form method='put' action="{{ route('cars.restore', [$car->id]) }}">
                    <button class="bg-blue-500 text-white rounded p-2">Restore</button>    
                </x-form>
            </li>
            @endforeach
        </div>
</x-layout.cars-wrap>
