<div class="w-full mx-auto">
    <button wire:click="create"
        class="mt-3 text-white font-medium rounded-lg text-sm px-3 py-2 me-2 mb-2 bg-green-600 hover:bg-green-700">
        Add Car
    </button>
    <table class="min-w-full bg-white border border-gray-200 rounded-md shadow-md">
        <thead>
            <tr class="border-b border-gray-200">
                <th class="px-4 py-2 text-left text-gray-600 font-medium">#</th>
                <th class="px-4 py-2 text-left text-gray-600 font-medium">License</th>
                <th class="px-4 py-2 text-left text-gray-600 font-medium">Brand</th>
                <th class="px-4 py-2 text-left text-gray-600 font-medium">Type</th>
                <th class="px-4 py-2 text-left text-gray-600 font-medium">Price</th>
                <th class="px-4 py-2 text-left text-gray-600 font-medium">Picture</th>
                <th class="px-4 py-2 text-left text-gray-600 font-medium">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($car as $data)
            <tr class="border-b border-gray-200">
                <td class="px-4 py-2 text-gray-800">
                    {{ ($car->currentPage() - 1) * $car->perPage() + $loop->iteration }}</td>
                <td class="px-4 py-2 text-gray-800">{{ $data->license }}</td>
                <td class="px-4 py-2 text-gray-800">{{ $data->brand }}</td>
                <td class="px-4 py-2 text-gray-800">{{ $data->type }}</td>
                <td class="px-4 py-2 text-gray-800">{{ $data->price }}</td>
                <td class="px-4 py-2 text-gray-800"><img src="{{ asset('storage/car/' . $data->picture) }}" class="w-[250px]" alt="{{ $data->brand }}"></td>
                <td class="px-4 py-2 text-gray-800">
                    <button wire:click="edit({{ $data->id }})"
                        class="mt-3 text-white font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 bg-yellow-500 hover:bg-yellow-600">
                        Edit
                    </button>
                    <button wire:click="destroy({{ $data->id }})"
                        class="mt-3 text-white font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 bg-red-500 hover:bg-red-600">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Pagination Links -->
    <div class="mt-2">
        {{ $car->links('vendor.livewire.tailwind') }}
    </div>

    @if ($addPage)
        @include('car.create')
    @endif
    @if ($editPage)
        @include('car.edit')
    @endif
</div>
