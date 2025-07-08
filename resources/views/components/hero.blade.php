@use('App\Models\Product')
<section class="hero-bg py-16 text-white"
    style="background: url('{{ Storage::url('images/IMG_5177.webp') }}') no-repeat center center; background-size: cover;">
    <div class="container mx-auto p-12 bg-white/20 border border-white/15 backdrop-blur-2xl shadow-2xl rounded-xl">
        <div class="flex justify-end mb-4">
            <button id="toggle-button"
                class="bg-brand-blue text-white py-2 px-4 rounded-md font-semibold hover:bg-brand-blue/80">
                <span id="toggle-text">Mutasd a gumi keresőt</span>
            </button>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Wheel Search -->
            <div id="wheel-search" class="h-[350px] bg-white rounded-lg p-6 text-brand-anthracite mb-4 md:mb-0">
                <div class="w-full  max-h-max">
                    <h2 class="text-xl font-bold mb-4">Keress autófelni méret alapján</h2>
                    <div class="grid grid-cols-1">
                        <div class="grid grid-cols-4 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium mb-1">Lyukosztás</label>
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                                    @foreach (Product::whereNotNull('bolt_count')->orderByDesc('bolt_count')->get()->pluck('bolt_count')->unique() as $productBoltCount)
                                        <option value="{{ $productBoltCount }}">{{ $productBoltCount }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Osztókör*</label>
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                                    @foreach (Product::whereNotNull('pcd')->orderByDesc('pcd')->get()->pluck('pcd')->unique() as $productPCD)
                                        <option value="{{ $productPCD }}">{{ $productPCD }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Coll*</label>
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                                    @foreach (Product::whereNotNull('diameter')->orderByDesc('diameter')->get()->pluck('diameter')->unique() as $productDiameter)
                                        <option value="{{ $productDiameter }}">{{ $productDiameter }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Idény</label>
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                                    @foreach (Product::whereNotNull('for_winter')->orderByDesc('for_winter')->get()->pluck('for_winter')->unique() as $productForWinter)
                                        <option value="{{ $productForWinter }}">{{ $productForWinter }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Részletes kereső panel -->
                        <div x-data="{ open: false }" class="mb-4 w-full grid grid-cols-1">
                            <div class="bg-gray-100 rounded-t-md px-4 md:px-6 py-3 flex items-center justify-between cursor-pointer select-none w-full"
                                @click="open = !open">
                                <span class="text-lg font-bold">Részletes kereső</span>
                                <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transition-transform" fill="none"
                                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                            <div x-show="open" x-transition
                                class="bg-gray-50 border border-t-0 border-gray-200 rounded-b-md p-6 w-full">
                                <div class="grid grid-cols-2 gap-8">
                                    <div>
                                        <label class="block text-sm font-medium mb-1">Márka</label>
                                        <select
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                                            <option>Összes...</option>
                                            <option>Alcar</option>
                                            <option>Enkei</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium mb-1">Jármű típus</label>
                                        <select
                                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                                            <option>Összes...</option>
                                            <option>Személyautó</option>
                                            <option>Teherautó</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-8 mt-6">
                                    <div>
                                        <label class="block text-sm font-medium mb-1">Felni típus</label>
                                        <div class="flex items-center gap-4">
                                            <input type="checkbox" id="alu"
                                                class="rounded border-gray-300 focus:ring-2 focus:ring-brand-blue">
                                            <label for="alu" class="text-sm">Alufelni</label>
                                            <input type="checkbox" id="lemez"
                                                class="rounded border-gray-300 focus:ring-2 focus:ring-brand-blue">
                                            <label for="lemez" class="text-sm">Lemezfelni</label>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium mb-1">Árkategória</label>
                                        <div class="flex items-center gap-4">
                                            <input type="checkbox" id="budget"
                                                class="rounded border-gray-300 focus:ring-2 focus:ring-brand-blue">
                                            <label for="budget" class="text-sm">Budget</label>
                                            <input type="checkbox" id="kozep"
                                                class="rounded border-gray-300 focus:ring-2 focus:ring-brand-blue">
                                            <label for="kozep" class="text-sm">Közép</label>
                                            <input type="checkbox" id="premium"
                                                class="rounded border-gray-300 focus:ring-2 focus:ring-brand-blue">
                                            <label for="premium" class="text-sm">Prémium</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- FIX: SOS need fix to hungarogumi.hu/kereső --}}
                        {{-- <div class="flex flex-wrap gap-2 mb-4 text-xs">
                            <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">Runflat</button>
                            <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">Peremvédős</button>
                            <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">Extra terhelés</button>
                            <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">Téli</button>
                            <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">Négyévszakos</button>
                        </div>
                        <button
                            class="w-full bg-brand-blue text-white py-3 rounded-md font-semibold hover:bg-brand-blue/80">
                            <i class="fas fa-search mr-2"></i>Találatok megjelenítése
                        </button> --}}
                    </div>
                </div>
            </div>
            <!-- Tyre Search -->
            <div id="tyre-search" class="h-[350px] bg-white rounded-lg p-6 text-brand-anthracite hidden">
                <h2 class="text-xl font-bold mb-4">Keress autógumit méret alapján</h2>

                <div class="grid grid-cols-4 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Szélesség</label>
                        <select
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                            @foreach (Product::whereNotNull('width')->orderByDesc('width')->get()->pluck('width')->unique() as $productWidth)
                                <option value="{{ $productWidth }}">{{ $productWidth }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Oldalfal magasság</label>
                        <select
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                            @foreach (Product::whereNotNull('aspect_ratio')->orderByDesc('aspect_ratio')->get()->pluck('aspect_ratio')->unique() as $productAspectRatio)
                                <option value="{{ $productAspectRatio }}">{{ $productAspectRatio }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Felni átmérő</label>
                        <select
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                            @foreach (Product::whereNotNull('diameter')->orderBy('diameter')->get()->pluck('diameter')->unique() as $productDiameter)
                                <option value="{{ $productDiameter }}">{{ $productDiameter }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Szezon</label>
                        <select
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                            <option>Összes</option>
                            <option value="summer">Nyári</option>
                            <option value="winter">Téli</option>
                            <option value="allSeason">Négyévszakos</option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-wrap gap-2 mb-4 text-xs">

                    <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">Runflat</button>
                    <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">Peremvédős</button>
                    <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">Extra terhelés</button>
                    <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">Téli</button>
                    <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">Négyévszakos</button>
                </div>

                <button class="w-full bg-brand-blue text-white py-3 rounded-md font-semibold hover:bg-brand-blue/80">
                    <i class="fas fa-search mr-2"></i>Találatok megjelenítése
                </button>
            </div>

            <!-- Info Box -->
            <div
                class="h-[350px] relative overflow-hidden flex flex-col items-center justify-center bg-gradient-to-r from-amber-300/80 to-orange-400/80 text-center text-black rounded-lg p-12 mb-4">
                <img src="https://images.unsplash.com/photo-1581037558250-d23ff79ca9ea" alt="Gumiabroncs"
                    class="absolute inset-0 object-cover object-center -z-1">
                <h3 class="text-xl mb-8">Tudd meg, hány kilométerre elég az abroncsod!</h3>
                <h2 class="text-3xl font-bold mb-2">TÁVOLSÁG KALKULÁTOR</h2>

                <div class="bg-brand-anthracite text-white/80 rounded-full mt-4 p-4 w-24 text-4xl">
                    <i class="fa-solid fa-calculator"></i>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="grid md:grid-cols-4 gap-6 mt-12 text-center">
            <div class="bg-brand-anthracite/30 rounded-lg p-4">
                <div class="text-2xl font-bold mb-2">2 600+</div>
                <div class="text-sm">gumiabroncs felszerelve évente</div>
            </div>
            <div class="bg-brand-anthracite/30 rounded-lg p-4">
                <div class="text-2xl font-bold mb-2">Részletes visszaigazolás</div>
                <div class="text-sm">emailben minden rendelés után</div>
            </div>
            <div class="bg-brand-anthracite/30 rounded-lg p-4">
                <div class="text-2xl font-bold mb-2">Plusz védelem</div>
                <div class="text-sm">új abroncsokra kiterjesztett garancia</div>
            </div>
            <div class="bg-brand-anthracite/30 rounded-lg p-4">
                <div class="text-2xl font-bold mb-2">Tanúsított partnerhálózat</div>
                <div class="text-sm">szervizek országszerte</div>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('toggle-button').addEventListener('click', function() {
        const wheelSearch = document.getElementById('wheel-search');
        const tyreSearch = document.getElementById('tyre-search');
        const toggleText = document.getElementById('toggle-text');

        if (wheelSearch.classList.contains('hidden')) {
            wheelSearch.classList.remove('hidden');
            tyreSearch.classList.add('hidden');
            toggleText.textContent = 'Mutasd a gumi keresőt';
        } else {
            wheelSearch.classList.add('hidden');
            tyreSearch.classList.remove('hidden');
            toggleText.textContent = 'Mutasd a felni keresőt';
        }
    });
</script>
