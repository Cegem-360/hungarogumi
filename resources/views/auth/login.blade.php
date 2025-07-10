<x-layouts.app>
    <div class="min-h-screen bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                <div class="px-6 py-8">
                    <h2 class="text-2xl font-bold text-center text-gray-900 mb-8">Bejelentkezés</h2>

                    @if ($errors->any() || request('must_login_for_verification'))
                        <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                            <ul class="list-disc list-inside">
                                @if (request('must_login_for_verification'))
                                    <li><strong>Kérjük, először jelentkezz be, hogy megerősíthesd az email
                                            címedet!</strong></li>
                                @endif
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                E-mail cím
                            </label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                autocomplete="email"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div class="mb-6">
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                                Jelszó
                            </label>
                            <input type="password" id="password" name="password" required
                                autocomplete="current-password"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div class="mb-6">
                            <label class="flex items-center">
                                <input type="checkbox" name="remember" class="mr-2">
                                <span class="text-sm text-gray-600">Emlékezz rám</span>
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
                            Bejelentkezés
                        </button>
                    </form>

                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">
                            Még nincs fiókja?
                            <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800">
                                Regisztráció
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
