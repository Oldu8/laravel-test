<x-layout.cars-wrap  title="{{ $car->brand->title }}" h1="Car {{ $car->id }}: {{ $car->brand->title }}">
        <div class='ml-4 mt-4 font-semibold text-gray-600 mb-2'>
            <p>Model: {{ $car->model }}</p>
            <p>VIN: {{ $car->vin }}</p>
            <p>{{ $car->status->label() }}</p>
        </div>
        @if ($car->canDelete)
        <x-form action="{{ route('cars.destroy', $car->id) }}" method="DELETE"> 
            <button class="bg-red-500 text-white rounded p-2">Delete</button>
        </x-form>
        @endif

        <x-comments.create :id="$car->id" model='car' />
        <x-comments.viewer :model="$car" />
 </x-layout.cars-wrap>
