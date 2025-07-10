<x-layouts.app>
    <x-slot name="title">Szállítás és fizetés</x-slot>
    <x-slot name="description">Szállítási lehetőségek, fizetési módok és átvételi feltételek a Hungarogumi gumiabroncs és
        alufelni webáruházban.</x-slot>
    <x-slot name="keywords">szállítás, fizetés, házhozszállítás, átvétel, Budapest, vidék, MPL, gumiabroncs,
        alufelni</x-slot>

    <!-- Breadcrumb -->
    <x-breadcrumb />

    <div class="min-h-screen bg-gray-50">
        <!-- Header Section -->
        <div class="bg-white shadow-sm border-b">
            <div class="container mx-auto px-4 py-8">
                <div class="max-w-4xl mx-auto">
                    <h1 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-4">
                        Szállítás és fizetés
                    </h1>
                    <p class="text-lg text-gray-600">
                        Tudjon meg mindent a szállítási lehetőségekről, fizetési módokról és átvételi feltételekről.
                    </p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-4xl mx-auto space-y-8">

                <!-- Budapest Delivery Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-2m-2 0H7m5 0v-9a2 2 0 00-2-2H8a2 2 0 00-2 2v9m8 0V9a2 2 0 012-2h2a2 2 0 012 2v.01M14 7v2a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-brand-anthracite">Szállítás Budapesten belül</h2>
                            <p class="text-gray-600">Gyors és megbízható házhozszállítás</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-gray-200 border-l-4 border-brand-blue p-4 rounded">
                            <p class="text-brand-anthracite">
                                <strong>Rendelési határidő:</strong> Ha rendelését munkanapon 11:00-ig leadja, még aznap
                                kiszállíthatjuk. 11:00 után leadott rendelések a következő munkanapon kerülnek
                                kiszállításra.
                            </p>
                        </div>

                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-anthracite mb-2">Gumi kiszállítása</h4>
                                <p class="text-2xl font-bold text-brand-blue">2 990 Ft/cím</p>
                            </div>
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-anthracite mb-2">Felni kiszállítása</h4>
                                <p class="text-2xl font-bold text-brand-blue">2 990 Ft/cím</p>
                            </div>
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-anthracite mb-2">Kiegészítő termék</h4>
                                <p class="text-2xl font-bold text-brand-blue">2 990 Ft/cím</p>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <h4 class="font-semibold text-brand-anthracite">Kiszállítási feltételek:</h4>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start">
                                    <span class="text-brand-blue mr-2 mt-1">✓</span>
                                    A rendelésről megkapta az e-mailes visszaigazolást
                                </li>
                                <li class="flex items-start">
                                    <span class="text-brand-blue mr-2 mt-1">✓</span>
                                    Előreutalásos fizetés esetén már átutalta a termékek árát
                                </li>
                                <li class="flex items-start">
                                    <span class="text-brand-blue mr-2 mt-1">✓</span>
                                    Kiszállítás munkanapokon 8:00-17:00 óra között
                                </li>
                            </ul>
                        </div>

                        <div class="bg-gray-200 border-l-4 border-brand-blue p-4 rounded">
                            <p class="text-brand-anthracite">
                                <strong>Figyelem!</strong> Budapesti házhozszállításnál utánvétel esetén csak készpénzes
                                fizetés lehetséges.
                            </p>
                        </div>

                        <div>
                            <h4 class="font-semibold text-brand-anthracite mb-2">Fizetési módok:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-gray-200 text-brand-anthracite px-3 py-1 rounded-full text-sm">Online
                                    bankkártyás
                                    fizetés</span>
                                <span class="bg-gray-200 text-brand-anthracite px-3 py-1 rounded-full text-sm">Banki
                                    előreutalás</span>
                                <span class="bg-gray-200 text-brand-anthracite px-3 py-1 rounded-full text-sm">Készpénz
                                    kiszállításkor</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Countryside Delivery Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-brand-anthracite">Szállítás vidékre</h2>
                            <p class="text-gray-600">MPL futárszolgálaton keresztül</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-gray-200 border-l-4 border-brand-blue p-4 rounded">
                            <p class="text-brand-anthracite">
                                <strong>Rendelési határidő:</strong> Ha rendelését munkanapon 14:00-ig leadja és a
                                termékek
                                készleten vannak, még aznap átadjuk a futárszolgálatnak. Az MPL 1-2 munkanapos
                                határidővel
                                szállít.
                            </p>
                        </div>

                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-anthracite mb-2">Gumi kiszállítása</h4>
                                <p class="text-2xl font-bold text-brand-blue">1 590 Ft/db</p>
                            </div>
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-anthracite mb-2">Felni kiszállítása</h4>
                                <p class="text-2xl font-bold text-brand-blue">1 590 Ft/db</p>
                            </div>
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-anthracite mb-2">Kiegészítő termék</h4>
                                <p class="text-2xl font-bold text-brand-blue">2 990 Ft/cím</p>
                            </div>
                        </div>

                        <div class="bg-gray-200 border-l-4 border-brand-blue p-4 rounded">
                            <p class="text-brand-anthracite">
                                <strong>Figyelem!</strong> Vidéki kiszállításnál a gumi- és felni termékek külön-külön
                                csomagonként kerülnek kiszállításra, így a díj darabonként értendő. (pl. 4 db felni
                                esetén 4
                                × 1 590 Ft = 6 360 Ft)
                            </p>
                        </div>

                        <div>
                            <h4 class="font-semibold text-brand-anthracite mb-2">Fizetési módok:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-gray-200 text-brand-anthracite px-3 py-1 rounded-full text-sm">Online
                                    bankkártyás
                                    fizetés</span>
                                <span class="bg-gray-200 text-brand-anthracite px-3 py-1 rounded-full text-sm">Banki
                                    előreutalás</span>
                                <span class="bg-gray-200 text-brand-anthracite px-3 py-1 rounded-full text-sm">Futárnál
                                    készpénzben vagy bankkártyával</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Personal Pickup Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-brand-anthracite">Személyes átvétel telephelyeinken</h2>
                            <p class="text-gray-600">Ingyenes átvétel, azonnal elvihet!</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-gray-200 border-l-4 border-brand-blue p-4 rounded">
                            <p class="text-brand-anthracite">
                                Ha a termék azonnali készleten van, a rendelés SMS-ben és e-mailben történő
                                visszaigazolását
                                követően azonnal jöhet érte. <strong>A személyes átvétel ingyenes!</strong>
                            </p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-anthracite mb-3">XX. Kerületi telephely
                                </h4>
                                <p class="text-gray-700 mb-2">Cím: Budapest, Nagysándor József u. 65, 1204</p>
                                <div class="text-sm text-gray-600">
                                    <ul class="text-gray-700 space-y-1">
                                        <li>hétfő 9:00–17:00</li>
                                        <li>kedd 9:00–17:00</li>
                                        <li>szerda 9:00–17:00</li>
                                        <li>csütörtök 9:00–17:00</li>
                                        <li>péntek 9:00–17:00</li>
                                        <li>szombat Zárva</li>
                                        <li>vasárnap Zárva</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="bg-gray-200 border-l-4 border-brand-blue p-4 rounded">
                            <p class="text-brand-anthracite">
                                <strong>Szakértőinkkel készséggel állunk rendelkezésésre!</strong> Telephelyeinken
                                hatalmas
                                árukészlettel várjuk, így nem csak az online rendelések átvételére van lehetőség, hanem
                                személyes vásárlásra is! Ráadásul felnipróbát is biztosítunk, így biztosan azt a
                                terméket
                                tudja választani, amely illeni fog az autójához!
                            </p>
                        </div>

                        <div>
                            <h4 class="font-semibold text-brand-anthracite mb-2">Fizetési módok:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-gray-200 text-brand-anthracite px-3 py-1 rounded-full text-sm">Online
                                    bankkártyás
                                    fizetés</span>
                                <span class="bg-gray-200 text-brand-anthracite px-3 py-1 rounded-full text-sm">Banki
                                    előreutalás</span>
                                <span
                                    class="bg-gray-200 text-brand-anthracite px-3 py-1 rounded-full text-sm">Helyszínen
                                    készpénzben vagy bankkártyával</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Important Information Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-brand-anthracite">Fontos információk</h2>
                            <p class="text-gray-600">Kérjük, vegye figyelembe a következőket</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-gray-200 border-l-4 border-brand-blue p-4 rounded">
                            <h4 class="font-semibold text-brand-blue mb-2">Telefonos egyeztetés szükséges!</h4>
                            <p class="text-brand-anthracite">
                                A rendeléseket beérkezési sorrendben, feldolgozási kapacitástól függően teljesítjük. A
                                kiszállítás előtt telefonos egyeztetés alapvetően szükséges. A megrendelés feldolgozása
                                után
                                munkatársunk a megadott telefonszámon fog jelentkezni.
                            </p>
                        </div>

                        <div class="bg-gray-200 p-4 rounded-lg">
                            <h4 class="font-semibold text-brand-anthracite mb-2">Számlázási információk</h4>
                            <p class="text-gray-700">
                                Az adótörvényeknek megfelelően Cég, Alapítvány, vagy adószámmal rendelkező magánszemély
                                esetén a számlán fel kell tüntetni az adószámot. Rendelés esetén kérjük küldjék el az
                                adószámot, bolti vásárlás esetén pedig adják meg Kollégáinknak.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Warranty Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-brand-anthracite">Garanciális ügyintézés</h2>
                            <p class="text-gray-600">Hogyan intézze garanciális ügyeit</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-blue mb-2">Házhozszállított termékek</h4>
                                <p class="text-gray-700 text-sm">
                                    Postai úton is intézhető. A hibásnak vélt terméket minden esetben a XX. Kerületi
                                    telephelyünkre lehet visszaküldeni ( Budapest, Nagysándor József u. 65, 1204)
                                </p>
                            </div>
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-blue mb-2">Üzletben átvett termékek</h4>
                                <p class="text-gray-700 text-sm">
                                    Garanciális ügyintézésére kizárólag személyesen van lehetőség telephelyeinken.
                                </p>
                            </div>
                        </div>

                        <div class="bg-gray-200 border-l-4 border-brand-blue p-4 rounded">
                            <p class="text-brand-anthracite">
                                <strong>Visszaküldéshez szükséges:</strong> számla és pontos hibaleírás. Előzetes
                                írásbeli
                                jelzést a info@somiautomotive.hu e-mail címre kérjük küldeni. A bevizsgált, hibátlan
                                termékek
                                visszajuttatásának költsége a vásárlót terheli.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="bg-brand-blue rounded-lg shadow-md p-6 text-white">
                    <div class="text-center">
                        <h2 class="text-2xl font-bold mb-4">További kérdései vannak?</h2>
                        <p class="mb-6">Munkatársaink készséggel állnak rendelkezésére!</p>
                        <div class="flex flex-col md:flex-row justify-center items-center gap-4">
                            <a href="tel:+36307009668"
                                class="flex items-center bg-white text-brand-blue px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                +36 30 700 9668
                            </a>
                            <a href="mailto:info@somiautomotive.hu"
                                class="flex items-center bg-white text-brand-blue px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                info@somiautomotive.hu
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layouts.app>
