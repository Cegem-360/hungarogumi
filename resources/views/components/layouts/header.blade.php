<header class="bg-white shadow-md">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4 lg:py-6 gap-4">
            <!-- Logo -->
            <a href="{{ route('home') }}" wire:navigate>
                <div class="flex items-center justify-center gap-1">
                    <img src="{{ Vite::asset('resources/images/somigumi-logo-2.webp') }}" alt="SomiGumi"
                        class="h-8 lg:h-16">
                    <h1 class="sr-only">SomiGumi</h1>
                    <x-svg.logo-title class="text-brand-anthracite hidden sm:block" />
                </div>
            </a>

            <!-- Search Bar - Hidden on mobile, shown on larger screens -->
            <div class="hidden lg:block">
                <livewire:header-search />
            </div>

            <!-- Desktop User Menu & Mobile Controls -->
            <div class="flex items-center space-x-2 lg:space-x-4 text-sm">
                <!-- Cart (mobile icon) -->
                <div class="lg:hidden">
                    <livewire:cart-badge />
                </div>

                <!-- Desktop User Menu -->
                <div class="hidden lg:flex items-center space-x-4">
                    @auth
                        <div class="relative group">
                            <div class="flex items-center space-x-1 cursor-pointer">
                                <i class="fas fa-user text-gray-600"></i>
                                <span class="hidden md:inline">{{ Auth::user()->name }}</span>
                                <i class="fas fa-chevron-down text-gray-600 ml-1"></i>
                            </div>

                            <!-- Dropdown Menu -->
                            <div
                                class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                                <a href="{{ route('profile.orders') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" wire:navigate>
                                    <i class="fas fa-shopping-bag mr-2"></i>
                                    Rendeléseim
                                </a>
                                <a href="{{ route('profile.profile') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" wire:navigate>
                                    <i class="fas fa-user mr-2"></i>
                                    Adataim
                                </a>
                                <hr class="my-1">
                                <form method="POST" action="{{ route('logout') }}" class="inline">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        <i class="fas fa-sign-out-alt mr-2"></i>
                                        Kijelentkezés
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" wire:navigate>
                            <div class="flex items-center space-x-1 hover:text-blue-600 transition-colors">
                                <i class="fas fa-user text-gray-600"></i>
                                <span>Belépés / Regisztráció</span>
                            </div>
                        </a>
                    @endauth

                    <livewire:cart-badge />
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button"
                    class="lg:hidden flex items-center justify-center w-8 h-8 text-gray-600 hover:text-gray-900 focus:outline-none focus:text-gray-900"
                    aria-label="Toggle mobile menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="hamburger-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                        <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Search Bar -->
        <div class="lg:hidden pb-4">
            <livewire:header-search />
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:block border-t border-gray-200">
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
                <li>
                    <a href="{{ route('accessories') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">KIEGÉSZÍTŐK</a>
                </li>
                {{--  <li>
                    <a href="#" class="nav-item px-3 py-2 rounded hover:text-brand-blue">MOTOROLAJ</a>
                </li> --}}

                <li>
                    <a wire:navigate href="{{ route('rolunk') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">
                        RÓLUNK
                    </a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('services') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">
                        SZOLGÁLTATÁSAINK
                    </a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('news') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">
                        HÍREK
                    </a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('et-kalkulator') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">
                        ET-KALKULÁTOR
                    </a>
                </li>
                <li>
                    <a wire:navigate href="{{ route('valtomeret-kalkulator') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">
                        VÁLTÓMÉRET KALKULÁTOR
                    </a>
                </li>

                {{-- <li>
                    <a wire:navigate href="{{ route('news') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">BLOG</a>
                </li> --}}
                <li>
                    <a wire:navigate href="{{ route('kapcsolat') }}"
                        class="nav-item px-3 py-2 rounded hover:text-brand-blue">KAPCSOLAT</a>
                </li>
            </ul>
        </nav>

        <!-- Mobile Navigation Menu -->
        <nav id="mobile-menu" class="lg:hidden hidden border-t border-gray-200 bg-white shadow-lg">
            <div class="px-4 py-2 space-y-1">
                <!-- Mobile User Menu -->
                @auth
                    <div class="border-b border-gray-200 pb-3 mb-3">
                        <div class="flex items-center space-x-2 text-gray-700 py-2">
                            <i class="fas fa-user text-gray-600"></i>
                            <span class="font-medium">{{ Auth::user()->name }}</span>
                        </div>
                        <div class="ml-6 space-y-1">
                            <a href="{{ route('profile.orders') }}"
                                class="block py-2 text-sm text-gray-600 hover:text-brand-blue mobile-menu-link"
                                wire:navigate>
                                <i class="fas fa-shopping-bag mr-2 w-4"></i>
                                Rendeléseim
                            </a>
                            <a href="{{ route('profile.profile') }}"
                                class="block py-2 text-sm text-gray-600 hover:text-brand-blue mobile-menu-link"
                                wire:navigate>
                                <i class="fas fa-user mr-2 w-4"></i>
                                Adataim
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left py-2 text-sm text-gray-600 hover:text-brand-blue">
                                    <i class="fas fa-sign-out-alt mr-2 w-4"></i>
                                    Kijelentkezés
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="border-b border-gray-200 pb-3 mb-3">
                        <a href="{{ route('login') }}" wire:navigate class="mobile-menu-link">
                            <div class="flex items-center space-x-2 py-2 text-gray-700 hover:text-brand-blue">
                                <i class="fas fa-user text-gray-600"></i>
                                <span>Belépés / Regisztráció</span>
                            </div>
                        </a>
                    </div>
                @endauth

                <!-- Navigation Links -->
                <a wire:navigate href="{{ route('tyres') }}"
                    class="block py-3 text-base font-medium text-gray-700 hover:text-brand-blue border-b border-gray-100 mobile-menu-link">
                    GUMIK
                </a>
                <a wire:navigate href="{{ route('wheels') }}"
                    class="block py-3 text-base font-medium text-gray-700 hover:text-brand-blue border-b border-gray-100 mobile-menu-link">
                    FELNIK
                </a>
                <a href="{{ route('accessories') }}"
                    class="block py-3 text-base font-medium text-gray-700 hover:text-brand-blue border-b border-gray-100 mobile-menu-link">
                    KIEGÉSZÍTŐK
                </a>
                <a wire:navigate href="{{ route('rolunk') }}"
                    class="block py-3 text-base font-medium text-gray-700 hover:text-brand-blue border-b border-gray-100 mobile-menu-link">
                    RÓLUNK
                </a>
                <a wire:navigate href="{{ route('services') }}"
                    class="block py-3 text-base font-medium text-gray-700 hover:text-brand-blue border-b border-gray-100 mobile-menu-link">
                    SZOLGÁLTATÁSAINK
                </a>
                <a wire:navigate href="{{ route('news') }}"
                    class="block py-3 text-base font-medium text-gray-700 hover:text-brand-blue border-b border-gray-100 mobile-menu-link">
                    HÍREK
                </a>
                <a wire:navigate href="{{ route('et-kalkulator') }}"
                    class="block py-3 text-base font-medium text-gray-700 hover:text-brand-blue border-b border-gray-100 mobile-menu-link">
                    ET-KALKULÁTOR
                </a>
                <a wire:navigate href="{{ route('valtomeret-kalkulator') }}"
                    class="block py-3 text-base font-medium text-gray-700 hover:text-brand-blue border-b border-gray-100 mobile-menu-link">
                    VÁLTÓMÉRET KALKULÁTOR
                </a>
                <a wire:navigate href="{{ route('kapcsolat') }}"
                    class="block py-3 text-base font-medium text-gray-700 hover:text-brand-blue mobile-menu-link">
                    KAPCSOLAT
                </a>

                <!-- Mobile Cart Link -->
                <div class="pt-3 border-t border-gray-200 mt-3">
                    <a href="{{ route('cart.index') }}" wire:navigate class="mobile-menu-link">
                        <div class="flex items-center space-x-2 py-2 text-gray-700 hover:text-brand-blue">
                            <i class="fas fa-shopping-cart text-gray-600"></i>
                            <span>Kosár</span>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Mobile Menu JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');
            const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');

            let isMenuOpen = false;

            function toggleMenu() {
                isMenuOpen = !isMenuOpen;

                if (isMenuOpen) {
                    mobileMenu.classList.remove('hidden');
                    hamburgerIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            }

            function closeMenu() {
                if (isMenuOpen) {
                    toggleMenu();
                }
            }

            mobileMenuButton.addEventListener('click', toggleMenu);

            // Close menu when clicking on navigation links
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', closeMenu);
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                if (isMenuOpen && !mobileMenu.contains(event.target) && !mobileMenuButton.contains(event
                        .target)) {
                    closeMenu();
                }
            });

            // Close menu on escape key
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape' && isMenuOpen) {
                    closeMenu();
                }
            });
        });
    </script>
</header>
