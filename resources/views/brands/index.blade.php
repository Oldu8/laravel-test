<x-layout.brands-wrap title="Brands">
        <div class='ml-4 mt-4'>
            @if($brands->isNotEmpty())
            @foreach ($brands as $brand)
            <li class='font-semibold text-gray-600 mb-2'>
                <a href="{{ route('brands.show', $brand) }}" class="text-blue-500 hover:underline">
                    <strong>Brand: {{ $brand->title }}</strong>
                </a>
                <p>Description: {{ $brand->description }}</p>
                <a href="{{route('brands.edit', $brand)}}" class="text-blue-300 hover:underline">Edit Brand</a>
            </li>
            @endforeach
            @else
            <p class="text-500 font-semibold text-lg text-center">No brands found</p>
            @endif
        </div>
</x-layout.brands-wrap>
