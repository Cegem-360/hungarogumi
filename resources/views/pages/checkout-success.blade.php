<x-layouts.app>
    <div
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-200 via-green-100 to-white py-12 px-4">
        <div class="bg-white rounded-3xl shadow-2xl p-10 max-w-lg w-full text-center animate-fade-in">
            <div class="flex justify-center mb-6">
                <svg class="w-20 h-20 text-green-500 animate-bounce" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 48 48">
                    <circle cx="24" cy="24" r="22" stroke="currentColor" stroke-width="4" fill="#d1fae5" />
                    <path d="M16 24l6 6 10-12" stroke="#22c55e" stroke-width="4" stroke-linecap="round"
                        stroke-linejoin="round" fill="none" />
                </svg>
            </div>
            <h1 class="text-3xl font-extrabold text-green-700 mb-4">Sikeres vásárlás!</h1>
            <p class="text-gray-600 mb-6">Köszönjük, hogy nálunk vásároltál.<br>Rendelésed feldolgozás alatt van.</p>
            <a href="{{ route('home') }}"
                class="inline-block px-6 py-3 bg-green-500 text-white rounded-full font-semibold shadow-lg hover:bg-green-600 transition">Vissza
                a főoldalra</a>
        </div>
    </div>

    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 0.8s cubic-bezier(.4, 0, .2, 1) both;
        }
    </style>
</x-layouts.app>
