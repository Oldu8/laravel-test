<x-layout.cars-wrap title="My Cars">
        <div class='ml-4 mt-4'>
            @foreach ($cars as $car)
            <li class='font-semibold text-gray-600 mb-2'>
                <a href="{{ route('cars.show', $car) }}" class="text-blue-500 hover:underline">
                    <strong>Brand: {{ $car->brand->title }}</strong>
                </a>
                <a href="{{ route('cars.catalog', $car) }}" class="text-blue-500 hover:underline">
                    Car with comments
                </a>
                <p>Country: {{ $car->brand->country->title }}</p>
                <p>Model: {{ $car->model }}</p>
                <p>Transmission: {{ $car->transmission }}</p>
                <p>VIN: {{ $car->vin }}</p>
                <a href="{{route('cars.edit', $car)}}" class="text-blue-300 hover:underline">Edit Car</a>
            </li>
            @endforeach
        </div>
</x-layout.cars-wrap>
