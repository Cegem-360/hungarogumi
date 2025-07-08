<div class="sticky-sidebar">
    <div class="bg-white rounded-lg shadow-sm">
        <!-- Search by Auto -->
        <div class="mb-6">
            <button
                class="w-full flex items-center gap-4 p-4 text-brand-blue bg-blue-50 hover:bg-blue-100 border border-blue-200 rounded-md">
                <i class="fas fa-car text-2xl"></i>
                <span>Gumi keresése autó szerint</span>
            </button>
        </div>

        <!-- Warning -->
        <div class="mb-6 p-4 bg-yellow-50 border border-yellow-200 rounded-md">
            <div class="flex items-start gap-4">
                <i class="fas fa-exclamation-triangle text-2xl text-yellow-600"></i>
                <div class="text-sm">
                    Kérlek válaszd ki a keresendő gumiabroncs <strong>szélesség,</strong> <strong>profil</strong> és
                    <strong>átmérő</strong> méreteit.
                </div>
            </div>
        </div>

        <!-- Filter Group: Size, Season, Brand, Vehicle Type, Outlet -->
        <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
            <!-- Size Selector -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Méret</h3>
                <div class="grid grid-cols-3 gap-2 items-start">
                    <div>
                        <label for="szelesseg" class="block text-sm font-medium text-gray-700 mb-1">Szélesség*</label>
                        <select id="szelesseg" name="szelesseg" required
                            class="w-full bg-gray-100 border border-gray-300 rounded px-2 py-1 text-center">
                            <option value="">--</option>
                            <option value="115">115</option>

                        </select>
                    </div>
                    <div>
                        <label for="profil" class="block text-sm font-medium text-gray-700 mb-1">Profil*</label>
                        <select id="profil" name="profil" required
                            class="w-full bg-gray-100 border border-gray-300 rounded px-2 py-1 text-center">
                            <option value="">--</option>
                            <option value="82">R</option>
                            <option value="35">35</option>
                        </select>
                    </div>
                    <div>
                        <label for="atmero" class="block text-sm font-medium text-gray-700 mb-1">Átmérő*</label>
                        <select id="atmero" name="atmero" required
                            class="w-full bg-gray-100 border border-gray-300 rounded px-2 py-1 text-center">
                            <option value="">--</option>
                            <option value="R15">R15</option>

                        </select>
                    </div>
                </div>
            </div>

            <!-- Season Filter -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Időjárás</h3>
                <div class="space-y-2">
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Nyári gumi</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Téli gumi</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Négyévszakos gumi</span>
                    </label>
                </div>
            </div>

            <!-- Brand Filter -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Márka</h3>
                <select id="marka" name="marka"
                    class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                    <option value="" data-select2-id="984">Összes...</option>
                    <option value="altenzo" data-select2-id="1509">Altenzo</option>

                </select>
            </div>

            <!-- Vehicle Type -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Jármű típus</h3>
                <select id="tipus" name="tipus"
                    class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                    <option value="">Összes...</option>
                    <option value="szemelygepjarmu-suv">Személygépjármű/SUV</option>
                    <option value="kistehergepjarmu">Kistehergépjármű</option>
                </select>
            </div>

            <!-- Outlet -->
            <div class="mb-6">
                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                    <input type="checkbox" id="outlet" name="outlet" value="outlet"
                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                    <span class="text-sm">Outlet termékek</span>
                </label>
            </div>
        </div>

        <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
            <!-- Készlet -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Készlet</h3>
                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                    <input type="checkbox" id="keszlet" name="keszlet" value="keszlet"
                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                    <span class="text-sm">min. 4 db azonnal</span>
                </label>
            </div>

            <!-- Price Category -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Árkategória</h3>
                <div class="space-y-2">
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Budget</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Közepes</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Prémium</span>
                    </label>
                </div>
            </div>
            <!-- Price Filter -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Árszűrő</h3>
                <div class="flex items-center gap-2">
                    <input type="number" name="min_price" id="min_price" min="0" placeholder="min"
                        class="w-1/2 bg-gray-100 border border-gray-300 rounded px-2 py-1 text-sm text-center" />
                    <span class="text-gray-500">-</span>
                    <input type="number" name="max_price" id="max_price" min="0" placeholder="max"
                        class="w-1/2 bg-gray-100 border border-gray-300 rounded px-2 py-1 text-sm text-center" />
                    <span class="text-gray-500">Ft</span>
                </div>
            </div>
        </div>

        <!-- Extra Properties Group -->
        <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
            <!-- Extra Properties -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Extra tulajdonságok</h3>
                <div class="space-y-2">
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" id="erositett" name="erositett" value="erositett"
                            class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Erősített</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" id="defektturo" name="defektturo" value="defektturo"
                            class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Defekttűrő</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" id="elektromos" name="elektromos" value="elektromos"
                            class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Elektromos autóhoz</span>
                    </label>
                </div>
            </div>

            <!-- Speed Index -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Sebességindex</h3>
                <select class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                    <option value="">Összes...</option>
                    <option value="si-q">Q (160 km/h)</option>
                    <option value="si-r">R (170 km/h)</option>
                    <option value="si-s">S (180 km/h)</option>
                    <option value="si-t">T (190 km/h)</option>
                    <option value="si-h">H (210 km/h)</option>
                    <option value="si-v">V (240 km/h)</option>
                    <option value="si-w">W (270 km/h)</option>
                    <option value="si-y">Y (300 km/h)</option>
                </select>
            </div>

            <!-- Load Index -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Súlyindex</h3>
                <select class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                    <option value="" data-select2-id="999">Összes...</option>
                    <option value="li-2" data-select2-id="1495">2 (47,5 kg)</option>
                    <option value="li-89" data-select2-id="1496">89 (580 kg)</option>
                    <option value="li-91" data-select2-id="1497">91 (615 kg)</option>
                    <option value="li-94" data-select2-id="1498">94 (650 kg)</option>
                    <option value="li-97" data-select2-id="1499">97 (730 kg)</option>
                    <option value="li-98" data-select2-id="1500">98 (750 kg)</option>
                </select>
            </div>

            <!-- Noise Level -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Zajszint</h3>
                <div class="space-y-2">
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="zajszint" value="A"
                            class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">A</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="zajszint" value="B"
                            class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">B</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="zajszint" value="C"
                            class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">C</span>
                    </label>
                </div>
            </div>

            <!-- Homologization -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Homológizáció</h3>
                <select id="homologizacio" name="homologizacio"
                    class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                    <option value="">Összes...</option>
                    <option value="homologizacio-audi">Audi</option>

                </select>
            </div>

            <!-- Pattern -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Mintázat</h3>
                <select id="pattern" name="pattern"
                    class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                    <option value="">Összes...</option>
                    <option value="mintazat-4-seasons">4 Seasons</option>

                </select>
            </div>
        </div>

        <!-- Visual Group: Fuel Efficiency & Wet Grip -->
        <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
            <!-- Fuel Efficiency -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Fogyasztás</h3>
                <div class="space-y-2">
                    <label class="rating-item rating-a flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="fuel-rating" value="fuel-rating-a"
                            class="w-4 h-4 text-green-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">A</span>
                    </label>
                    <label class="rating-item rating-b flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="fuel-rating" value="fuel-rating-b"
                            class="w-4 h-4 text-lime-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">B</span>
                    </label>
                    <label class="rating-item rating-c flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="fuel-rating" value="fuel-rating-c"
                            class="w-4 h-4 text-yellow-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">C</span>
                    </label>
                    <label class="rating-item rating-d flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="fuel-rating" value="fuel-rating-d"
                            class="w-4 h-4 text-amber-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">D</span>
                    </label>
                    <label class="rating-item rating-e flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="fuel-rating" value="fuel-rating-e"
                            class="w-4 h-4 text-orange-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">E</span>
                    </label>
                    <label class="rating-item rating-f flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="fuel-rating" value="fuel-rating-f"
                            class="w-4 h-4 text-red-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">F</span>
                    </label>
                    <label class="rating-item rating-g flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="fuel-rating" value="fuel-rating-g" disabled
                            class="w-4 h-4 text-red-600 rounded focus:ring-brand-blue focus:ring-2 mr-3 cursor-not-allowed">
                        <span class="font-medium">G</span>
                    </label>
                </div>
            </div>

            <!-- Wet Grip -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Nedves tapadás</h3>
                <div class="space-y-2">
                    <label class="rating-item wet-rating-a flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="wet-rating" value="wet-rating-a"
                            class="w-4 h-4 text-blue-800 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">A</span>
                    </label>
                    <label class="rating-item wet-rating-b flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="wet-rating" value="wet-rating-b"
                            class="w-4 h-4 text-blue-700 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">B</span>
                    </label>
                    <label class="rating-item wet-rating-c flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="wet-rating" value="wet-rating-c"
                            class="w-4 h-4 text-blue-600 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">C</span>
                    </label>
                    <label class="rating-item wet-rating-d flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="wet-rating" value="wet-rating-d"
                            class="w-4 h-4 text-blue-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">D</span>
                    </label>
                    <label class="rating-item wet-rating-e flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="wet-rating" value="wet-rating-e"
                            class="w-4 h-4 text-blue-400 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">E</span>
                    </label>
                    <label class="rating-item wet-rating-f flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="wet-rating" value="wet-rating-f"
                            class="w-4 h-4 text-blue-300 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">F</span>
                    </label>
                    <label class="rating-item wet-rating-g flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="wet-rating" value="wet-rating-g" disabled
                            class="w-4 h-4 text-blue-200 rounded focus:ring-brand-blue focus:ring-2 mr-3 cursor-not-allowed">
                        <span class="font-medium">G</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="bg-green-600 text-white p-4 mb-6 rounded-lg">
            <h3 class="font-semibold mb-2">ÜGYFÉLSZOLGÁLAT</h3>
            <p class="text-sm mb-2">Hívjon minket, ha megtudásával kapcsolatban kérdése van!</p>
            <div class="flex items-center text-lg font-bold">
                <i class="fas fa-phone mr-2"></i>
                +36 1 123 45 67
            </div>
        </div>

        <!-- Opening Hours -->
        <div class="mt-4 text-sm text-gray-600">
            <div class="font-semibold mb-2">ELÉRHETŐSÉG</div>
            <div>H-P: 8:00 - 18:00</div>
            <div>SZ: 8:00 - 15:00</div>
            <div>V: ZÁRVA</div>
        </div>
    </div>
</div>
