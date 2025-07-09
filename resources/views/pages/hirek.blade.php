<x-layouts.app>
    <x-slot name="title">Hírek</x-slot>
    <x-slot name="description">Friss hírek a gumiabroncs és alufelni világából
    </x-slot>
    <x-slot name="keywords">hírek, gumiabroncsok, alufelnik, autós hírek, szakmai cikkek, újdonságok</x-slot>

    <!-- Breadcrumb -->
    <div class="container mx-auto px-4 py-3">
        <nav class="flex text-sm text-gray-500">
            <a href="/" class="hover:text-gray-700">Kezdőlap</a>
            <span class="mx-2">></span>
            <a href="#" class="hover:text-gray-700">Hírek</a>
        </nav>
    </div>

    <!-- Header Section -->
    <section class="bg-white py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Friss hírek</h1>
            <p class="text-gray-600 text-lg">Legfrissebb hírek a gumiabroncs és alufelni világából</p>
        </div>
    </section>

    <!-- News Articles Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid gap-8">

                <!-- News Article 1 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3">
                            <img src="{{ Storage::url('/images/IMG_5180.webp') }}" alt="Hungarogumi hírek"
                                class="w-full h-48 md:h-full object-cover">
                        </div>
                        <div class="md:w-2/3 p-6">
                            <div class="flex items-center mb-4">
                                <time class="text-sm text-gray-500">2025. június 23. 11:57</time>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                                <a href="#" class="hover:text-brand-blue transition-colors">
                                    MINŐSÉG, STÍLUS, TELJESÍTMÉNY – ÚJ PARTNERREL ERŐSÍT TURÁN FRIGYES – átvett cikk
                                </a>
                            </h2>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                A prémium alufelnik és gumiabroncsok szakértője, a Hungarogumi hivatalos partnerségre
                                lépett
                                Turán Frigyessel, Magyarország egyik legelismertebb ralipilótájával. A Hungarogumi –
                                hivatalos nevén Top-Tyre Kft. – több mint harminc éve van jelen a hazai gumiabroncs- és
                                alufelni-piacon. A kétgenerációs családi vállalkozásból mára az ország egyik vezető
                                szereplőjévé vált, amely két telephelyen, három raktárból, közel 20 ezer...
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-brand-blue hover:text-brand-blue-dark font-medium">
                                Tovább a cikkhez
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- News Article 2 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3">
                            <img src="{{ Storage::url('/images/IMG_5180.webp') }}" alt="Hungarogumi hírek"
                                class="w-full h-48 md:h-full object-cover">
                        </div>
                        <div class="md:w-2/3 p-6">
                            <div class="flex items-center mb-4">
                                <time class="text-sm text-gray-500">2024. február 06. 17:18</time>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                                <a href="#" class="hover:text-brand-blue transition-colors">
                                    Elektromos autóra, elektromos gumi??
                                </a>
                            </h2>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Azért itt még nem tartunk, viszont tagadhatatlan, hogy merőben új irányokat vesz a
                                klasszikus értelemben vett gumiabroncs gyártás és ennek az egyik alappillére a
                                kifejezetten
                                elektromos autókra homologizált abroncsok számának terjedése. Kiskereskedelmi
                                üzleteinkben
                                is már napi szinten előfordul, hogy az ügyfeleink az elektromos autóikra már olyan
                                abroncsokat keresnek, amik ezeket az új illetve speciális igényeket...
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-brand-blue hover:text-brand-blue-dark font-medium">
                                Tovább a cikkhez
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- News Article 3 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3">
                            <img src="{{ Storage::url('/images/IMG_5180.webp') }}" alt="Hungarogumi hírek"
                                class="w-full h-48 md:h-full object-cover">
                        </div>
                        <div class="md:w-2/3 p-6">
                            <div class="flex items-center mb-4">
                                <time class="text-sm text-gray-500">2023. október 03. 14:52</time>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                                <a href="#" class="hover:text-brand-blue transition-colors">
                                    A MOMO Kormányok Titkos Világa: A Gyártás Művészete
                                </a>
                            </h2>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Ha autósport vagy autók szerelmese vagy, valószínűleg hallottál már a MOMO nevéről. A
                                MOMO
                                egy olasz vállalat, amely már évtizedek óta vezető szerepet tölt be az autóalkatrész- és
                                kormánygyártás terén. Az 1970-es évek óta a MOMO kormányok kiváló minőségükről és
                                stílusos
                                megjelenésükről híresek. De valójában mi rejlik a MOMO kormányok készítésének kulisszái
                                mögött? Ebben a...
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-brand-blue hover:text-brand-blue-dark font-medium">
                                Tovább a cikkhez
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- News Article 4 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3">
                            <img src="{{ Storage::url('/images/IMG_5180.webp') }}" alt="Hungarogumi hírek"
                                class="w-full h-48 md:h-full object-cover">
                        </div>
                        <div class="md:w-2/3 p-6">
                            <div class="flex items-center mb-4">
                                <time class="text-sm text-gray-500">2023. szeptember 22. 11:55</time>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                                <a href="#" class="hover:text-brand-blue transition-colors">
                                    Télre alufelnit?
                                </a>
                            </h2>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Az évszakok változásával lassan-lassan beköszönt a tél, és ez azt jelenti, hogy autósok
                                milliói készülnek fel a hóval, jegesedéssel és a csúszós utakkal járó kihívásokra. A
                                megfelelő gumiabroncs mellett talán a másik legfontosabb téli felszerelés, amit autóddal
                                kapcsolatban megfontolhatsz, az az alufelni. Az alufelnik nem csak a megjelenést
                                javítják,
                                hanem a téli vezetésbiztonságot is növelik.
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-brand-blue hover:text-brand-blue-dark font-medium">
                                Tovább a cikkhez
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                </article>

                <!-- News Article 5 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3">
                            <img src="{{ Storage::url('/images/IMG_5180.webp') }}" alt="Hungarogumi hírek"
                                class="w-full h-48 md:h-full object-cover">
                        </div>
                        <div class="md:w-2/3 p-6">
                            <div class="flex items-center mb-4">
                                <time class="text-sm text-gray-500">2023. április 17. 14:41</time>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                                <a href="#" class="hover:text-brand-blue transition-colors">
                                    2023-ban is részt vettünk az AMTS-en!
                                </a>
                            </h2>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Igyekszünk minden évben valami újat hozni, mutatni ügyfeleinknek az AMTS-en és azt
                                gondoljuk, hogy idén is sikerült ezt a magunk felé állított „lécet" megugrani! Mindkét
                                kiállított autónk a maga nemében páratlan, hiszen az egyik a GFG Kangaroo névre
                                keresztelt
                                koncepció autó volt, ami a világhírű olasz tervező, Giorgetto Giugiaro, valamint fia,
                                Fabrizio Giugiaro zsenialitásának gyümölcse. Az utópisztikus tanulmány teljesen
                                egyedi...
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-brand-blue hover:text-brand-blue-dark font-medium">
                                Tovább a cikkhez
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                </article>

                <!-- News Article 6 -->
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3">
                            <img src="{{ Storage::url('/images/IMG_5180.webp') }}" alt="Hungarogumi hírek"
                                class="w-full h-48 md:h-full object-cover">
                        </div>
                        <div class="md:w-2/3 p-6">
                            <div class="flex items-center mb-4">
                                <time class="text-sm text-gray-500">2023. április 12. 10:08</time>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                                <a href="#" class="hover:text-brand-blue transition-colors">
                                    Amire büszkék vagyunk, avagy, miket szereltünk eddig!
                                </a>
                            </h2>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Mindig jó látni az utakon az általunk értékesített és szerelt könnyűfémfelniket! Nagy
                                részét
                                szerencsére könnyen felismerjük, mivel ha OZ, SPARCO, MSW, MAK, MAM, KESKIN, RONAL,
                                SPEEDLINE vagy MOMO márkákat látunk az ország bármely pontján, azok nagy többsége
                                valamilyen
                                formában hozzánk köthető, mivel ezekkel a cégekkel van exkluzív szerződésünk az adott
                                márkákra! Jelen pillanatban az, hogy...
                            </p>
                            <a href="#"
                                class="inline-flex items-center text-brand-blue hover:text-brand-blue-dark font-medium">
                                Tovább a cikkhez
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                </article>

            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <nav class="flex items-center space-x-2">
                    <button
                        class="px-3 py-2 bg-brand-blue text-white rounded-md hover:bg-brand-blue-dark transition-colors">
                        1
                    </button>
                    <a href="#"
                        class="px-3 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                        2
                    </a>
                    <a href="#"
                        class="px-3 py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                        →
                    </a>
                </nav>
            </div>
        </div>
    </section>

</x-layouts.app>
