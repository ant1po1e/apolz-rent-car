<div class="w-full mx-auto">
    <h2 class="text-lg font-semibold mb-2">Edit User</h2>
    <form class="min-w-full bg-white border border-gray-200 rounded-md shadow-md p-5">
        @csrf
        <!-- Username -->
        @error('name')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <div>
            <input type="text" wire:model="name" name="name" placeholder="Name" value="{{ old('name') }}"
                class="w-full px-2 py-1.5 mb-3 rounded-lg border border-gray-300" required />
        </div>

        <!-- Email -->
        @error('email')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <div>
            <input type="text" wire:model="email" name="email" placeholder="Email address" value="{{ old('email') }}"
                class="w-full px-2 py-1.5 mb-3 rounded-lg border border-gray-300" required />
        </div>

        <!-- Password -->
        @error('password')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <div>
            <input type="password" wire:model="password" name="password" placeholder="Password"
                value="{{ old('password') }}" class="w-full px-2 py-1.5 mb-3 rounded-lg border border-gray-300" />
        </div>

        <!-- Role -->
        @error('role')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <div>
            <select id="role" wire:model="role" class="w-full px-2 py-1.5 mb-3 rounded-lg border border-gray-300">
                <option value="">---Choose---</option>
                <option value="owner">Owner</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <button wire:click="update"
            class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm w-full sm:w-auto px-3 py-2 text-center">Submit</button>
    </form>
</div>
