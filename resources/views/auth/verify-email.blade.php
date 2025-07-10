<x-layouts.app>
    <div class="min-h-screen bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                <div class="px-6 py-8">
                    <div class="text-center mb-8">
                        <i class="fas fa-envelope-open-text text-blue-600 text-6xl mb-4"></i>
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Email megerősítés szükséges</h2>
                        <p class="text-gray-600">
                            Regisztrációja majdnem kész! Elküldtünk egy megerősítő emailt a megadott címre.
                            Kérjük, kattintson a benne található linkre a fiókja aktiválásához.
                        </p>
                    </div>

                    @if (session('success'))
                        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="space-y-4">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit"
                                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Megerősítő email újraküldése
                            </button>
                        </form>

                        <div class="text-center">
                            <p class="text-sm text-gray-600 mb-4">
                                Hibás email címet adott meg?
                            </p>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="text-blue-600 hover:text-blue-800 text-sm">
                                    Kijelentkezés és új regisztráció
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="mt-8 p-4 bg-gray-50 rounded-lg">
                        <h3 class="font-semibold text-gray-900 mb-2">Nem kapta meg az emailt?</h3>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Ellenőrizze a spam/kéretlen levelek mappát</li>
                            <li>• Győződjön meg róla, hogy helyesen adta meg az email címet</li>
                            <li>• Próbálja meg újraküldeni a megerősítő emailt</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
