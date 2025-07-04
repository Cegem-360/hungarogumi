<x-layouts.app>

    <body>

        <!-- Top Bar -->
        <x-layouts.topbar />

        <!-- Header -->
        <x-layouts.header />


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


        <!-- Footer -->
        <x-layouts.footer />



        <script>
            // Mobile menu toggle
            document.addEventListener('DOMContentLoaded', function() {
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

                // Product hover effects
                /* const productCards = document.querySelectorAll('.product-hover');
                productCards.forEach(card => {
                    card.addEventListener('mouseenter', function() {
                        this.style.transform = 'translateY(-2px)';
                        this.style.boxShadow = '0 10px 25px rgba(0,0,0,0.1)';
                    });

                    card.addEventListener('mouseleave', function() {
                        this.style.transform = 'translateY(0)';
                        this.style.boxShadow = '0 1px 3px rgba(0,0,0,0.1)';
                    });
                }); */

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
