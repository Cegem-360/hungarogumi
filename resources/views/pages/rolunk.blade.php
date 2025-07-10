<x-layouts.app>
    <x-slot name="title">Rólunk</x-slot>
    <x-slot name="description">Fedezze fel a legjobb gumiabroncsokat széles választékunkból!</x-slot>
    <x-slot name="keywords">gumiabroncsok, autógumik, nyári gumik, téli gumik, 205/55 R16</x-slot>

    <!-- Breadcrumb -->
    <x-breadcrumb />

    <section class="relative bg-cover bg-center py-20" style="background-image: url('/images/rolunk.webp');">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <div class="container mx-auto px-4 relative z-10 text-center text-white">
            <h4 class="text-lg md:text-xl font-semibold mb-2">Köszönjük, hogy ránk esett a választásod!</h4>
            <h2 class="text-3xl md:text-5xl font-bold mb-4">Miért érdemes nálunk vásárolnod?</h2>
            <p class="max-w-2xl mx-auto mb-6 text-base md:text-lg">
                Összeállítottunk egy aktuális listát a legfrissebb kuponkódjainkról és promócióinkról, hogy még
                kedvezőbb legyen a vásárlásod. Használd ki ezeket a lehetőségeket, hiszen nekünk az a célunk, hogy
                valóban elégedett legyél!
            </p>
            <a href="#rolunk"
                class="inline-block bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold px-8 py-3 rounded transition">
                Tudj meg többet rólunk
            </a>
        </div>
    </section>

    <section class="py-8 bg-white">
        <x-promotions />
    </section>

    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8">Miért válassz minket?</h2>
            <div class="grid md:grid-cols-7 gap-8">
                <!-- Left column -->
                <div class="md:col-span-2 flex flex-col">
                    <h3 class="text-3xl font-semibold mb-8">Néhány további érv, ami mellettünk szól:</h3>
                    <img src="{{ Storage::url('images/IMG_5177.webp') }}" alt="Felni kínálat"
                        class="rounded-lg shadow mb-2 w-full object-cover aspect-square" />
                </div>
                <!-- Cards column -->
                <div class="md:col-span-5 grid md:grid-cols-3 gap-8">
                    <!-- Card 1 -->
                    <div class="bg-gray-100 rounded-lg shadow p-6 flex flex-col border border-gray-200">
                        <div class="mb-3 text-brand-blue text-4xl font-bold">01</div>
                        <h3 class="text-lg font-semibold mb-2">Vevőorientált megközelítés</h3>
                        <p class="text-gray-600">
                            Budapesti irodánkban és telephelyeinken személyesen, telefonon vagy online is rendelkezésre
                            állunk, ha támogatásra van szükséged. Segítünk eligazodni az abroncsok, keréktárcsák és
                            tartozékok világában.
                        </p>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-gray-100 rounded-lg shadow p-6 flex flex-col border border-gray-200">
                        <div class="mb-3 text-brand-blue text-4xl font-bold">02</div>
                        <h3 class="text-lg font-semibold mb-2">Szavatosság</h3>
                        <p class="text-gray-600">
                            Minden forgalmazott termékünkre szavatosságot biztosítunk, elérhetőek vagyunk és
                            közreműködünk a
                            problémamegoldásban.
                        </p>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-gray-100 rounded-lg shadow p-6 flex flex-col border border-gray-200">
                        <div class="mb-3 text-brand-blue text-4xl font-bold">03</div>
                        <h3 class="text-lg font-semibold mb-2">Vezető brandek</h3>
                        <p class="text-gray-600">
                            Jelenleg 8 keréktárcsa márka magyarországi kizárólagos képviseletét látjuk el: OZ, MAK,
                            MOMO,
                            SPARCO, RONAL, MSW, MAM, KESKIN, valamint a BBS partnerdisztribúciójában is részt veszünk.
                        </p>
                    </div>
                    <!-- Card 4 -->
                    <div class="bg-gray-100 rounded-lg shadow p-6 flex flex-col border border-gray-200">
                        <div class="mb-3 text-brand-blue text-4xl font-bold">04</div>
                        <h3 class="text-lg font-semibold mb-2">Gazdag kínálat</h3>
                        <p class="text-gray-600">
                            Fő márkáinkon túl számos további gyártóval is dolgozunk, hogy a lehető legszélesebb
                            termékválasztékot és versenyképes árakat biztosíthassunk. Ez szezonalitástól függően akár
                            20.000
                            darabos azonnali keréktárcsa-készletet is jelent.
                        </p>
                    </div>
                    <!-- Card 5 -->
                    <div class="bg-gray-100 rounded-lg shadow p-6 flex flex-col border border-gray-200">
                        <div class="mb-3 text-brand-blue text-4xl font-bold">05</div>
                        <h3 class="text-lg font-semibold mb-2">Kedvezőtől a luxusig</h3>
                        <p class="text-gray-600">
                            Abroncsok terén hasonló filozófiát követünk: a gazdaságos kategóriától a prémiumig minden
                            szegmensben jelen vagyunk, közel azonos azonnali raktárkészlettel. Kiemelt figyelmet
                            fordítunk a
                            MOMO abroncsokra (2023-tól exkluzív márkánk), valamint prémium kategóriában a Pirellire.
                        </p>
                    </div>
                    <!-- Card 6 -->
                    <div class="bg-gray-100 rounded-lg shadow p-6 flex flex-col border border-gray-200">
                        <div class="mb-3 text-brand-blue text-4xl font-bold">06</div>
                        <h3 class="text-lg font-semibold mb-2">Nyomásellenőrző rendszerek szakértője</h3>
                        <p class="text-gray-600">
                            TPMS területen is kompetens tanácsadást nyújtunk, mivel 2014-ben az elsők között kezdtünk el
                            foglalkozni ezzel a technológiával. Azóta szinte minden kihívással találkoztunk, így minden
                            helyzetre van megoldásunk!
                        </p>
                    </div>
                    <!-- Card 7 -->
                    <div class="bg-gray-100 rounded-lg shadow p-6 flex flex-col border border-gray-200">
                        <div class="mb-3 text-brand-blue text-4xl font-bold">07</div>
                        <h3 class="text-lg font-semibold mb-2">Többgenerációs szakértelem</h3>
                        <p class="text-gray-600">
                            Második generációs családi vállalkozásként számunkra a vásárlói elégedettség a legfontosabb
                            érték, amit a piacon való 30 éves folyamatos jelenlétünk is alátámaszt (változatlan magyar
                            adószámmal).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8">Amit kínálunk:</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                    <div class="mb-4 text-brand-blue text-4xl">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Megbízható készletkezelés</h3>
                    <p class="text-gray-600">
                        Sokan ismerik a problémát: sok online áruház hatalmas termékpalettát hirdet, de a valóságban az
                        áruk jelentős része nem is elérhető. Nálunk más a helyzet – ahol az „azonnali átvétel" jelzést
                        látod, ott garantáltan rendelkezésre áll a termék valamelyik telephelyünkön, így a megerősítést
                        követően ténylegesen magadhoz is veheted.
                    </p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                    <div class="mb-4 text-brand-blue text-4xl">
                        <i class="fas fa-warehouse"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Naprakész raktárinformációk</h3>
                    <p class="text-gray-600">
                        Partnerraktárakat is bevonunk annak érdekében, hogy minél szélesebb választékot kínálhassunk
                        számodra. Ezt azonban úgy valósítjuk meg, hogy kizárólag olyan külső raktárakkal és gyártókkal
                        működünk együtt, akik 7 percenként frissítik felénk a készletadatokat. Így biztosítjuk, hogy
                        weboldalunkon mindig valós és aktuális információk jelenjenek meg.
                    </p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center text-center">
                    <div class="mb-4 text-brand-blue text-4xl">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Szakértő műszaki szolgáltatás</h3>
                    <p class="text-gray-600">
                        Ha kiváló minőségű, professzionális eszközökkel felszerelt szervizre van szükséged, ahol 13"-24"
                        méretű eszközöket károsodás nélkül tudnak javítani, akkor megfelelő helyre kerültél. Ezen a
                        területen specializálódtunk, így magas szintű szakértelmet biztosítunk.
                    </p>
                </div>
            </div>
        </div>
        <div class="h-12"></div>
    </section>

</x-layouts.app>
