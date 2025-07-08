@use('App\Models\Product')
<section class="hero-bg py-16 text-white"
    style="background: url('{{ Storage::url('images/IMG_5177.webp') }}') no-repeat center center; background-size: cover;">
    <div class="container mx-auto p-12 bg-white/20 border border-white/15 backdrop-blur-2xl shadow-2xl rounded-xl">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Tyre Search -->
            <div class="h-[350px] bg-white rounded-lg p-6 text-brand-anthracite">
                <h2 class="text-xl font-bold mb-4">Keress autógumit méret alapján</h2>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Szélesség</label>
                        <select
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                            <option>195</option>
                            <option>205</option>
                            <option>215</option>
                            <option>225</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Oldalfal magasság</label>
                        <select
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                            <option>55</option>
                            <option>60</option>
                            <option>65</option>
                            <option>70</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Felni átmérő</label>
                        <select
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                            @foreach (Product::get()->pluck('diameter')->unique() as $productDiameter)
                                <option>{{ $productDiameter }}</option>
                            @endforeach
                            <option>R15</option>
                            <option>R16</option>
                            <option>R17</option>
                            <option>R18</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Szezon</label>
                        <select
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-brand-blue">
                            <option>Összes</option>
                            <option value="">Nyári</option>
                            <option value="">Téli</option>
                            <option value="">Négyévszakos</option>
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
