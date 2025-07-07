<section class="py-12 bg-gradient-to-r from-brand-anthracite/80 to-brand-anthracite text-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- MÁK 3D felni megjelenítő -->
            <div
                class="relative overflow-hidden bg-gradient-to-r from-yellow-400 to-orange-500 text-black shadow-2xl rounded-lg p-8">
                <div class="flex items-center justify-between">
                    <div class="w-2/3">
                        <h3 class="text-2xl font-bold mb-2">MÁK 3D felni-nézet</h3>
                        <p class="mb-4">
                            Fedezd fel, hogyan mutat az autódon egy új MÁK alufelni – valósághű látványtervben!
                        </p>
                        <button class="bg-black text-white px-6 py-2 rounded font-semibold">Megnézem</button>
                    </div>
                    <img src="{{ Storage::url('images/mak_banner_rim.svg') }}" alt=""
                        class="absolute -right-[15%] w-60 h-60">
                </div>
            </div>

            <!-- OZ 3D felni megjelenítő -->
            <div
                class="relative overflow-hidden bg-gradient-to-r from-gray-600 to-brand-anthracite shadow-2xl rounded-lg p-8">
                <div class="flex items-center justify-between">
                    <div class="w-2/3">
                        <h3 class="text-2xl font-bold mb-2">OZ 3D látványfelni</h3>
                        <p class="mb-4">
                            Próbáld ki, hogyan állna egy OZ felni az autódon – kézzel fogható vizualizációval!</p>
                        <button class="bg-yellow-400 text-black px-6 py-2 rounded font-semibold">Megnézem</button>
                    </div>
                    <img src="{{ Storage::url('images/oz_banner_rim.svg') }}" alt=""
                        class="absolute -right-[15%] w-60 h-60">
                </div>
            </div>
        </div>
    </div>
</section>
