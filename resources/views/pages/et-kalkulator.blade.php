<x-layouts.app>
    <x-slot name="title">ET kalkulátor</x-slot>
    <x-slot name="description">ET kalkulátor - számítsa ki a felni offset változását. Kiszámíthatja, mennyivel változik a
        kerék belső és külső szélének helyzete.</x-slot>
    <x-slot name="keywords">ET kalkulátor, felni offset, wheel offset, ET érték, felni számítás, offset
        calculator</x-slot>

    <!-- Breadcrumb -->
    <x-breadcrumb />

    <!-- Header Section -->
    <section class="bg-white py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">ET kalkulátor</h1>
            <p class="text-gray-600 text-lg">A kalkulátor segítségével kiszámíthatod, mennyivel változik a kerék belső
                és szélső szélének helyzete az eredetihez képest.</p>
        </div>
    </section>

    <!-- Calculator Section -->
    <section class="py-12 bg-gray-50" x-data="etCalculator()">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">

                <!-- Calculator Card -->
                <div class="bg-white rounded-lg shadow-lg p-8">

                    <!-- Current Wheel -->
                    <div class="mb-8">
                        <div class="flex items-center mb-4">
                            <img src="{{ Vite::asset('resources/images/tyre.webp') }}" alt="Jelenlegi felni méretei"
                                class="w-16 h-16 mr-3">
                            <h2 class="text-xl font-bold text-gray-900">Jelenlegi felni méretei</h2>
                        </div>

                        <div class="grid grid-cols-2 gap-3 max-w-md">
                            <div>
                                <label class="block text-xs font-medium text-gray-600 mb-1">Szélesség (coll)</label>
                                <select x-model="current.width" @change="calculateDifference()"
                                    class="w-full px-2 py-2 text-sm border border-gray-300 rounded focus:outline-none focus:ring-brand-blue focus:border-brand-blue">
                                    <option value="">---</option>
                                    <template x-for="width in widthOptions" :key="width">
                                        <option :value="width" x-text="width + ' coll'"></option>
                                    </template>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-gray-600 mb-1">ET (mm)</label>
                                <select x-model="current.et" @change="calculateDifference()"
                                    class="w-full px-2 py-2 text-sm border border-gray-300 rounded focus:outline-none focus:ring-brand-blue focus:border-brand-blue">
                                    <option value="">---</option>
                                    <template x-for="et in etOptions" :key="et">
                                        <option :value="et" x-text="et + ' mm'"></option>
                                    </template>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr class="my-8">

                    <!-- New Wheel -->
                    <div class="mb-8">
                        <div class="flex items-center mb-4">
                            <img src="{{ Vite::asset('resources/images/tyre.webp') }}" alt="Új felni méretei"
                                class="w-16 h-16 mr-3">
                            <h2 class="text-xl font-bold text-gray-900">Új felni méretei</h2>
                        </div>

                        <div class="grid grid-cols-2 gap-3 max-w-md">
                            <div>
                                <label class="block text-xs font-medium text-gray-600 mb-1">Szélesség (coll)</label>
                                <select x-model="new.width" @change="calculateDifference()"
                                    class="w-full px-2 py-2 text-sm border border-gray-300 rounded focus:outline-none focus:ring-brand-blue focus:border-brand-blue">
                                    <option value="">---</option>
                                    <template x-for="width in widthOptions" :key="width">
                                        <option :value="width" x-text="width + ' coll'"></option>
                                    </template>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-gray-600 mb-1">ET (mm)</label>
                                <select x-model="new.et" @change="calculateDifference()"
                                    class="w-full px-2 py-2 text-sm border border-gray-300 rounded focus:outline-none focus:ring-brand-blue focus:border-brand-blue">
                                    <option value="">---</option>
                                    <template x-for="et in etOptions" :key="et">
                                        <option :value="et" x-text="et + ' mm'"></option>
                                    </template>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr class="my-8">

                    <!-- Results -->
                    <div x-show="showResults" class="mb-8">
                        <div class="flex items-center mb-4">
                            <svg class="w-8 h-8 mr-3 text-brand-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                </path>
                            </svg>
                            <h2 class="text-xl font-bold text-gray-900">Eredmények</h2>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-2xl">
                            <div class="bg-brand-blue/20 px-4 py-3 rounded-lg">
                                <span class="block text-sm font-medium text-blue-900">A felni belső széle:</span>
                                <span class="block text-lg font-bold text-blue-900" x-text="results.inner"></span>
                            </div>

                            <div class="bg-brand-blue/10 px-4 py-3 rounded-lg">
                                <span class="block text-sm font-medium text-green-900">A felni külső széle:</span>
                                <span class="block text-lg font-bold text-green-900" x-text="results.outer"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Important Note -->
                    <div class="bg-orange-50 border-l-4 border-orange-400 p-4 mb-8">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-orange-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-orange-700">
                                    <strong>Figyelem!</strong> A kalkulált méret semmiképp nem jelenti azt, hogy a
                                    választott méretű kerék el fog férni az adott autón, csak tájékoztatást ad a
                                    változás értékéről.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Hasznos linkek</h3>
                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
                            <a href="/valtomeret-kalkulator"
                                class="bg-brand-blue text-white px-4 py-2 rounded text-sm text-center hover:bg-brand-blue-dark transition-colors">
                                Váltóméret kalkulátor
                            </a>
                            <a href="#"
                                class="bg-brand-blue text-white px-4 py-2 rounded text-sm text-center hover:bg-brand-blue-dark transition-colors">
                                Felnik autó szerint
                            </a>
                            <a href="#"
                                class="bg-brand-blue text-white px-4 py-2 rounded text-sm text-center hover:bg-brand-blue-dark transition-colors">
                                Felni kereső
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

                <!-- What is ET? -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Mi az ET érték?</h2>
                    <div class="space-y-4 text-gray-600">
                        <p>Az ET (Einpress Tiefe) érték megmutatja, hogy a felni középvonala milyen távolságra van a
                            felni járműhöz csatlakozó felületétől. Ez az érték milliméterben van megadva.</p>
                        <p>Pozitív ET érték esetén a felni középvonala a csatlakozási felülettől kifelé, negatív ET
                            érték esetén befelé található.</p>
                        <p>Az ET érték befolyásolja a kerék elhelyezkedését a kerékjárati üregben, így hatással van a
                            jármű stabilitására és a vezetési tulajdonságokra.</p>
                    </div>
                </div>

                <!-- How to use the calculator -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Hogyan használjuk a kalkulátort?</h2>
                    <div class="space-y-4 text-gray-600">
                        <p>Adja meg a jelenlegi felni szélességét és ET értékét, majd az új felni paramétereit. A
                            kalkulátor automatikusan kiszámítja, mennyivel változik a kerék belső és külső szélének
                            helyzete.</p>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-semibold text-gray-900 mb-2">Fontos tudnivalók:</h3>
                            <ul class="list-disc list-inside space-y-1 text-sm">
                                <li>A felni szélessége col-ban (inch) van megadva</li>
                                <li>Az ET érték milliméterben van megadva</li>
                                <li>A számítás csak tájékoztató jellegű</li>
                                <li>Mindig konzultáljon szakemberrel a felni választás előtt</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function etCalculator() {
            return {
                current: {
                    width: '7',
                    et: '45'
                },
                new: {
                    width: '7',
                    et: '45'
                },
                results: {
                    inner: 'Nincs változás',
                    outer: 'Nincs változás'
                },
                showResults: false,
                widthOptions: [5, 5.5, 6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 12.5, 13],
                etOptions: [
                    -25, -20, -15, -10, -5, 0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80
                ],

                init() {
                    this.calculateDifference();
                },

                calculateDifference() {
                    if (!this.current.width || !this.current.et || !this.new.width || !this.new.et) {
                        this.showResults = false;
                        return;
                    }

                    // Calculate width difference in mm (1 inch = 25.4mm)
                    const currentWidthMm = parseFloat(this.current.width) * 25.4;
                    const newWidthMm = parseFloat(this.new.width) * 25.4;
                    const widthDifferenceMm = newWidthMm - currentWidthMm;

                    // Calculate ET difference
                    const currentET = parseInt(this.current.et);
                    const newET = parseInt(this.new.et);
                    const etDifference = newET - currentET;

                    // Calculate inner edge change (ET difference)
                    const innerChange = etDifference;

                    // Calculate outer edge change (ET difference + width difference)
                    const outerChange = etDifference + widthDifferenceMm;

                    // Format results
                    this.results.inner = this.formatChange(innerChange);
                    this.results.outer = this.formatChange(outerChange);

                    this.showResults = true;
                },

                formatChange(change) {
                    if (change === 0) {
                        return 'Nincs változás';
                    } else if (change > 0) {
                        return `${change.toFixed(1)} mm kifelé`;
                    } else {
                        return `${Math.abs(change).toFixed(1)} mm befelé`;
                    }
                }
            }
        }
    </script>

</x-layouts.app>
