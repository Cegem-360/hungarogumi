<footer class="bg-brand-anthracite text-white">
    <div class="container mx-auto px-4 py-12">
        <div class="grid md:grid-cols-5 gap-8">
            <!-- Logo -->
            <div class="flex">
                <img src="{{ Storage::url('images/somigumi-logo.webp') }}" alt="SomiGumi" class="h-16 invert">
            </div>
            <!-- Company Info -->
            <div>
                <h3 class="text-lg font-bold mb-4">RÓLUNK ÉS FONTOS INFÓK</h3>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li>
                        <a wire:navigate href="{{ route('rolunk') }}" class="hover:text-white">Cégünkről</a>
                    </li>
                    <li>
                        <a wire:navigate href="{{ route('kapcsolat') }}" class="hover:text-white">Elérhetőségek</a>
                    </li>
                    {{--  <li>
                        <a wire:navigate href="#" class="hover:text-white">Vásárlói panaszkezelés</a>
                    </li> --}}
                    <li>
                        <a wire:navigate href="{{ route('adatvedelmi-tajekoztato') }}" class="hover:text-white">
                            Adatkezelési tájékoztató
                        </a>
                    </li>
                    {{--  <li>
                        <a href="#" class="hover:text-white">Jótállás és garancia</a>
                    </li> --}}
                    <li>
                        <a wire:navigate href="{{ route('szallitasi-informaciok') }}" class="hover:text-white">
                            Szállítási információk
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-white">ÁSZF</a>
                    </li>
                    {{-- <li>
                        <a href="#" class="hover:text-white">Fizetési módok</a>
                    </li> --}}
                </ul>
            </div>

            <!-- Categories -->
            <div>
                <h3 class="text-lg font-bold mb-4">OLDALAINK</h3>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li>
                        <a wire:navigate href="{{ route('tyres') }}" class="hover:text-white">
                            Gumik
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="{{ route('wheels') }}" class="hover:text-white">
                            Felnik
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('accessories') }}" class="hover:text-white">Kiegészítők</a>
                    </li>
                    {{--  <li>
                    <a href="#" class="hover:text-white">motorolaj</a>
                </li> --}}

                    <li>
                        <a wire:navigate href="{{ route('rolunk') }}" class="hover:text-white">
                            Rólunk
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="{{ route('services') }}" class="hover:text-white">
                            Szolgáltatásaink
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="{{ route('news') }}" class="hover:text-white">
                            Hírek
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="{{ route('et-kalkulator') }}" class="hover:text-white">
                            Et-kalkulátor
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="{{ route('valtomeret-kalkulator') }}" class="hover:text-white">
                            Váltóméret kalkulátor
                        </a>
                    </li>

                    {{-- <li>
                    <a wire:navigate href="{{ route('news') }}"
                        class="hover:text-white">blog</a>
                </li> --}}
                    <li>
                        <a wire:navigate href="{{ route('kapcsolat') }}" class="hover:text-white">Kapcsolat</a>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-lg font-bold mb-4">LÉPJ VELÜNK KAPCSOLATBA</h3>
                <div class="space-y-3 text-sm text-gray-300">
                    <div>
                        <strong>Telefonos ügyfélszolgálat:</strong><br>
                        <a href="tel:+36 30 700 9668" class="hover:text-white">+36 30 700 9668</a>
                    </div>
                    <div>
                        <strong>Email:</strong><br>
                        <a href="mailto:info@somiautomotive.hu" class="hover:text-white">info@somiautomotive.hu
                        </a>
                    </div>
                    <div>
                        <strong>Nyitvatartás:</strong><br>
                        Hétfő: 9:00–17:00<br>
                        Kedd: 9:00–17:00<br>
                        Szerda: 9:00–17:00<br>
                        Csütörtök: 9:00–17:00<br>
                        Péntek: 9:00–17:00<br>
                        Szombat: Zárva<br>
                        Vasárnap: Zárva
                    </div>
                </div>

                <!-- Social Media -->
                <div class="mt-6">
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white" aria-label="Facebook">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white" aria-label="Instagram">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white" aria-label="YouTube">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-700 mt-12 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-sm text-gray-400 mb-4 md:mb-0">
                    © 2024-2025 SomiGumi.hu – Minden jog fenntartva |
                    <a href="#" class="hover:text-white">Adatvédelmi irányelvek</a>
                </div>

                <!-- Payment Methods -->
                <div class="flex items-center space-x-4">
                    {{-- <img src="..." alt="Visa" class="h-6">
                    <img src="..." alt="MasterCard" class="h-6">
                    <img src="..." alt="PayPal" class="h-6">
                    <img src="..." alt="SZÉP kártya" class="h-6"> --}}
                </div>
            </div>
        </div>
    </div>
</footer>
