@props(['product'])
<!-- Visual Group: Fuel Efficiency & Wet Grip -->
@if ($product->isTyre())
    <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
        <!-- Fuel Efficiency -->

        <div class="mb-6">
            <h3 class="font-semibold text-gray-900 mb-3">Fogyasztás</h3>
            <div class="space-y-2">
                @foreach (['A', 'B', 'C', 'D', 'E', 'F', 'G'] as $rating)
                    @php
                        $isActive = strtoupper($product->consumption ?? '') === $rating;
                        $visibilityClass = $isActive ? '' : 'hidden';
                    @endphp
                    <div
                        class="rating-item rating-{{ strtolower($rating) }} flex items-center bg-gray-100 p-2 rounded {{ $visibilityClass }}">
                        <span class="font-medium text-gray-900">{{ $rating }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Wet Grip -->
        <div class="mb-6">
            <h3 class="font-semibold text-gray-900 mb-3">Nedves tapadás</h3>
            <div class="space-y-2">
                @foreach (['A', 'B', 'C', 'D', 'E', 'F', 'G'] as $rating)
                    @php
                        $isActive = strtoupper($product->grip ?? '') === $rating;
                        $visibilityClass = $isActive ? '' : 'hidden';
                    @endphp
                    <div
                        class="rating-item wet-rating-{{ strtolower($rating) }} flex items-center bg-gray-100 p-2 rounded {{ $visibilityClass }}">
                        <span class="font-medium text-gray-900">{{ $rating }}</span>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endif
