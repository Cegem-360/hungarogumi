<x-layouts.app>

    <body class="">

        <!-- Top Bar -->
        <div class="bg-gray-800 text-white text-xs py-1">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div class="flex space-x-4">
                    <span>Nyitvatartás: H-P 8:00-17:00, Sz 8:00-13:00</span>
                </div>
                <div class="flex space-x-4">
                    <span>Segítség</span>
                    <span>Bejelentkezés</span>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header class="bg-white shadow-md">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between py-3">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='50' viewBox='0 0 200 50'><rect width='200' height='50' fill='%23e2e8f0'/><text x='10' y='30' font-family='Arial, sans-serif' font-size='18' font-weight='bold' fill='%23333'>HungaroGumi</text></svg>"
                            alt="HungaroGumi" class="h-10 logo-shadow">
                    </div>

                    <!-- Search Bar -->
                    <div class="hidden md:flex flex-1 max-w-md mx-8">
                        <input type="text" placeholder="Milyen terméket keresel?"
                            class="flex-1 px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-green-500">
                        <button class="bg-green-600 text-white px-4 py-2 rounded-r-md hover:bg-green-700">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                    <!-- User Menu -->
                    <div class="flex items-center space-x-4 text-sm">
                        <div class="hidden md:flex items-center space-x-1">
                            <i class="fas fa-user text-gray-600"></i>
                            <span>Belép</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <i class="fas fa-heart text-gray-600"></i>
                            <span class="hidden md:inline">Kedvencek</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <i class="fas fa-shopping-cart text-gray-600"></i>
                            <span class="hidden md:inline">Kosár</span>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="border-t border-gray-200">
                    <ul class="flex space-x-8 py-3 text-sm font-medium text-gray-700">
                        <li><a href="#" class="nav-item px-3 py-2 rounded hover:text-green-600">GUMIK</a></li>
                        <li><a href="#" class="nav-item px-3 py-2 rounded hover:text-green-600">FELNIK</a>
                        </li>
                        <li><a href="#" class="nav-item px-3 py-2 rounded hover:text-green-600">AKKUMULÁTOR</a>
                        </li>
                        <li><a href="#" class="nav-item px-3 py-2 rounded hover:text-green-600">MOTOROLAJ</a>
                        </li>
                        <li><a href="#" class="nav-item px-3 py-2 rounded hover:text-green-600">BLOG</a></li>
                        <li><a href="#" class="nav-item px-3 py-2 rounded hover:text-green-600">KAPCSOLAT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="hero-bg py-16 text-white">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <!-- Search Form -->
                    <div class="bg-white rounded-lg p-6 text-gray-800">
                        <h2 class="text-xl font-bold mb-4">Gumiabroncs keresés</h2>

                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium mb-1">Szélesség</label>
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option>195</option>
                                    <option>205</option>
                                    <option>215</option>
                                    <option>225</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Magasság</label>
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option>55</option>
                                    <option>60</option>
                                    <option>65</option>
                                    <option>70</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium mb-1">Átmérő</label>
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option>R15</option>
                                    <option>R16</option>
                                    <option>R17</option>
                                    <option>R18</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Évszak</label>
                                <select
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option>Minden évszak</option>
                                    <option>Nyári</option>
                                    <option>Téli</option>
                                    <option>Négyévszakos</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex space-x-2 mb-4 text-xs">
                            <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">RUNFLAT</button>
                            <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">CSIKIHOZÓ</button>
                            <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">MEGERŐSÍTETT</button>
                            <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">TÉLIGUMI</button>
                            <button class="bg-blue-100 text-blue-800 px-3 py-1 rounded">NÉGYÉVSZAKOS</button>
                        </div>

                        <button class="w-full bg-green-600 text-white py-3 rounded-md font-semibold hover:bg-green-700">
                            <i class="fas fa-search mr-2"></i>Keresés
                        </button>
                    </div>

                    <!-- Promotion Banner -->
                    <div class="text-center">
                        <div class="bg-yellow-400 text-black rounded-lg p-6 mb-4">
                            <div class="text-lg font-bold mb-2">Hungarogumi.hu</div>
                            <div class="text-sm mb-2">Számold ki gumiabroncsod futási távolságát!</div>
                            <div class="text-xl font-bold">ABRONCSSZÁMÍTÓ</div>
                            <div class="mt-4">
                                <div class="inline-block bg-black text-yellow-400 rounded-full p-4">
                                    <i class="fas fa-calculator text-2xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div class="grid md:grid-cols-4 gap-6 mt-12 text-center">
                    <div class="bg-black bg-opacity-30 rounded-lg p-4">
                        <div class="text-2xl font-bold mb-2">2 600 PONT</div>
                        <div class="text-sm">felszerelt gumiabroncs évente</div>
                    </div>
                    <div class="bg-black bg-opacity-30 rounded-lg p-4">
                        <div class="text-2xl font-bold mb-2">Azonnali egyenlegkivonat</div>
                        <div class="text-sm">minden vásárlás után emailben</div>
                    </div>
                    <div class="bg-black bg-opacity-30 rounded-lg p-4">
                        <div class="text-2xl font-bold mb-2">GaranciaPLUSZ garancia</div>
                        <div class="text-sm">minden új abroncson</div>
                    </div>
                    <div class="bg-black bg-opacity-30 rounded-lg p-4">
                        <div class="text-2xl font-bold mb-2">THRE személygépkocsi</div>
                        <div class="text-sm">programban részt vevő műhely</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="py-8 bg-white">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-6 gap-4 text-center">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-2">
                            <i class="fas fa-shipping-fast text-green-600"></i>
                        </div>
                        <div class="text-xs font-medium">Gumiabroncs ingyenes szállítás</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-2">
                            <i class="fas fa-tools text-green-600"></i>
                        </div>
                        <div class="text-xs font-medium">Díjmentes kiszerelés</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-2">
                            <i class="fas fa-recycle text-green-600"></i>
                        </div>
                        <div class="text-xs font-medium">Ógumilevonás</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-2">
                            <i class="fas fa-car text-green-600"></i>
                        </div>
                        <div class="text-xs font-medium">Futóművizsgálat 1990 Ft-ért</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-2">
                            <i class="fas fa-certificate text-green-600"></i>
                        </div>
                        <div class="text-xs font-medium">TPMS újraindítás</div>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-2">
                            <i class="fas fa-medal text-green-600"></i>
                        </div>
                        <div class="text-xs font-medium">Instant Light Balancing</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Promotions -->
        <section class="py-8 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl font-bold mb-6">Promóciók</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-lg p-6 text-white">
                        <div class="text-lg font-bold mb-2">point·S</div>
                        <div class="text-sm">Európa legnagyobb gumiabroncs hálózata</div>
                    </div>
                    <div class="bg-gradient-to-r from-gray-700 to-gray-900 rounded-lg p-6 text-white">
                        <div class="text-lg font-bold mb-2">FELNIK -50%</div>
                        <div class="text-sm">Válogatott alufelnik akciós áron</div>
                    </div>
                    <div class="bg-gradient-to-r from-orange-500 to-red-600 rounded-lg p-6 text-white">
                        <div class="text-lg font-bold mb-2">PIRELLI</div>
                        <div class="text-sm">TÉLI ABRONCS AKCIÓ</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Products -->
        <section class="py-8 bg-white">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold">A hungarogumi.hu</h2>
                    <a href="#" class="text-green-600 hover:underline">Kiemelt termékek</a>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <!-- First Row -->
                    <div class="bg-white border rounded-lg p-4 product-hover">
                        <div class="relative">
                            <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><circle cx='100' cy='100' r='80' fill='%23333' stroke='%23666' stroke-width='20'/><circle cx='100' cy='100' r='40' fill='%23999'/></svg>"
                                alt="Michelin gumi" class="w-full h-32 object-contain mb-4">
                            <span
                                class="absolute top-2 left-2 bg-yellow-400 text-black px-2 py-1 rounded text-xs font-bold">AKCIÓ</span>
                        </div>
                        <div class="text-sm font-medium mb-2">MICHELIN Energy Saver+ 205/55 R16 91V</div>
                        <div class="text-xl font-bold text-green-600 mb-2">41 990 Ft</div>
                        <div class="text-xs text-gray-500 mb-3">Energiacímke: B | Tapadás nedves úton: A</div>
                        <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
                            Kosárba tesz <i class="fas fa-cart-plus ml-1"></i>
                        </button>
                    </div>

                    <div class="bg-white border rounded-lg p-4 product-hover">
                        <div class="relative">
                            <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><circle cx='100' cy='100' r='80' fill='%23333' stroke='%23666' stroke-width='20'/><circle cx='100' cy='100' r='40' fill='%23999'/></svg>"
                                alt="Continental gumi" class="w-full h-32 object-contain mb-4">
                            <span
                                class="absolute top-2 left-2 bg-yellow-400 text-black px-2 py-1 rounded text-xs font-bold">AKCIÓ</span>
                        </div>
                        <div class="text-sm font-medium mb-2">CONTINENTAL EcoContact Plus 195/65 R15 91H</div>
                        <div class="text-xl font-bold text-green-600 mb-2">17 990 Ft</div>
                        <div class="text-xs text-gray-500 mb-3">Energiacímke: C | Tapadás nedves úton: B</div>
                        <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
                            Kosárba tesz <i class="fas fa-cart-plus ml-1"></i>
                        </button>
                    </div>

                    <div class="bg-white border rounded-lg p-4 product-hover">
                        <div class="relative">
                            <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><circle cx='100' cy='100' r='80' fill='%23333' stroke='%23666' stroke-width='20'/><circle cx='100' cy='100' r='40' fill='%23999'/></svg>"
                                alt="Bridgestone gumi" class="w-full h-32 object-contain mb-4">
                            <span
                                class="absolute top-2 left-2 bg-yellow-400 text-black px-2 py-1 rounded text-xs font-bold">AKCIÓ</span>
                        </div>
                        <div class="text-sm font-medium mb-2">BRIDGESTONE Turanza T001 Evo 205/55 R16 91W</div>
                        <div class="text-xl font-bold text-green-600 mb-2">33 990 Ft</div>
                        <div class="text-xs text-gray-500 mb-3">Energiacímke: B | Tapadás nedves úton: A</div>
                        <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
                            Kosárba tesz <i class="fas fa-cart-plus ml-1"></i>
                        </button>
                    </div>

                    <!-- Second Row - Wheels -->
                    <div class="bg-white border rounded-lg p-4 product-hover">
                        <div class="relative">
                            <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><circle cx='100' cy='100' r='80' fill='%23silver' stroke='%23999' stroke-width='4'/><circle cx='100' cy='100' r='20' fill='%23333'/><g stroke='%23999' stroke-width='3'><line x1='100' y1='20' x2='100' y2='80'/><line x1='100' y1='120' x2='100' y2='180'/><line x1='20' y1='100' x2='80' y2='100'/><line x1='120' y1='100' x2='180' y2='100'/></g></svg>"
                                alt="Felni" class="w-full h-32 object-contain mb-4">
                            <span
                                class="absolute top-2 left-2 bg-yellow-400 text-black px-2 py-1 rounded text-xs font-bold">AKCIÓ</span>
                        </div>
                        <div class="text-sm font-medium mb-2">Borbet BLX Titanium 7.0x17 5x112</div>
                        <div class="text-xl font-bold text-green-600 mb-2">74 490 Ft</div>
                        <div class="text-xs text-gray-500 mb-3">ET45, ØN66.5</div>
                        <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
                            Kosárba tesz <i class="fas fa-cart-plus ml-1"></i>
                        </button>
                    </div>

                    <div class="bg-white border rounded-lg p-4 product-hover">
                        <div class="relative">
                            <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><circle cx='100' cy='100' r='80' fill='%23silver' stroke='%23999' stroke-width='4'/><circle cx='100' cy='100' r='20' fill='%23333'/><polygon points='100,30 130,90 170,90 130,110 145,170 100,140 55,170 70,110 30,90 70,90' fill='%23999'/></svg>"
                                alt="Felni" class="w-full h-32 object-contain mb-4">
                            <span
                                class="absolute top-2 left-2 bg-purple-500 text-white px-2 py-1 rounded text-xs font-bold">ÚJ</span>
                        </div>
                        <div class="text-sm font-medium mb-2">Dezent TE Black 6.5x16 5x112</div>
                        <div class="text-xl font-bold text-green-600 mb-2">39 990 Ft</div>
                        <div class="text-xs text-gray-500 mb-3">ET50, ØN66.5</div>
                        <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
                            Kosárba tesz <i class="fas fa-cart-plus ml-1"></i>
                        </button>
                    </div>

                    <div class="bg-white border rounded-lg p-4 product-hover">
                        <div class="relative">
                            <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><circle cx='100' cy='100' r='80' fill='%23black' stroke='%23333' stroke-width='4'/><circle cx='100' cy='100' r='20' fill='%23666'/><g stroke='%23333' stroke-width='8' opacity='0.7'><line x1='60' y1='60' x2='140' y2='140'/><line x1='140' y1='60' x2='60' y2='140'/></g></svg>"
                                alt="Felni" class="w-full h-32 object-contain mb-4">
                            <span
                                class="absolute top-2 left-2 bg-yellow-400 text-black px-2 py-1 rounded text-xs font-bold">AKCIÓ</span>
                        </div>
                        <div class="text-sm font-medium mb-2">Ronal R10 Jetblack 7.0x17 5x112</div>
                        <div class="text-xl font-bold text-green-600 mb-2">84 990 Ft</div>
                        <div class="text-xs text-gray-500 mb-3">ET45, ØN66.5</div>
                        <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
                            Kosárba tesz <i class="fas fa-cart-plus ml-1"></i>
                        </button>
                    </div>

                    <!-- Third Row - Accessories -->
                    <div class="bg-white border rounded-lg p-4 product-hover">
                        <div class="relative">
                            <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect x='50' y='80' width='100' height='40' fill='%23333' rx='5'/><rect x='60' y='85' width='80' height='10' fill='%23666'/><rect x='60' y='105' width='80' height='10' fill='%23666'/></svg>"
                                alt="Akkumulátor" class="w-full h-32 object-contain mb-4">
                        </div>
                        <div class="text-sm font-medium mb-2">BOSCH S4 Silver S4002 52Ah 520A</div>
                        <div class="text-xl font-bold text-green-600 mb-2">31 990 Ft</div>
                        <div class="text-xs text-gray-500 mb-3">5 év garancia</div>
                        <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
                            Kosárba tesz <i class="fas fa-cart-plus ml-1"></i>
                        </button>
                    </div>

                    <div class="bg-white border rounded-lg p-4 product-hover">
                        <div class="relative">
                            <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><circle cx='100' cy='100' r='70' fill='none' stroke='%23333' stroke-width='20'/><circle cx='100' cy='60' r='8' fill='%23333'/><circle cx='100' cy='140' r='8' fill='%23333'/><circle cx='60' cy='100' r='8' fill='%23333'/><circle cx='140' cy='100' r='8' fill='%23333'/></svg>"
                                alt="Kormány" class="w-full h-32 object-contain mb-4">
                        </div>
                        <div class="text-sm font-medium mb-2">Kormányvédő huzat fekete</div>
                        <div class="text-xl font-bold text-green-600 mb-2">6 990 Ft</div>
                        <div class="text-xs text-gray-500 mb-3">Univerzális méret</div>
                        <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
                            Kosárba tesz <i class="fas fa-cart-plus ml-1"></i>
                        </button>
                    </div>

                    <div class="bg-white border rounded-lg p-4 product-hover">
                        <div class="relative">
                            <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'><rect x='60' y='70' width='80' height='60' fill='%23333' rx='5'/><rect x='70' y='80' width='60' height='15' fill='%236366f1'/><rect x='70' y='100' width='60' height='20' fill='%236366f1'/></svg>"
                                alt="Telefontartó" class="w-full h-32 object-contain mb-4">
                        </div>
                        <div class="text-sm font-medium mb-2">Mágneses telefontartó szellőzőre</div>
                        <div class="text-xl font-bold text-green-600 mb-2">14 990 Ft</div>
                        <div class="text-xs text-gray-500 mb-3">Minden telefonhoz</div>
                        <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
                            Kosárba tesz <i class="fas fa-cart-plus ml-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Brands -->
        <section class="py-8 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-xl font-bold mb-4 text-center">Legnépszerűbb márkák</h2>
                <div class="flex flex-wrap justify-center gap-4 text-sm">
                    <a href="#"
                        class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">BRIDGESTONE</a>
                    <a href="#"
                        class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">CONTINENTAL</a>
                    <a href="#" class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">DUNLOP</a>
                    <a href="#" class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">FALKEN</a>
                    <a href="#"
                        class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">FIRESTONE</a>
                    <a href="#"
                        class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">GOODYEAR</a>
                    <a href="#"
                        class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">HANKOOK</a>
                    <a href="#" class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">KUMHO</a>
                    <a href="#"
                        class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">MICHELIN</a>
                    <a href="#" class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">NEXEN</a>
                    <a href="#"
                        class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">PIRELLI</a>
                    <a href="#"
                        class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">UNIROYAL</a>
                    <a href="#"
                        class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">VREDESTEIN</a>
                    <a href="#"
                        class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">YOKOHAMA</a>
                </div>
            </div>
        </section>

        <!-- Special Offers -->
        <section class="py-12 bg-black text-white">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- 3D Tire Try -->
                    <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-black rounded-lg p-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-2xl font-bold mb-2">MÁK 3D próbafutás</h3>
                                <p class="mb-4">Nézd meg, hogyan mutat az autódon a kiválasztott felni!</p>
                                <button class="bg-black text-white px-6 py-2 rounded font-semibold">Kipróbálom</button>
                            </div>
                            <div class="text-6xl">
                                <i class="fas fa-cube"></i>
                            </div>
                        </div>
                    </div>

                    <!-- OZ 3D Try -->
                    <div class="bg-gradient-to-r from-gray-600 to-gray-800 rounded-lg p-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-2xl font-bold mb-2">OZ 3D próbafutás</h3>
                                <p class="mb-4">Nézd meg, hogyan mutat az autódon a kiválasztott felni!</p>
                                <button
                                    class="bg-yellow-400 text-black px-6 py-2 rounded font-semibold">Kipróbálom</button>
                            </div>
                            <div class="text-6xl">
                                <i class="fas fa-car"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Customer Reviews -->
        <section class="py-12 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl font-bold text-center mb-8">Vásárlóink mondták</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="ml-2 text-sm text-gray-600">5.0</span>
                        </div>
                        <p class="text-gray-700 mb-4">"Kiváló szolgáltatás, gyors szállítás és profi szerelés.
                            Minden tökéletes volt!"</p>
                        <div class="text-sm text-gray-600">
                            <strong>Kovács András</strong>
                            <br>Óbudai Gumiszerviz
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="ml-2 text-sm text-gray-600">5.0</span>
                        </div>
                        <p class="text-gray-700 mb-4">"Az árak versenyképesek, a kiszolgálás pedig példaértékű.
                            Csak ajánlani tudom!"</p>
                        <div class="text-sm text-gray-600">
                            <strong>Nagy Péter</strong>
                            <br>Budai Autószerelő
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="ml-2 text-sm text-gray-600">5.0</span>
                        </div>
                        <p class="text-gray-700 mb-4">"Több éve vásárlok itt, mindig elégedett voltam a termékekkel
                            és a szolgáltatással."</p>
                        <div class="text-sm text-gray-600">
                            <strong>Szabó Gábor</strong>
                            <br>Pest Gumiszerviz
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Section -->
        <section class="py-12 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl font-bold mb-8">Friss hírek</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <article class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='400' height='200' viewBox='0 0 400 200'><rect width='400' height='200' fill='%23e5e7eb'/><text x='200' y='100' text-anchor='middle' dy='.3em' font-family='Arial, sans-serif' font-size='20' fill='%23374151'>Gumi cikk</text></svg>"
                            alt="Blog post" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-lg mb-2">BRIDGESTONE STELVIO: TELJESÍTMÉNY ÉS TARTÓSSÁG</h3>
                            <p class="text-gray-600 text-sm mb-4">A Bridgestone legújabb téli gumiabroncs
                                technológiája...</p>
                            <div class="text-xs text-gray-500">2024.01.15 | Gumi hírek</div>
                            <a href="#" class="text-green-600 hover:underline mt-2 inline-block">Tovább
                                olvasom →</a>
                        </div>
                    </article>

                    <article class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='400' height='200' viewBox='0 0 400 200'><rect width='400' height='200' fill='%23e5e7eb'/><text x='200' y='100' text-anchor='middle' dy='.3em' font-family='Arial, sans-serif' font-size='20' fill='%23374151'>Elektromos autó</text></svg>"
                            alt="Blog post" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-lg mb-2">Elektromos autók, elektromos gumik?</h3>
                            <p class="text-gray-600 text-sm mb-4">Miben különböznek az elektromos autók gumijai...
                            </p>
                            <div class="text-xs text-gray-500">2024.01.10 | Technológia</div>
                            <a href="#" class="text-green-600 hover:underline mt-2 inline-block">Tovább
                                olvasom →</a>
                        </div>
                    </article>

                    <article class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='400' height='200' viewBox='0 0 400 200'><rect width='400' height='200' fill='%23e5e7eb'/><text x='200' y='100' text-anchor='middle' dy='.3em' font-family='Arial, sans-serif' font-size='20' fill='%23374151'>Kormánykerék</text></svg>"
                            alt="Blog post" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-lg mb-2">A MOMO Kormánykerekek Tokyo Világbajnokságára</h3>
                            <p class="text-gray-600 text-sm mb-4">A prémium kormánykerék márka bemutatkozik...</p>
                            <div class="text-xs text-gray-500">2024.01.05 | Autósport</div>
                            <a href="#" class="text-green-600 hover:underline mt-2 inline-block">Tovább
                                olvasom →</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white">
            <div class="container mx-auto px-4 py-12">
                <div class="grid md:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div>
                        <h3 class="text-lg font-bold mb-4">INFORMÁCIÓK</h3>
                        <ul class="space-y-2 text-sm text-gray-300">
                            <li><a href="#" class="hover:text-white">Rólunk</a></li>
                            <li><a href="#" class="hover:text-white">Telefónia</a></li>
                            <li><a href="#" class="hover:text-white">Reklamáció</a></li>
                            <li><a href="#" class="hover:text-white">Adatvédelem</a></li>
                            <li><a href="#" class="hover:text-white">Garancia</a></li>
                            <li><a href="#" class="hover:text-white">Szállítási feltételek</a></li>
                            <li><a href="#" class="hover:text-white">Általános szerződési feltételek</a>
                            </li>
                            <li><a href="#" class="hover:text-white">Bankkártya elfogadás</a></li>
                        </ul>
                    </div>

                    <!-- Services -->
                    <div>
                        <h3 class="text-lg font-bold mb-4">Segítség és tanács</h3>
                        <ul class="space-y-2 text-sm text-gray-300">
                            <li><a href="#" class="hover:text-white">Gumiabroncs kiválasztása</a></li>
                            <li><a href="#" class="hover:text-white">Abroncs jelölések</a></li>
                            <li><a href="#" class="hover:text-white">Felnikereső</a></li>
                            <li><a href="#" class="hover:text-white">Futásteljesítmény kalkulátor</a></li>
                            <li><a href="#" class="hover:text-white">Méretszámítás</a></li>
                            <li><a href="#" class="hover:text-white">Sebesség index</a></li>
                            <li><a href="#" class="hover:text-white">Terhelési index</a></li>
                            <li><a href="#" class="hover:text-white">Energiacímke</a></li>
                        </ul>
                    </div>

                    <!-- Categories -->
                    <div>
                        <h3 class="text-lg font-bold mb-4">Termékkategóriák</h3>
                        <ul class="space-y-2 text-sm text-gray-300">
                            <li><a href="#" class="hover:text-white">Személyautó gumik</a></li>
                            <li><a href="#" class="hover:text-white">Kisteherautó gumik</a></li>
                            <li><a href="#" class="hover:text-white">Teherautó gumik</a></li>
                            <li><a href="#" class="hover:text-white">Motorkerékpár gumik</a></li>
                            <li><a href="#" class="hover:text-white">Alufelnik</a></li>
                            <li><a href="#" class="hover:text-white">Acéltárcsák</a></li>
                            <li><a href="#" class="hover:text-white">Autóakkumulátorok</a></li>
                            <li><a href="#" class="hover:text-white">Motorolajok</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div>
                        <h3 class="text-lg font-bold mb-4">KAPCSOLAT FELVÉTEL</h3>
                        <div class="space-y-3 text-sm text-gray-300">
                            <div>
                                <strong>Telefonos rendelés:</strong><br>
                                <a href="tel:+36-1-431-8270" class="hover:text-white">+36-1-431-8270</a>
                            </div>
                            <div>
                                <strong>Email:</strong><br>
                                <a href="mailto:info@hungarogumi.hu" class="hover:text-white">info@hungarogumi.hu</a>
                            </div>
                            <div>
                                <strong>Nyitvatartás:</strong><br>
                                H-P: 8:00-17:00<br>
                                Sz: 8:00-13:00<br>
                                V: zárva
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="mt-6">
                            <div class="flex space-x-4">
                                <a href="#" class="text-gray-300 hover:text-white">
                                    <i class="fab fa-facebook text-xl"></i>
                                </a>
                                <a href="#" class="text-gray-300 hover:text-white">
                                    <i class="fab fa-instagram text-xl"></i>
                                </a>
                                <a href="#" class="text-gray-300 hover:text-white">
                                    <i class="fab fa-youtube text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Bar -->
                <div class="border-t border-gray-700 mt-12 pt-8">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <div class="text-sm text-gray-400 mb-4 md:mb-0">
                            © 2024-2025 HungaroGumi.hu - Minden jog fenntartva |
                            <a href="#" class="hover:text-white">Adatvédelmi nyilatkozat</a>
                        </div>

                        <!-- Payment Methods -->
                        <div class="flex items-center space-x-4">
                            <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='25' viewBox='0 0 40 25'><rect width='40' height='25' fill='%23fff' rx='3'/><text x='20' y='15' text-anchor='middle' font-family='Arial' font-size='8' fill='%23000'>VISA</text></svg>"
                                alt="Visa" class="h-6">
                            <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='25' viewBox='0 0 40 25'><rect width='40' height='25' fill='%23fff' rx='3'/><circle cx='15' cy='12.5' r='8' fill='%23eb001b' opacity='0.8'/><circle cx='25' cy='12.5' r='8' fill='%23f79e1b' opacity='0.8'/></svg>"
                                alt="MasterCard" class="h-6">
                            <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='25' viewBox='0 0 40 25'><rect width='40' height='25' fill='%23fff' rx='3'/><text x='20' y='15' text-anchor='middle' font-family='Arial' font-size='6' fill='%23000'>PAYPAL</text></svg>"
                                alt="PayPal" class="h-6">
                            <img src="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='25' viewBox='0 0 40 25'><rect width='40' height='25' fill='%23005ca9' rx='3'/><text x='20' y='15' text-anchor='middle' font-family='Arial' font-size='6' fill='%23fff'>SZÉP</text></svg>"
                                alt="SZÉP kártya" class="h-6">
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            // Mobile menu toggle
            document.addEventListener('DOMContentLoaded', function() {
                // Add smooth scrolling
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function(e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth'
                            });
                        }
                    });
                });

                // Product hover effects
                const productCards = document.querySelectorAll('.product-hover');
                productCards.forEach(card => {
                    card.addEventListener('mouseenter', function() {
                        this.style.transform = 'translateY(-2px)';
                        this.style.boxShadow = '0 10px 25px rgba(0,0,0,0.1)';
                    });

                    card.addEventListener('mouseleave', function() {
                        this.style.transform = 'translateY(0)';
                        this.style.boxShadow = '0 1px 3px rgba(0,0,0,0.1)';
                    });
                });

                // Search functionality
                const searchButton = document.querySelector('.bg-green-600');
                if (searchButton) {
                    searchButton.addEventListener('click', function() {
                        alert('Keresés funkció - demo célokra');
                    });
                }
            });
        </script>

</x-layouts.app>
