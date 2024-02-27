<x-layout.cars-wrap title="Edit car #{{$car->id}}">
        <div class='ml-4 mt-4'>
            <x-form action="{{ route('cars.update', $car) }}">
                @bind($car)
                    @include('cars.form')
                @endbind
            <button class="bg-blue-500 text-white rounded p-2">Submit</button>
            </x-form>
        </div>
</x-layout.cars-wrap>
