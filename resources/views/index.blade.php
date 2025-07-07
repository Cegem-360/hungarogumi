<x-layouts.app>

    <body>

        @if (request()->routeIs('home') || request()->routeIs('en.home'))
            @include('pages.home')
        @elseif (request()->routeIs('gumik') || request()->routeIs('en.gumik'))
            @include('pages.gumik')
        @elseif (request()->routeIs('felnik') || request()->routeIs('en.felnik'))
            @include('pages.felnik')
        @elseif (request()->routeIs('termekoldal') || request()->routeIs('en.termekoldal'))
            @include('pages.termekoldal')
        @elseif (request()->routeIs('kapcsolat') || request()->routeIs('en.kapcsolat'))
            @include('pages.contact')
        @endif

        <script>
            // Mobile menu toggle
            document.addEventListener('livewire:loaded', function() {
                // Add smooth scrolling
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function(e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth'
                            });
                        }
                    });
                });

                // Search functionality
                const searchButton = document.querySelector('.bg-brand-blue');
                if (searchButton) {
                    searchButton.addEventListener('click', function() {
                        alert('Keresés funkció - demo célokra');
                    });
                }
            });
        </script>

</x-layouts.app>
