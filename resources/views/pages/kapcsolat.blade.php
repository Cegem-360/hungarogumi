<x-layouts.app>
    <x-slot name="title">Kapcsolat</x-slot>
    <x-slot name="description">Somigumi kapcsolati adatok, nyitvatartás, telefonszám, email cím. Gumiabroncs és
        alufelni szaküzlet Budapest.</x-slot>
    <x-slot name="keywords">kapcsolat, Somigumi, gumiabroncs, alufelni, Budapest, telefonszám, email,
        nyitvatartás</x-slot>

    <!-- Breadcrumb -->
    <x-breadcrumb />

    <!-- Header Section -->
    <section class="bg-white py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Kapcsolat</h1>
            <p class="text-gray-600 text-lg">Várjuk Önt is Budapest legnagyobb és legkorszerűbb gumi- és felniáruházába!
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12">

                <!-- Contact Information -->
                <div class="space-y-8">

                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Telephely</h2>

                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-brand-blue mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-gray-900">Címünk:</p>
                                    <p class="text-gray-600">Budapest, Nagysándor József u. 65, 1204</p>

                                    <a href="https://maps.app.goo.gl/zMw1NxzmpHXzQPyc6" target="_blank"
                                        class="text-brand-blue hover:text-brand-blue-dark text-sm">Útvonaltervezés</a>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-brand-blue mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-gray-900">Telefon:</p>
                                    <a href="tel:06307009668" class="text-brand-blue hover:text-brand-blue-dark">06 30
                                        700 9668</a>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-brand-blue mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-gray-900">Email:</p>
                                    <a href="mailto:info@somiautomotive.hu"
                                        class="text-brand-blue hover:text-brand-blue-dark">info@somiautomotive.hu</a>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-brand-blue mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-gray-900">Nyitvatartás:</p>
                                    <div class="text-gray-600">
                                        <p>Hétfő: 9:00–17:00</p>
                                        <p>Kedd: 9:00–17:00</p>
                                        <p>Szerda: 9:00–17:00</p>
                                        <p>Csütörtök: 9:00–17:00</p>
                                        <p>Péntek: 9:00–17:00</p>
                                        <p>Szombat: Zárva</p>
                                        <p>Vasárnap: Zárva</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Contact Form -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Kapcsolati űrlap</h2>

                    @if (session('success'))
                        <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-md">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-md">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Név
                                    *</label>
                                <input type="text" id="name" name="name" required value="{{ old('name') }}"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-brand-blue focus:border-brand-blue {{ $errors->has('name') ? 'border-red-500' : '' }}">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email cím
                                    *</label>
                                <input type="email" id="email" name="email" required value="{{ old('email') }}"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-brand-blue focus:border-brand-blue {{ $errors->has('email') ? 'border-red-500' : '' }}">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="phone"
                                class="block text-sm font-medium text-gray-700 mb-2">Telefonszám</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-brand-blue focus:border-brand-blue {{ $errors->has('phone') ? 'border-red-500' : '' }}">
                            @error('phone')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Tárgy *</label>
                            <input type="text" id="subject" name="subject" required value="{{ old('subject') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-brand-blue focus:border-brand-blue {{ $errors->has('subject') ? 'border-red-500' : '' }}">
                            @error('subject')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Üzenet
                                *</label>
                            <textarea id="message" name="message" rows="6" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-brand-blue focus:border-brand-blue {{ $errors->has('message') ? 'border-red-500' : '' }}">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="privacy" name="privacy" type="checkbox" required value="1"
                                    {{ old('privacy') ? 'checked' : '' }}
                                    class="focus:ring-brand-blue h-4 w-4 text-brand-blue border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="privacy" class="text-gray-700">
                                    Elfogadom az <a href="{{ route('adatvedelmi-tajekoztato') }}"
                                        class="text-brand-blue hover:text-brand-blue-dark">adatvédelmi tájékoztatót</a>
                                    *
                                </label>
                                @error('privacy')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full bg-brand-blue text-white py-3 px-4 rounded-md hover:bg-brand-blue-dark focus:outline-none focus:ring-2 focus:ring-brand-blue focus:ring-offset-2 transition-colors font-medium">
                            Üzenet küldése
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="py-8 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Kövessen minket!</h2>
                <div class="flex justify-center space-x-6">
                    <a href="https://www.facebook.com/somigumi.hu/" target="_blank"
                        class="text-blue-600 hover:text-blue-800 transition-colors">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/somigumi/" target="_blank"
                        class="text-pink-600 hover:text-pink-800 transition-colors">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
