<x-layouts.app>
    <x-slot name="title">Váltóméret kalkulátor</x-slot>
    <x-slot name="description">Gumiméret váltó kalkulátor - ellenőrizze, hogy az új gumiabroncs mérete megfelelő-e.
        Számítsa ki a kerék átmérőjét és az eltérést.</x-slot>
    <x-slot name="keywords">váltóméret kalkulátor, gumiméret váltó, gumiabroncs méret, kerék átmérő, tire
        calculator</x-slot>

    <!-- Breadcrumb -->
    <x-breadcrumb />

    <!-- Header Section -->
    <section class="bg-white py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Váltóméret kalkulátor</h1>
            <p class="text-gray-600 text-lg">A gumiméret váltó program segítségével megtudhatja, hogy a jelenleg
                használt gumiabroncs helyett, milyen más méretű abroncsokat szerelhet fel gépjárművére.</p>
        </div>
    </section>

    <!-- Calculator Section -->
    <section class="py-12 bg-gray-50" x-data="tireCalculator()">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl">

                <!-- Original Tire Size -->
                <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                    <div class="flex items-center mb-6">
                        <img src="{{ Vite::asset('resources/images/tyre.webp') }}" alt="Eredeti gumi mérete"
                            class="w-16 h-16 mr-3">
                        <h2 class="text-2xl font-bold text-gray-900">Eredeti gumi mérete</h2>
                    </div>

                    <div class="grid md:grid-cols-4 gap-6 items-end">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Szélesség</label>
                            <select x-model="original.width" @change="calculateOriginal()"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-brand-blue focus:border-brand-blue">
                                <option value="">---</option>
                                <template x-for="width in widthOptions" :key="width">
                                    <option :value="width" x-text="width"></option>
                                </template>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Profil</label>
                            <select x-model="original.profile" @change="calculateOriginal()"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-brand-blue focus:border-brand-blue">
                                <option value="">---</option>
                                <template x-for="profile in profileOptions" :key="profile">
                                    <option :value="profile" x-text="profile"></option>
                                </template>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Felni átmérő</label>
                            <select x-model="original.rim" @change="calculateOriginal()"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-brand-blue focus:border-brand-blue">
                                <option value="">---</option>
                                <template x-for="rim in rimOptions" :key="rim">
                                    <option :value="rim" x-text="'R' + rim"></option>
                                </template>
                            </select>
                        </div>

                        <div>
                            <div class="bg-gray-100 px-4 py-2 rounded-md">
                                <span class="text-sm text-gray-600">Kerék átmérő:</span>
                                <span class="font-bold text-gray-900" x-text="original.diameter + 'mm'"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New Tire Size #1 -->
                <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                    <div class="flex items-center mb-6">
                        <img src="{{ Vite::asset('resources/images/tyre.webp') }}" alt="Eredeti gumi mérete"
                            class="w-16 h-16 mr-3">
                        <h2 class="text-2xl font-bold text-gray-900">#1. Felszerelni kívánt gumi mérete</h2>
                    </div>

                    <div class="grid md:grid-cols-4 gap-6 items-end">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Szélesség</label>
                            <select x-model="new1.width" @change="calculateNew1()"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-brand-blue focus:border-brand-blue">
                                <option value="">---</option>
                                <template x-for="width in widthOptions" :key="width">
                                    <option :value="width" x-text="width"></option>
                                </template>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Profil</label>
                            <select x-model="new1.profile" @change="calculateNew1()"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-brand-blue focus:border-brand-blue">
                                <option value="">---</option>
                                <template x-for="profile in profileOptions" :key="profile">
                                    <option :value="profile" x-text="profile"></option>
                                </template>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Felni átmérő</label>
                            <select x-model="new1.rim" @change="calculateNew1()"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-brand-blue focus:border-brand-blue">
                                <option value="">---</option>
                                <template x-for="rim in rimOptions" :key="rim">
                                    <option :value="rim" x-text="'R' + rim"></option>
                                </template>
                            </select>
                        </div>

                        <div>
                            <div class="bg-gray-100 px-4 py-2 rounded-md">
                                <span class="text-sm text-gray-600">Kerék átmérő:</span>
                                <span class="font-bold text-gray-900" x-text="new1.diameter + 'mm'"></span>
                            </div>
                        </div>

                        <div x-show="new1.difference !== null">
                            <div class="px-4 py-2 rounded-md text-center"
                                :class="new1.isValid ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'">
                                <span class="text-sm font-medium">Eltérés:</span>
                                <br>
                                <span class="font-bold" x-text="new1.difference + '%'"></span>
                                <br>
                                <span class="text-xs" x-text="new1.isValid ? 'Megfelelő' : 'Nem ajánlott'"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New Tire Size #2 -->
                <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                    <div class="flex items-center mb-6">
                        <img src="{{ Vite::asset('resources/images/tyre.webp') }}" alt="Eredeti gumi mérete"
                            class="w-16 h-16 mr-3">
                        <h2 class="text-2xl font-bold text-gray-900">#2. Felszerelni kívánt gumi mérete</h2>
                    </div>

                    <div class="grid md:grid-cols-4 gap-6 items-end">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Szélesség</label>
                            <select x-model="new2.width" @change="calculateNew2()"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-brand-blue focus:border-brand-blue">
                                <option value="">---</option>
                                <template x-for="width in widthOptions" :key="width">
                                    <option :value="width" x-text="width"></option>
                                </template>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Profil</label>
                            <select x-model="new2.profile" @change="calculateNew2()"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-brand-blue focus:border-brand-blue">
                                <option value="">---</option>
                                <template x-for="profile in profileOptions" :key="profile">
                                    <option :value="profile" x-text="profile"></option>
                                </template>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Felni átmérő</label>
                            <select x-model="new2.rim" @change="calculateNew2()"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-brand-blue focus:border-brand-blue">
                                <option value="">---</option>
                                <template x-for="rim in rimOptions" :key="rim">
                                    <option :value="rim" x-text="'R' + rim"></option>
                                </template>
                            </select>
                        </div>

                        <div>
                            <div class="bg-gray-100 px-4 py-2 rounded-md">
                                <span class="text-sm text-gray-600">Kerék átmérő:</span>
                                <span class="font-bold text-gray-900" x-text="new2.diameter + 'mm'"></span>
                            </div>
                        </div>

                        <div x-show="new2.difference !== null">
                            <div class="px-4 py-2 rounded-md text-center"
                                :class="new2.isValid ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'">
                                <span class="text-sm font-medium">Eltérés:</span>
                                <br>
                                <span class="font-bold" x-text="new2.difference + '%'"></span>
                                <br>
                                <span class="text-xs" x-text="new2.isValid ? 'Megfelelő' : 'Nem ajánlott'"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Nálunk megtalálod a megfelelőt!</h2>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="flex items-end p-4 aspect-square rounded-lg"
                            style="background-image:url('{{ Storage::url('images/car-tires-close-up-2025-01-10-15-13-12-utc.webp') }}'); background-size: cover; background-position: center;">
                            <a href="#"
                                class="flex items-center justify-between bg-brand-blue hover:bg-white text-white hover:text-brand-blue px-6 py-3 rounded-md hover:bg-brand-blue-dark transition-colors">
                                <span>Megnézem a gumiabroncsokat</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="flex items-end p-4 aspect-square rounded-lg"
                            style="background-image:url('{{ Storage::url('images/supercar-parked-inside-parking-spot-2025-03-14-15-17-50-utc.webp') }}'); background-size: cover; background-position: center;">
                            <a href="#"
                                class="flex items-center justify-between bg-brand-blue hover:bg-white text-white hover:text-brand-blue px-6 py-3 rounded-md hover:bg-brand-blue-dark transition-colors">
                                <span>Alufelnit keresek autótípus szerint (ajánlott)</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="flex items-end p-4 aspect-square rounded-lg"
                            style="background-image:url('{{ Storage::url('images/detailed-close-up-of-a-sleek-black-car-wheel-showc-2025-02-25-23-42-56-utc.webp') }}'); background-size: cover; background-position: center;">
                            <a href="#"
                                class="flex items-center justify-between bg-brand-blue hover:bg-white text-white hover:text-brand-blue px-6 py-3 rounded-md hover:bg-brand-blue-dark transition-colors">
                                <span>Alufelnit keresek osztókör szerint (expert)</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Information Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12">

                <!-- Why is it important? -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Miért fontos a gumiméret váltó kalkulátor?</h2>
                    <div class="space-y-4 text-gray-600">
                        <p>A gyári mérettől bizonyos fokig el lehet térni anélkül, hogy az veszélyeztetné a vezetést,
                            túl nagy eltérés esetén azonban hibás működés, nagy kopás és balesetveszély is fenyegetheti
                            az autó tulajdonosokat.</p>
                        <p>Új gumiabroncs vásárlása előtt rendkívül fontos, hogy a gumiméret váltó kalkulátorral
                            ellenőrizze, hogy biztosan megfelelő méretű abroncsot választ.</p>
                        <p>A szakértők mindössze 2,5%-os eltérést engednek, ennek kiszámolásában segít a fenti gumiméret
                            váltókalkulátor, mely gyorsan és könnyen használható, valamint megbízható eredményt ad.</p>
                    </div>
                </div>

                <!-- How does it work? -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Hogyan működik a váltóméret kalkulátor?</h2>
                    <div class="space-y-4 text-gray-600">
                        <p>A fenti kalkulátorba a gyári méretek megadását követően megadhatja a felszerelni kívánt új
                            gumiabroncs méreteit. Amennyiben az új méret eltérése nem haladja meg a szakértők által
                            engedélyezett 2,5%-os eltérést, úgy egyetlen kattintással máris nézelődhet a választott
                            gumiabroncs méretek között oldalunk kínálatából.</p>
                        <div class="bg-gray-200 p-4 rounded-lg">
                            <h3 class="font-semibold text-gray-900 mb-2">Példa a kalkulátor működésére:</h3>
                            <p>175/60 R15-ös gumiabroncs biztonsággal helyettesíthető egy 165/65 R15-ös gumival, de
                                185/70 R15-össel már nem. A felszerelni kívánt gumi méretei alatt az adatok megadása
                                után megjelenő dobozban zölddel jelölve láthatja a megfelelő méretű abroncsot és
                                pirossal azt, amit már nem érdemes felszerelni a gépjárművére.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function tireCalculator() {
            return {
                original: {
                    width: '205',
                    profile: '55',
                    rim: '16',
                    diameter: 632
                },
                new1: {
                    width: '',
                    profile: '',
                    rim: '',
                    diameter: 0,
                    difference: null,
                    isValid: false
                },
                new2: {
                    width: '',
                    profile: '',
                    rim: '',
                    diameter: 0,
                    difference: null,
                    isValid: false
                },
                widthOptions: [135, 145, 155, 165, 175, 185, 195, 205, 215, 225, 235, 245, 255, 265, 275, 285, 295, 305,
                    315, 325, 335, 345, 355
                ],
                profileOptions: [25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85],
                rimOptions: [13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],

                init() {
                    this.calculateOriginal();
                },

                calculateDiameter(width, profile, rim) {
                    if (!width || !profile || !rim) return 0;
                    const sidewallHeight = (width * profile / 100);
                    const rimDiameterMm = rim * 25.4; // inch to mm
                    return Math.round(rimDiameterMm + (2 * sidewallHeight));
                },

                calculateOriginal() {
                    this.original.diameter = this.calculateDiameter(
                        this.original.width,
                        this.original.profile,
                        this.original.rim
                    );
                },

                calculateNew1() {
                    this.new1.diameter = this.calculateDiameter(
                        this.new1.width,
                        this.new1.profile,
                        this.new1.rim
                    );
                    this.calculateDifference(this.new1);
                },

                calculateNew2() {
                    this.new2.diameter = this.calculateDiameter(
                        this.new2.width,
                        this.new2.profile,
                        this.new2.rim
                    );
                    this.calculateDifference(this.new2);
                },

                calculateDifference(tire) {
                    if (tire.diameter === 0 || this.original.diameter === 0) {
                        tire.difference = null;
                        tire.isValid = false;
                        return;
                    }

                    const difference = Math.abs(tire.diameter - this.original.diameter);
                    const percentage = Math.round((difference / this.original.diameter) * 100 * 10) / 10;

                    tire.difference = percentage;
                    tire.isValid = percentage <= 2.5;
                }
            }
        }
    </script>

</x-layouts.app>
