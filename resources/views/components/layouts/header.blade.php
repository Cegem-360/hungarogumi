<header class="bg-white shadow-md">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-6">
            <!-- Logo -->
            <a href="{{ route('home') }}" wire:navigate>
                <div class="flex items-center justify-center gap-1">
                    <img src="{{ Vite::asset('resources/images/somigumi-logo-2.webp') }}" alt="SomiGumi" class="h-16">
                    <h1 class="sr-only">SomiGumi</h1>
                    <x-svg.logo-title class="text-brand-anthracite" />
                </div>
            </a>

            <!-- Search Bar -->
            <div class="hidden md:flex flex-1 max-w-md mx-8">
                <input type="text" placeholder="Milyen terméket keresel?"
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                <button
                    class="bg-brand-blue text-white px-4 py-2 rounded-r-md hover:bg-brand-blue/80 transition-colors">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>

            <!-- User Menu -->
            <div class="flex items-center space-x-4 text-sm">
                <div class="hidden md:flex items-center space-x-1">
                    <i class="fas fa-user text-gray-600"></i>
                    <span>Belépés / Regisztrácíó</span>
                </div>
                {{-- <div class="flex items-center space-x-1">
                    <i class="fas fa-heart text-gray-600"></i>
                    <span class="hidden md:inline">Kedvencek</span>
                </div> --}}

                <a href="{{ route('cart.index') }}" wire:navigate>
                    <div class="flex items-center space-x-1">
                        <i class="fas fa-shopping-cart text-gray-600"></i>
                        <span class="hidden md:inline">Kosár</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="border-t border-gray-200">
            <ul class="flex space-x-8 py-3 text-sm font-medium text-gray-700">
                <li>
                    <a wire:navigate href="{{ route('tyres') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">
                        GUMIK
                    </a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('wheels') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">
                        FELNIK
                    </a>
                </li>
                {{-- <li>
                    <a href="#" class="nav-item px-3 py-2 rounded hover:text-brand-blue">AKKUMULÁTOR</a>
                </li>
                <li>
                    <a href="#" class="nav-item px-3 py-2 rounded hover:text-brand-blue">MOTOROLAJ</a>
                </li> --}}
                <li>
                    <a wire:navigate href="{{ route('et-kalkulator') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">
                        ET-KALKULÁTOR
                    </a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('rolunk') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">
                        RÓLUNK
                    </a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('szolgáltatásaink') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">
                        SZOLGÁLTATÁSAINK
                    </a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('hírek') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">
                        HÍREK
                    </a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('valtomeret-kalkulator') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">
                        VÁLTÓMÉRET KALKULÁTOR
                    </a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('szallitasi-informaciok') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">
                        SZÁLLÍTÁSI INFORMÁCIÓK
                    </a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('adatvedelmi-tajekoztato') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">
                        ADATVÉDELMI TÁJÉKOZTATÓ
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-item px-3 py-2 rounded hover:text-brand-blue">BLOG</a>
                </li>
                <li>
                    <a href="#" class="nav-item px-3 py-2 rounded hover:text-brand-blue">KAPCSOLAT</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
