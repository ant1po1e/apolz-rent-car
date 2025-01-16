<div class="w-full mx-auto">
    <h2 class="text-lg font-semibold mb-4">Users Table</h2>
    <table class="min-w-full bg-white border border-gray-200 rounded-md shadow-md">
        <thead>
            <tr class="border-b border-gray-200">
                <th class="px-4 py-2 text-left text-gray-600 font-medium">#</th>
                <th class="px-4 py-2 text-left text-gray-600 font-medium">Name</th>
                <th class="px-4 py-2 text-left text-gray-600 font-medium">Email</th>
                <th class="px-4 py-2 text-left text-gray-600 font-medium">Role</th>
                <th class="px-4 py-2 text-left text-gray-600 font-medium">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $data)
            <tr class="border-b border-gray-200">
                <td class="px-4 py-2 text-gray-800">
                    {{ ($user->currentPage() - 1) * $user->perPage() + $loop->iteration }}</td>
                <td class="px-4 py-2 text-gray-800">{{ $data->name }}</td>
                <td class="px-4 py-2 text-gray-800">{{ $data->email }}</td>
                <td class="px-4 py-2 text-gray-800">{{ $data->role }}</td>
                <td class="px-4 py-2 text-gray-800">
                    <button wire:click="edit({{ $data->id }})"
                        class="mt-3 text-white font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 bg-green-600 hover:bg-green-700">
                        Edit
                    </button>
                    <button wire:click="destroy({{ $data->id }})"
                        class="mt-3 text-white font-medium rounded-lg text-sm px-3 py-1.5 me-2 mb-2 bg-green-600 hover:bg-green-700">
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Pagination Links -->
    <div class="mt-4">
        {{ $user->links('vendor.livewire.tailwind') }}
    </div>


    <button wire:click="create"
        class="mt-3 text-white font-medium rounded-lg text-sm px-3 py-2 me-2 mb-2 bg-green-600 hover:bg-green-700">
        Add User
    </button>

    @if ($addPage)
        @include('users.create')
    @endif
    @if ($editPage)
        @include('users.edit')
    @endif
</div>
