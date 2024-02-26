<x-layout.cars-wrap title="Add car">
        <div class='ml-4 mt-4'>
            <x-form action="{{ route('cars.store') }}">
                <div class='mb-2'>
                    <x-form-input name='brand' label="Auto brand "/>
                </div>
                <div class='mb-2'>
                    <x-form-input name='model' label="Auto model "/>
                </div>
                <div class='mb-2 '>
                    <x-form-select name='transmission' label="Transmission " :options="$transmissions" placeholder="Choose transmission"/>
                </div>
            <button class="bg-blue-500 text-white rounded p-2">Submit</button>
            </x-form>
        </div>
</x-layout.cars-wrap>
