<x-layouts.app>
    <div class="min-h-screen bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <!-- Profile Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Profilom</h1>
                <p class="text-gray-600 mt-2">Üdvözöljük, {{ Auth::user()->name }}!</p>
            </div>

            <!-- Navigation Tabs -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="border-b border-gray-200">
                    <nav class="flex space-x-8 px-6">
                        <a href="{{ route('profile.orders') }}"
                            class="py-4 px-1 border-b-2 border-transparent font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300">
                            Rendeléseim
                        </a>
                        <a href="{{ route('profile.profile') }}"
                            class="py-4 px-1 border-b-2 border-blue-500 font-medium text-sm text-blue-600">
                            Adataim
                        </a>
                    </nav>
                </div>

                <!-- Profile Content -->
                <div class="p-6">
                    <div class="max-w-2xl">
                        <h2 class="text-lg font-medium text-gray-900 mb-6">Személyes adatok</h2>

                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Név</label>
                                <div class="mt-1 p-3 bg-gray-50 rounded-md">
                                    {{ Auth::user()->name }}
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">E-mail cím</label>
                                <div class="mt-1 p-3 bg-gray-50 rounded-md">
                                    {{ Auth::user()->email }}
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Regisztráció dátuma</label>
                                <div class="mt-1 p-3 bg-gray-50 rounded-md">
                                    {{ Auth::user()->created_at->format('Y. m. d.') }}
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700">
                                    <i class="fas fa-sign-out-alt mr-2"></i>
                                    Kijelentkezés
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
