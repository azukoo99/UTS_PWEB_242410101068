<nav class="p-4 mx-4 lg:mx-10">
    <div class="flex items-center justify-between">

        <a href="#" class="text-white text-lg font-bold">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
        </a>

        <div class="hidden lg:flex gap-2">
            <a href="/dashboard" class="px-3 py-2 rounded-lg text-sm font-medium {{ request()->is('dashboard') ? 'bg-blue-100' : 'hover:bg-blue-100' }}">
                Dashboard
            </a>
            <a href="/pengelolaan" class="px-3 py-2 rounded-lg text-sm font-medium {{ request()->is('pengelolaan') ? 'bg-blue-100' : 'hover:bg-blue-100' }}">
                Pengelolaan
            </a>
        </div>

        <a href="/profile" class="hidden lg:block">
            <div class="flex items-center gap-2 px-3 py-2">
                <img src="{{ asset('images/profile.png') }}" class="w-8 h-8 rounded-full object-cover">
                <span>{{ $username }}</span>
            </div>
        </a>

        <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="lg:hidden text-2xl">
            ☰
        </button>

    </div>

    <div id="mobile-menu" class="hidden flex flex-col gap-2 mt-4 bg-white p-4 rounded-2xl shadow lg:hidden">

        <a href="/dashboard" class="px-3 py-2 rounded-lg text-sm font-medium">
            Dashboard
        </a>

        <a href="/pengelolaan" class="px-3 py-2 rounded-lg text-sm font-medium">
            Pengelolaan
        </a>

        <a href="/profile">
            <div class="flex items-center gap-2 px-3 py-2">
                <img src="{{ asset('images/profile.png') }}" class="w-8 h-8 rounded-full object-cover">
                <span>{{ $username }}</span>
            </div>
        </a>

    </div>
</nav>
