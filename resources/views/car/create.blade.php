<div class="w-full mx-auto">
    <h2 class="text-lg font-semibold mb-2">Add Car</h2>
    <form class="min-w-full bg-white border border-gray-200 rounded-md shadow-md p-5">
        @csrf
        <!-- License -->
        @error('license')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <div>
            <input type="text" wire:model="license" name="license" placeholder="License" value="{{ old('license') }}"
                class="w-full px-2 py-1.5 mb-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500"
                required />
        </div>

        <!-- Brand -->
        @error('brand')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <div>
            <input type="text" wire:model="brand" name="brand" placeholder="Brand" value="{{ old('brand') }}"
                class="w-full px-2 py-1.5 mb-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500"
                required />
        </div>

        <!-- Brand -->
        @error('capacity')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <div>
            <input type="text" wire:model="capacity" name="capacity" placeholder="Capacity" value="{{ old('capacity') }}"
                class="w-full px-2 py-1.5 mb-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500"
                required />
        </div>

        <!-- Type -->
        @error('type')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <div>
            <select id="type" wire:model="type"
                class="w-full px-2 py-1.5 mb-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500">
                <option value="">---Choose---</option>
                <option value="sedan">Sedan</option>
                <option value="MPV">MPV</option>
                <option value="SUV">SUV</option>
            </select>
        </div>

        @error('price')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <div>
            <input type="text" wire:model="price" name="price" placeholder="Price" value="{{ old('price') }}"
                class="w-full px-2 py-1.5 mb-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500"
                required />
        </div>

        @error('picture')
        <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror
        <div>
            <input type="file" wire:model="picture"
                class="block w-full text-sm mb-3 text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                required />
        </div>

        <button wire:click="store"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-3 py-2 text-center">Submit</button>
    </form>
</div>
