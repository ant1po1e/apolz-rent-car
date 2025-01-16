<!-- Top Navigation -->
<div class="bg-white p-4 shadow-sm flex justify-between items-center">
    <!-- Search Bar -->
    <div class="relative w-96">
        <input type="text" placeholder="Search" class="w-full px-4 py-2 rounded-lg bg-gray-100 focus:outline-none">
        <i class="fas fa-search absolute right-3 top-3 text-gray-400"></i>
    </div>

    <!-- Right Navigation Items -->
    <div class="flex items-center space-x-4">
        <button class="p-2 hover:bg-gray-100 rounded-lg">
            <i class="fas fa-envelope text-gray-600"></i>
        </button>
        <button class="p-2 hover:bg-gray-100 rounded-lg">
            <i class="fas fa-bell text-gray-600"></i>
        </button>
        <div class="flex items-center space-x-2">
            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-blue-600"
                type="button">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="{{ asset('dist/img/user.jpg') }}" alt="user photo">
                <svg class="w-2.5 h-2.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownAvatarName"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700"
                    aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100">My Profile</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                    </li>
                </ul>
                <div class="py-2">
                    <a href="{{ route('login.signout') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign
                        out</a>
                </div>
            </div>

        </div>
    </div>
</div>
