<!-- Sidebar -->
<div class="w-64 min-h-screen bg-white shadow-lg">
    <!-- Logo -->
    <div class="p-4">
        <h1 class="text-2xl font-bold text-blue-500"># APOLZ RENT</h1>
    </div>

    <!-- Admin Profile -->
    <div class="p-4 flex items-center space-x-3">
        <img src="{{ asset('dist/img/user.jpg') }}" alt="Admin" class="rounded-full w-10 h-10">
        <div>
            <h2 class="font-semibold">{{ auth()->user()->name }}</h2>
            <p class="text-gray-500 text-sm">{{ auth()->user()->role }}</p>
        </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="mt-4">
        <a href="/" class="flex items-center space-x-3 px-4 py-3 bg-blue-50 text-blue-500 border-l-4 border-blue-500">
            <i class="fas fa-chart-line"></i>
            <span>Dashboard</span>
        </a>
        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50">
            <i class="fas fa-shopping-cart"></i>
            <span>Transactions</span>
        </a>
        <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50">
            <i class="fas fa-file-alt"></i>
            <span>Reports</span>
        </a>
        <a href="{{ route('car') }}" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50">
            <i class="fas fa-car"></i>
            <span>Cars</span>
        </a>
        <a href="{{ route('users') }}" class="flex items-center space-x-3 px-4 py-3 text-gray-600 hover:bg-gray-50">
            <i class="fas fa-users"></i>
            <span>Users</span>
        </a>
    </nav>
</div>
