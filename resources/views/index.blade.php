<x-layouts.app>
    <!-- Hero Section -->
    <x-hero />

    <!-- Services -->
    <x-services />

    <!-- Promotions -->
    <x-promotions />

    <!-- Featured Products -->
    <x-featured-products />

    <!-- Popular Brands -->
    <x-popular-brands />

    <!-- Special Offers -->
    <x-special-offers />

    <!-- Customer Reviews -->
    <x-customer-reviews />

    <!-- News Section -->
    <x-news />

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
