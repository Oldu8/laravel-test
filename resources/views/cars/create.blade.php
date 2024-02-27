<x-layout.cars-wrap title="Add car">
        <div class='ml-4 mt-4'>
            <x-form action="{{ route('cars.store') }}">
                @include('cars.form')
            <button class="bg-blue-500 text-white rounded p-2">Submit</button>
            </x-form>
        </div>
</x-layout.cars-wrap>
