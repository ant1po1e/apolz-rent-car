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
                <td class="px-4 py-2 text-gray-800">
                    <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                        <img src="{{ asset('storage/car/' . $data->picture) }}" class="w-[150px]" alt="{{ $data->brand }}">
                    </button></td>
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

    <!-- Main modal -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5  rounded-t">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="static-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="pb-4 md:pb-5 flex justify-center">
                    <img src="{{ asset('storage/car/' . $data->picture) }}" class="w-[600px]" alt="{{ $data->brand }}">
                </div>
            </div>
        </div>
    </div>

    @if ($addPage)
        @include('car.create')
    @endif
    @if ($editPage)
        @include('car.edit')
    @endif
</div>
