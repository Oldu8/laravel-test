<x-layout.main title="My posts" title="Create post">
        <div class='ml-4 mt-6 font-semibold text-gray-600 mb-2'>
            <form action="/posts" method="POST" class="flex flex-col gap-2">
                @csrf  
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input name="title" type="text" placeholder="Title" class="border p-1 rounded" value="{{ old('title') }}">
                <input name="description" type="text" placeholder="Description" class="border p-1 rounded " value="{{ old('description') }}">
                <hr>
                @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <hr>
                @endif
                <input type="submit" value="Create" class="border p-1 rounded bg-blue-500 text-white ">
        </div>
</x-layout.main>
