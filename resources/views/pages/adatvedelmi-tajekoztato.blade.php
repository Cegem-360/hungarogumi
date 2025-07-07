<x-layouts.app>
    <x-slot name="title">Adatvédelmi tájékoztató</x-slot>
    <x-slot name="description">Adatvédelmi tájékoztató a Hungarogumi webáruház személyes adatkezelési gyakorlatáról, GDPR
        megfelelőségről és cookie használatról.</x-slot>
    <x-slot name="keywords">adatvédelem, GDPR, személyes adatok, cookie, sütik, adatkezelés, adatbiztonság,
        privacy</x-slot>

    <!-- Breadcrumb -->
    <div class="container mx-auto px-4 py-3">
        <nav class="flex text-sm text-gray-500">
            <a href="/" class="hover:text-gray-700">Kezdőlap</a>
            <span class="mx-2">></span>
            <a href="#" class="hover:text-gray-700">Adatvédelmi tájékoztató</a>
        </nav>
    </div>

    <div class="min-h-screen bg-gray-50">
        <!-- Header Section -->
        <div class="bg-white shadow-sm border-b">
            <div class="container mx-auto px-4 py-8">
                <div class="max-w-4xl mx-auto">
                    <h1 class="text-3xl lg:text-4xl font-bold text-brand-anthracite mb-4">
                        Adatvédelmi tájékoztató
                    </h1>
                    <p class="text-lg text-gray-600">
                        Fontosnak tartjuk az adatok védelmét. Tájékozódjon személyes adatai kezeléséről és jogairól.
                    </p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container mx-auto px-4 py-8">
            <div class="max-w-4xl mx-auto space-y-8">

                <!-- Data Controller Section -->
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
                            <h2 class="text-2xl font-bold text-brand-anthracite">Az adatkezelő adatai</h2>
                            <p class="text-gray-600">Kik vagyunk és hogyan érhető el</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-gray-200 border-l-4 border-brand-blue p-4 rounded">
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <h4 class="font-semibold text-brand-anthracite mb-2">Adatkezelő:</h4>
                                    <p class="text-gray-700">Top Tyre Kft.</p>
                                    <p class="text-gray-700">1154 Budapest, Szentmihályi u. 100.</p>
                                    <p class="text-gray-700">Adószám: [adószám]</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-brand-anthracite mb-2">Kapcsolat:</h4>
                                    <p class="text-gray-700">Telefon: +36 1 415 2075</p>
                                    <p class="text-gray-700">E-mail: info@hungarogumi.hu</p>
                                    <p class="text-gray-700">Weboldal: hungarogumi.hu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Personal Data Processing Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-brand-anthracite">Személyes adatok kezelése</h2>
                            <p class="text-gray-600">Milyen adatokat kezelünk és miért</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="bg-gray-200 border-l-4 border-brand-blue p-4 rounded">
                            <h4 class="font-semibold text-brand-blue mb-2">Rendelés leadása</h4>
                            <p class="text-brand-anthracite mb-2">
                                <strong>Kezelt adatok:</strong> név, e-mail cím, telefonszám, szállítási és számlázási
                                cím
                            </p>
                            <p class="text-gray-700 text-sm">
                                <strong>Jogalap:</strong> szerződés teljesítése | <strong>Megőrzési idő:</strong> 8 év
                                (számviteli kötelezettség)
                            </p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-anthracite mb-2">Ügyfélszolgálat</h4>
                                <p class="text-gray-700 text-sm mb-2">Név, e-mail, telefonszám, üzenet tartalma</p>
                                <p class="text-gray-600 text-xs">Jogos érdek | 3 év</p>
                            </div>
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-anthracite mb-2">Hírlevél</h4>
                                <p class="text-gray-700 text-sm mb-2">E-mail cím, név</p>
                                <p class="text-gray-600 text-xs">Hozzájárulás | Leiratkozásig</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Your Rights Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.5-2A2.5 2.5 0 0119 10v4a2.5 2.5 0 01-2.5 2.5H5a2.5 2.5 0 01-2.5-2.5V10A2.5 2.5 0 015 7.5h11.5A2.5 2.5 0 0119 10z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-brand-anthracite">Az Ön jogai</h2>
                            <p class="text-gray-600">GDPR szerinti jogosultságok</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-blue mb-2">Tájékoztatáshoz való jog</h4>
                                <p class="text-gray-700 text-sm">Információ kérése az adatkezelésről</p>
                            </div>
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-blue mb-2">Hozzáférési jog</h4>
                                <p class="text-gray-700 text-sm">Betekintés a kezelt személyes adatokba</p>
                            </div>
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-blue mb-2">Helyesbítési jog</h4>
                                <p class="text-gray-700 text-sm">Helytelen adatok javításának kérése</p>
                            </div>
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-blue mb-2">Törlési jog</h4>
                                <p class="text-gray-700 text-sm">Adatok törlésének kérése ("elfeledtetéshez való jog")
                                </p>
                            </div>
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-blue mb-2">Korlátozási jog</h4>
                                <p class="text-gray-700 text-sm">Adatkezelés korlátozásának kérése</p>
                            </div>
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-blue mb-2">Hordozhatósági jog</h4>
                                <p class="text-gray-700 text-sm">Adatok strukturált formában való megkapása</p>
                            </div>
                        </div>

                        <div class="bg-gray-200 border-l-4 border-brand-blue p-4 rounded">
                            <p class="text-brand-anthracite">
                                <strong>Joggyakorlás:</strong> Jogainak gyakorlásához forduljon hozzánk az
                                info@hungarogumi.hu e-mail címen vagy a +36 1 415 2075 telefonszámon. Panasszal a
                                Nemzeti Adatvédelmi és Információszabadság Hatósághoz (NAIH) fordulhat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Cookies Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-brand-anthracite">Sütik (Cookie-k) használata</h2>
                            <p class="text-gray-600">Hogyan használjuk a sütiket weboldalunkon</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-gray-200 border-l-4 border-brand-blue p-4 rounded">
                            <p class="text-brand-anthracite">
                                A böngészési élmény fokozása, a személyre szabott hirdetések vagy tartalmak
                                megjelenítése, valamint a forgalom elemzése érdekében sütiket használunk.
                            </p>
                        </div>

                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-blue mb-2">Szükséges sütik</h4>
                                <p class="text-gray-700 text-sm">A weboldal alapvető működéséhez szükségesek</p>
                                <span
                                    class="inline-block mt-2 px-2 py-1 bg-brand-blue text-white text-xs rounded">Kötelező</span>
                            </div>
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-blue mb-2">Analitikai sütik</h4>
                                <p class="text-gray-700 text-sm">Forgalom és felhasználói viselkedés elemzése</p>
                                <span
                                    class="inline-block mt-2 px-2 py-1 bg-gray-500 text-white text-xs rounded">Opcionális</span>
                            </div>
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-blue mb-2">Marketing sütik</h4>
                                <p class="text-gray-700 text-sm">Személyre szabott hirdetések megjelenítése</p>
                                <span
                                    class="inline-block mt-2 px-2 py-1 bg-gray-500 text-white text-xs rounded">Opcionális</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Security Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-brand-anthracite">Adatbiztonság</h2>
                            <p class="text-gray-600">Hogyan védjük az Ön adatait</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-blue mb-2">Technikai védelmi intézkedések</h4>
                                <ul class="text-gray-700 text-sm space-y-1">
                                    <li>• SSL titkosítás a weboldalon</li>
                                    <li>• Biztonságos szerver infrastruktúra</li>
                                    <li>• Rendszeres biztonsági mentések</li>
                                    <li>• Hozzáférés-kontrollos rendszerek</li>
                                </ul>
                            </div>
                            <div class="bg-gray-200 p-4 rounded-lg">
                                <h4 class="font-semibold text-brand-blue mb-2">Szervezési intézkedések</h4>
                                <ul class="text-gray-700 text-sm space-y-1">
                                    <li>• Munkatársak képzése</li>
                                    <li>• Titoktartási megállapodások</li>
                                    <li>• Hozzáférési jogosultságok kezelése</li>
                                    <li>• Incidenskezelési eljárások</li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-gray-200 border-l-4 border-brand-blue p-4 rounded">
                            <p class="text-brand-anthracite">
                                <strong>ISO 9001:2015 tanúsítvány:</strong> Vállalatunk érvényes ISO tanúsítvánnyal
                                rendelkezik, amely garantálja a minőségmenedzsment és az adatbiztonság magas szintjét.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Data Transfer Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-brand-anthracite">Adattovábbítás és -megosztás</h2>
                            <p class="text-gray-600">Kivel osztjuk meg az adatokat</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-gray-200 border-l-4 border-brand-blue p-4 rounded">
                            <h4 class="font-semibold text-brand-blue mb-2">Adatfeldolgozók</h4>
                            <p class="text-brand-anthracite mb-2">Az alábbi szolgáltatók segítségével dolgozzuk fel
                                adatait:</p>
                            <ul class="text-gray-700 text-sm space-y-1">
                                <li>• <strong>MPL:</strong> futárszolgáltatás</li>
                                <li>• <strong>Barion:</strong> online fizetési szolgáltatás</li>
                                <li>• <strong>Számlázz.hu:</strong> számla kiállítás</li>
                                <li>• <strong>IT szolgáltató:</strong> weboldal üzemeltetés</li>
                            </ul>
                        </div>

                        <div class="bg-gray-200 p-4 rounded-lg">
                            <h4 class="font-semibold text-brand-anthracite mb-2">Harmadik országba történő
                                adattovábbítás</h4>
                            <p class="text-gray-700 text-sm">
                                Személyes adatait kizárólag az Európai Unió területén kezeljük és tároljuk. Harmadik
                                országba történő adattovábbítás csak az Ön kifejezett hozzájárulásával vagy jogszabályi
                                kötelezettség esetén történik.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="bg-brand-blue rounded-lg shadow-md p-6 text-white">
                    <div class="text-center">
                        <h2 class="text-2xl font-bold mb-4">Kérdése van az adatvédelemmel kapcsolatban?</h2>
                        <p class="mb-6">Adatvédelmi kérdéseivel forduljon hozzánk bizalommal!</p>
                        <div class="flex flex-col md:flex-row justify-center items-center gap-4">
                            <a href="tel:+36141522075"
                                class="flex items-center bg-white text-brand-blue px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                +36 1 415 2075
                            </a>
                            <a href="mailto:info@hungarogumi.hu"
                                class="flex items-center bg-white text-brand-blue px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                info@hungarogumi.hu
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Last Updated -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="text-center text-gray-600">
                        <p class="text-sm">
                            <strong>Utolsó frissítés:</strong> 2025. július 7.<br>
                            Ez az adatvédelmi tájékoztató a GDPR (EU 2016/679 rendelet) és a magyar adatvédelmi
                            jogszabályok alapján készült.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layouts.app>
