<section class="py-8 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-xl font-bold mb-4 text-center">Legnépszerűbb márkák</h2>
        <div class="flex flex-wrap justify-center gap-4 text-sm">
            @php
                $brands = [
                    'BRIDGESTONE',
                    'CONTINENTAL',
                    'DUNLOP',
                    'FALKEN',
                    'FIRESTONE',
                    'GOODYEAR',
                    'HANKOOK',
                    'KUMHO',
                    'MICHELIN',
                    'NEXEN',
                    'PIRELLI',
                    'UNIROYAL',
                    'VREDESTEIN',
                    'YOKOHAMA',
                ];
            @endphp
            @foreach ($brands as $brand)
                <a href="{{ route('tyres', ['manufacturer' => ucfirst(strtolower($brand))]) }}"
                    class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">
                    {{ $brand }}
                </a>
            @endforeach
        </div>
    </div>
</section>
