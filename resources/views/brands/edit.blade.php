<x-layout.brands-wrap title="Edit brand #{{$brand->id}}">
        <div class='ml-4 mt-4'>
            <x-form action="{{ route('brands.update', $brand) }}" method="PUT">
                @bind($brand)
                    @include('brands.form')
                @endbind
            <button class="bg-blue-500 text-white rounded p-2">Submit</button>
            </x-form>
        </div>
</x-layout.brands-wrap>
