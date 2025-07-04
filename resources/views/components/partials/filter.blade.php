<div class="sticky-sidebar">
    <div class="bg-white rounded-lg shadow-sm">
        <!-- Search by Auto -->
        <div class="mb-6">
            <button
                class="w-full flex items-center gap-4 p-4 text-brand-blue bg-blue-50 hover:bg-blue-100 border border-blue-200 rounded-md">
                <i class="fas fa-car text-2xl"></i>
                <span>Gumi keresése autó szerint</span>
            </button>
        </div>

        <!-- Warning -->
        <div class="mb-6 p-4 bg-yellow-50 border border-yellow-200 rounded-md">
            <div class="flex items-start gap-4">
                <i class="fas fa-exclamation-triangle text-2xl text-yellow-600"></i>
                <div class="text-sm">
                    Kérlek válaszd ki a keresendő gumiabroncs <strong>szélesség,</strong> <strong>profil</strong> és
                    <strong>átmérő</strong> méreteit.
                </div>
            </div>
        </div>

        <!-- Filter Group: Size, Season, Brand, Vehicle Type, Outlet -->
        <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
            <!-- Size Selector -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Méret</h3>
                <div class="grid grid-cols-3 gap-2 items-start">
                    <div>
                        <label for="szelesseg" class="block text-sm font-medium text-gray-700 mb-1">Szélesség*</label>
                        <select id="szelesseg" name="szelesseg" required
                            class="w-full bg-gray-100 border border-gray-300 rounded px-2 py-1 text-center">
                            <option value="">--</option>
                            <option value="115">115</option>
                            <option value="125">125</option>
                            <option value="135">135</option>
                            <option value="145">145</option>
                            <option value="155">155</option>
                            <option value="160">160</option>
                            <option value="165">165</option>
                            <option value="175">175</option>
                            <option value="185">185</option>
                            <option value="195">195</option>
                            <option value="205" selected>205</option>
                            <option value="215">215</option>
                            <option value="225">225</option>
                            <option value="235">235</option>
                            <option value="245">245</option>
                            <option value="255">255</option>
                            <option value="265">265</option>
                            <option value="275">275</option>
                            <option value="285">285</option>
                            <option value="295">295</option>
                            <option value="305">305</option>
                            <option value="315">315</option>
                            <option value="325">325</option>
                            <option value="335">335</option>
                            <option value="345">345</option>
                            <option value="355">355</option>
                            <option value="365">365</option>
                            <option value="385">385</option>
                            <option value="405">405</option>
                            <option value="425">425</option>
                            <option value="445">445</option>
                            <option value="455">455</option>
                            <option value="495">495</option>
                            <option value="520">520</option>
                            <option value="600">600</option>
                        </select>
                    </div>
                    <div>
                        <label for="profil" class="block text-sm font-medium text-gray-700 mb-1">Profil*</label>
                        <select id="profil" name="profil" required
                            class="w-full bg-gray-100 border border-gray-300 rounded px-2 py-1 text-center">
                            <option value="">--</option>
                            <option value="82">R</option>
                            <option value="35">35</option>
                            <option value="40">40</option>
                            <option value="45">45</option>
                            <option value="50">50</option>
                            <option value="55" selected>55</option>
                            <option value="60">60</option>
                            <option value="65">65</option>
                            <option value="70">70</option>
                            <option value="75">75</option>
                            <option value="80">80</option>
                        </select>
                    </div>
                    <div>
                        <label for="atmero" class="block text-sm font-medium text-gray-700 mb-1">Átmérő*</label>
                        <select id="atmero" name="atmero" required
                            class="w-full bg-gray-100 border border-gray-300 rounded px-2 py-1 text-center">
                            <option value="">--</option>
                            <option value="R15">R15</option>
                            <option value="R16" selected>R16</option>
                            <option value="R17">R17</option>
                            <option value="R18">R18</option>
                            <option value="R19">R19</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Season Filter -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Időjárás</h3>
                <div class="space-y-2">
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Nyári gumi</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Téli gumi</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Négyévszakos gumi</span>
                    </label>
                </div>
            </div>

            <!-- Brand Filter -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Márka</h3>
                <select id="marka" name="marka"
                    class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                    <option value="" data-select2-id="984">Összes...</option>
                    <option value="altenzo" data-select2-id="1509">Altenzo</option>
                    <option value="antares" data-select2-id="1510">Antares</option>
                    <option value="aplus" data-select2-id="1511">APlus</option>
                    <option value="apollo" data-select2-id="1512">Apollo</option>
                    <option value="arivo" data-select2-id="1513">Arivo</option>
                    <option value="atlas" data-select2-id="1514">Atlas</option>
                    <option value="austone" data-select2-id="1515">Austone</option>
                    <option value="avon" data-select2-id="1516">Avon</option>
                    <option value="barum" data-select2-id="1517">Barum</option>
                    <option value="berlin-tires" data-select2-id="1518">Berlin Tires</option>
                    <option value="bfgoodrich" data-select2-id="1519">BFGoodrich</option>
                    <option value="bridgestone" data-select2-id="1520">Bridgestone</option>
                    <option value="ceat" data-select2-id="1521">Ceat</option>
                    <option value="chengshan" data-select2-id="1522">Chengshan</option>
                    <option value="continental" data-select2-id="1523">Continental</option>
                    <option value="cooper" data-select2-id="1524">Cooper</option>
                    <option value="debica" data-select2-id="1525">Debica</option>
                    <option value="doublestar" data-select2-id="1526">DoubleStar</option>
                    <option value="dunlop" data-select2-id="1527">Dunlop</option>
                    <option value="evergreen" data-select2-id="1528">EverGreen</option>
                    <option value="falken" data-select2-id="1529">Falken</option>
                    <option value="firestone" data-select2-id="1530">Firestone</option>
                    <option value="fortuna" data-select2-id="1531">Fortuna</option>
                    <option value="fortune" data-select2-id="1532">Fortune</option>
                    <option value="fulda" data-select2-id="1533">Fulda</option>
                    <option value="gislaved" data-select2-id="1534">Gislaved</option>
                    <option value="giti" data-select2-id="1535">Giti</option>
                    <option value="goodride" data-select2-id="1536">Goodride</option>
                    <option value="goodyear" data-select2-id="1537">Goodyear</option>
                    <option value="greentrac" data-select2-id="1538">Greentrac</option>
                    <option value="event" data-select2-id="1539">Grenlander</option>
                    <option value="gripmax" data-select2-id="1540">Gripmax</option>
                    <option value="gt-radial" data-select2-id="1541">GT Radial</option>
                    <option value="haida" data-select2-id="1542">Haida</option>
                    <option value="hankook" data-select2-id="1543">Hankook</option>
                    <option value="hifly" data-select2-id="1544">HiFly</option>
                    <option value="landsail" data-select2-id="1545">Landsail</option>
                    <option value="imperial" data-select2-id="1546">Imperial</option>
                    <option value="infinity" data-select2-id="1547">Infinity</option>
                    <option value="kelly" data-select2-id="1548">Kelly</option>
                    <option value="kenda" data-select2-id="1549">Kenda</option>
                    <option value="king-meiler" data-select2-id="1550">King Meiler</option>
                    <option value="kingstar" data-select2-id="1551">Kingstar</option>
                    <option value="kleber" data-select2-id="1552">Kleber</option>
                    <option value="kormoran" data-select2-id="1553">Kormoran</option>
                    <option value="kumho" data-select2-id="1554">Kumho</option>
                    <option value="landspider" data-select2-id="1555">Landspider</option>
                    <option value="lassa" data-select2-id="1556">Lassa</option>
                    <option value="laufenn" data-select2-id="1557">Laufenn</option>
                    <option value="leao" data-select2-id="1558">Leao</option>
                    <option value="linglong" data-select2-id="1559">LingLong</option>
                    <option value="marshal" data-select2-id="1560">Marshal</option>
                    <option value="massimo" data-select2-id="1561">Massimo</option>
                    <option value="matador" data-select2-id="1562">Matador</option>
                    <option value="maxxis" data-select2-id="1563">Maxxis</option>
                    <option value="mazzini" data-select2-id="1564">Mazzini</option>
                    <option value="michelin" data-select2-id="1565">Michelin</option>
                    <option value="milestone" data-select2-id="1566">Milestone</option>
                    <option value="minerva" data-select2-id="1567">Minerva</option>
                    <option value="mirage" data-select2-id="1568">Mirage</option>
                    <option value="momo-tires" data-select2-id="1569">MOMO Tires</option>
                    <option value="nankang" data-select2-id="1570">Nankang</option>
                    <option value="nexen" data-select2-id="1571">Nexen</option>
                    <option value="nokian" data-select2-id="1572">Nokian</option>
                    <option value="nordexx" data-select2-id="1573">Nordexx</option>
                    <option value="optimo" data-select2-id="1574">Optimo</option>
                    <option value="ovation" data-select2-id="1575">Ovation</option>
                    <option value="petlas" data-select2-id="1576">Petlas</option>
                    <option value="pirelli" data-select2-id="1577">Pirelli</option>
                    <option value="platin" data-select2-id="1578">Platin Tyres</option>
                    <option value="powertrac" data-select2-id="1579">Powertrac</option>
                    <option value="premiorri" data-select2-id="1580">Premiorri</option>
                    <option value="radar" data-select2-id="1581">Radar</option>
                    <option value="riken" data-select2-id="1582">Riken</option>
                    <option value="roadstone" data-select2-id="1583">Roadstone</option>
                    <option value="roadx" data-select2-id="1584">RoadX</option>
                    <option value="rotalla" data-select2-id="1585">Rotalla</option>
                    <option value="rovelo" data-select2-id="1586">Rovelo</option>
                    <option value="royal-black" data-select2-id="1587">Royal Black</option>
                    <option value="sailun" data-select2-id="1588">Sailun</option>
                    <option value="sava" data-select2-id="1589">Sava</option>
                    <option value="sebring" data-select2-id="1590">Sebring</option>
                    <option value="semperit" data-select2-id="1591">Semperit</option>
                    <option value="sumitomo" data-select2-id="1592">Sumitomo</option>
                    <option value="sunfull" data-select2-id="1593">Sunfull</option>
                    <option value="sunny" data-select2-id="1594">Sunny</option>
                    <option value="sunwide" data-select2-id="1595">Sunwide</option>
                    <option value="superia" data-select2-id="1596">Superia</option>
                    <option value="taurus" data-select2-id="1597">Taurus</option>
                    <option value="tigar" data-select2-id="1598">Tigar</option>
                    <option value="tomket" data-select2-id="1599">Tomket</option>
                    <option value="tourador" data-select2-id="1600">Tourador</option>
                    <option value="toyo" data-select2-id="1601">Toyo</option>
                    <option value="tracmax" data-select2-id="1602">TracMax</option>
                    <option value="triangle" data-select2-id="1603">Triangle</option>
                    <option value="tristar" data-select2-id="1604">Tristar</option>
                    <option value="uniroyal" data-select2-id="1605">Uniroyal</option>
                    <option value="viking" data-select2-id="1606">Viking</option>
                    <option value="vredestein" data-select2-id="1607">Vredestein</option>
                    <option value="westlake" data-select2-id="1608">Westlake</option>
                    <option value="winter-tact" data-select2-id="1609">Winter Tact</option>
                    <option value="yokohama" data-select2-id="1610">Yokohama</option>
                    <option value="zeetex" data-select2-id="1611">Zeetex</option>
                </select>
            </div>

            <!-- Vehicle Type -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Jármű típus</h3>
                <select id="tipus" name="tipus"
                    class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                    <option value="">Összes...</option>
                    <option value="szemelygepjarmu-suv">Személygépjármű/SUV</option>
                    <option value="kistehergepjarmu">Kistehergépjármű</option>
                </select>
            </div>

            <!-- Outlet -->
            <div class="mb-6">
                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                    <input type="checkbox" id="outlet" name="outlet" value="outlet"
                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                    <span class="text-sm">Outlet termékek</span>
                </label>
            </div>
        </div>

        <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
            <!-- Készlet -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Készlet</h3>
                <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                    <input type="checkbox" id="keszlet" name="keszlet" value="keszlet"
                        class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                    <span class="text-sm">min. 4 db azonnal</span>
                </label>
            </div>

            <!-- Price Category -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Árkategória</h3>
                <div class="space-y-2">
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Budget</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Közepes</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Prémium</span>
                    </label>
                </div>
            </div>
            <!-- Price Filter -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Árszűrő</h3>
                <div class="flex items-center gap-2">
                    <input type="number" name="min_price" id="min_price" min="0" placeholder="min"
                        class="w-1/2 bg-gray-100 border border-gray-300 rounded px-2 py-1 text-sm text-center" />
                    <span class="text-gray-500">-</span>
                    <input type="number" name="max_price" id="max_price" min="0" placeholder="max"
                        class="w-1/2 bg-gray-100 border border-gray-300 rounded px-2 py-1 text-sm text-center" />
                    <span class="text-gray-500">Ft</span>
                </div>
            </div>
        </div>

        <!-- Extra Properties Group -->
        <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
            <!-- Extra Properties -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Extra tulajdonságok</h3>
                <div class="space-y-2">
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" id="erositett" name="erositett" value="erositett"
                            class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Erősített</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" id="defektturo" name="defektturo" value="defektturo"
                            class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Defekttűrő</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" id="elektromos" name="elektromos" value="elektromos"
                            class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">Elektromos autóhoz</span>
                    </label>
                </div>
            </div>

            <!-- Speed Index -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Sebességindex</h3>
                <select class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                    <option value="">Összes...</option>
                    <option value="si-q">Q (160 km/h)</option>
                    <option value="si-r">R (170 km/h)</option>
                    <option value="si-s">S (180 km/h)</option>
                    <option value="si-t">T (190 km/h)</option>
                    <option value="si-h">H (210 km/h)</option>
                    <option value="si-v">V (240 km/h)</option>
                    <option value="si-w">W (270 km/h)</option>
                    <option value="si-y">Y (300 km/h)</option>
                </select>
            </div>

            <!-- Load Index -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Súlyindex</h3>
                <select class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                    <option value="" data-select2-id="999">Összes...</option>
                    <option value="li-2" data-select2-id="1495">2 (47,5 kg)</option>
                    <option value="li-89" data-select2-id="1496">89 (580 kg)</option>
                    <option value="li-91" data-select2-id="1497">91 (615 kg)</option>
                    <option value="li-94" data-select2-id="1498">94 (650 kg)</option>
                    <option value="li-97" data-select2-id="1499">97 (730 kg)</option>
                    <option value="li-98" data-select2-id="1500">98 (750 kg)</option>
                </select>
            </div>

            <!-- Noise Level -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Zajszint</h3>
                <div class="space-y-2">
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="zajszint" value="A"
                            class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">A</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="zajszint" value="B"
                            class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">B</span>
                    </label>
                    <label class="flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="zajszint" value="C"
                            class="w-4 h-4 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="text-sm">C</span>
                    </label>
                </div>
            </div>

            <!-- Homologization -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Homológizáció</h3>
                <select id="homologizacio" name="homologizacio"
                    class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                    <option value="">Összes...</option>
                    <option value="homologizacio-audi">Audi</option>
                    <option value="homologizacio-bmw-mini">BMW/MINI</option>
                    <option value="homologizacio-mercedes">Mercedes</option>
                    <option value="homologizacio-porsche">Porsche</option>
                    <option value="homologizacio-volvo">Volvo</option>
                </select>
            </div>

            <!-- Pattern -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Mintázat</h3>
                <select id="pattern" name="pattern"
                    class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm">
                    <option value="">Összes...</option>
                    <option value="mintazat-4-seasons">4 Seasons</option>
                    <option value="mintazat-rxmotion-4s">RXMotion 4S</option>
                    <option value="mintazat-a008p">A008P</option>
                    <option value="mintazat-advan-a052">Advan A052</option>
                    <option value="mintazat-advan-fleva-v701">Advan Fleva V701</option>
                    <option value="mintazat-advan-neova-ad08rs">Advan Neova AD08RS</option>
                    <option value="mintazat-advan-sport-v103">Advan Sport V103</option>
                    <option value="mintazat-advan-sport-v103s">Advan Sport V103S</option>
                    <option value="mintazat-advan-sport-v105">Advan Sport V105</option>
                    <option value="mintazat-advantage">Advantage</option>
                    <option value="mintazat-all-season">All Season</option>
                    <option value="mintazat-all-season-driver">All Season Driver</option>
                    <option value="mintazat-all-season-master">All Season Master</option>
                    <option value="mintazat-all-season-power">All Season Power</option>
                    <option value="mintazat-all-season-grip">All Season-Grip</option>
                    <option value="mintazat-all-seasons-elite-z-401">All Seasons Elite Z-401</option>
                    <option value="mintazat-all-turi-221">All-Turi 221</option>
                    <option value="mintazat-allseason-as1">AllSeason AS1</option>
                    <option value="mintazat-allseasoncontact">AllSeasonContact</option>
                    <option value="mintazat-allseasonexpert-2">AllSeasonExpert 2</option>
                    <option value="mintazat-allyear-3">Allyear 3</option>
                    <option value="mintazat-alnac-4g">Alnac 4G</option>
                    <option value="mintazat-alnac-4g-all-season">Alnac 4G All Season</option>
                    <option value="mintazat-alnac-4g-winter">Alnac 4G Winter</option>
                    <option value="mintazat-alpin-5">Alpin 5</option>
                    <option value="mintazat-as-1">AS-1</option>
                    <option value="mintazat-aspec-a349a">Aspec A349A</option>
                    <option value="mintazat-atrezzo-4seasons">Atrezzo 4seasons</option>
                    <option value="mintazat-atrezzo-elite-sh32">Atrezzo Elite SH32</option>
                    <option value="mintazat-atrezzo-zsr">Atrezzo ZSR</option>
                    <option value="mintazat-bc100">BC100</option>
                    <option value="mintazat-blizzak-ice">Blizzak Ice</option>
                    <option value="mintazat-blizzak-lm001">Blizzak LM001</option>
                    <option value="mintazat-blizzak-lm001-evo">Blizzak LM001 Evo</option>
                    <option value="mintazat-blizzak-lm005">Blizzak LM005</option>
                    <option value="mintazat-bluearth-4s-aw21">BluEarth-4S AW21</option>
                    <option value="mintazat-bluearth-es-es32">BluEarth-Es ES32</option>
                    <option value="mintazat-bluearth-gt-ae51">BluEarth-GT AE51</option>
                    <option value="mintazat-bluearth-winter-v906">BluEarth-Winter (V906)</option>
                    <option value="mintazat-bluewin-uhp">Bluewin UHP</option>
                    <option value="mintazat-c-drive2-ac02a">C.drive2 AC02A</option>
                    <option value="mintazat-champiro-fe2">Champiro FE2</option>
                    <option value="mintazat-champiro-winterpro-2">Champiro Winterpro 2</option>
                    <option value="mintazat-champiro-winterpro-hp">Champiro Winterpro HP</option>
                    <option value="mintazat-cinturato-all-season-plus">Cinturato All Season Plus</option>
                    <option value="mintazat-cinturato-all-season-sf2">Cinturato All Season SF2</option>
                    <option value="mintazat-cinturato-p1">Cinturato P1</option>
                    <option value="mintazat-cinturato-p1-verde">Cinturato P1 Verde</option>
                    <option value="mintazat-cinturato-p7">Cinturato P7</option>
                    <option value="mintazat-cinturato-p7-p7c2">Cinturato P7 (P7C2)</option>
                    <option value="mintazat-cinturato-winter">Cinturato Winter</option>
                    <option value="mintazat-cinturato-winter-2">Cinturato Winter 2</option>
                    <option value="mintazat-contiecocontact-5">ContiEcoContact 5</option>
                    <option value="mintazat-contipremium-contact">ContiPremium Contact</option>
                    <option value="mintazat-contipremium-contact-2">ContiPremium Contact 2</option>
                    <option value="mintazat-contipremium-contact-5">ContiPremium Contact 5</option>
                    <option value="mintazat-contisportcontact-2">ContiSportContact 2</option>
                    <option value="mintazat-contiwintercontact-ts-830-p">ContiWinterContact TS 830 P</option>
                    <option value="mintazat-wintercontact-ts-870">WinterContact TS 870</option>
                    <option value="mintazat-cross-seasons-aw-6">Cross Seasons AW-6</option>
                    <option value="mintazat-crossclimate">CrossClimate +</option>
                    <option value="mintazat-crossclimate-2">CrossClimate 2</option>
                    <option value="mintazat-db-decibel-e70j">dB decibel E70J</option>
                    <option value="mintazat-db-decibel-e70jc">dB decibel E70JC</option>
                    <option value="mintazat-dimax-4-season">Dimax 4 Season</option>
                    <option value="mintazat-dimax-alpine">Dimax Alpine</option>
                    <option value="mintazat-discoverer-all-season">Discoverer All Season</option>
                    <option value="mintazat-discoverer-winter">Discoverer Winter</option>
                    <option value="mintazat-dynaxer-hp4">Dynaxer HP4</option>
                    <option value="mintazat-e-primacy">e.Primacy</option>
                    <option value="mintazat-eco-607">Eco 607</option>
                    <option value="mintazat-eco-plus-hp">Eco Plus HP</option>
                    <option value="mintazat-ecoblue-hp">Ecoblue HP</option>
                    <option value="mintazat-ecocontact-6">EcoContact 6</option>
                    <option value="mintazat-ecocontrol-hp-2">EcoControl HP 2</option>
                    <option value="mintazat-ecodriver-5">Ecodriver 5</option>
                    <option value="mintazat-ecofour">EcoFour</option>
                    <option value="mintazat-ecomax">Ecomax</option>
                    <option value="mintazat-econex-na-1">Econex NA-1</option>
                    <option value="mintazat-ecopia-ep150">Ecopia EP150</option>
                    <option value="mintazat-ecopower-4">Ecopower 4</option>
                    <option value="mintazat-ecowing-es31">EcoWing ES31</option>
                    <option value="mintazat-ecozen">EcoZen</option>
                    <option value="mintazat-ecsta-ps71">Ecsta PS71</option>
                    <option value="mintazat-efficientgrip">EfficientGrip</option>
                    <option value="mintazat-efficientgrip-performance">EfficientGrip Performance</option>
                    <option value="mintazat-efficientgrip-performance-2">EfficientGrip Performance 2</option>
                    <option value="mintazat-dynacomfort-eh226">DynaComfort EH226</option>
                    <option value="mintazat-eh23">EH23</option>
                    <option value="mintazat-emera-a1-kr41">Emera A1 KR41</option>
                    <option value="mintazat-energy-saver">Energy Saver +</option>
                    <option value="mintazat-eskimo-hp2">Eskimo HP2</option>
                    <option value="mintazat-eskimo-s3">Eskimo S3+</option>
                </select>
            </div>
        </div>

        <!-- Visual Group: Fuel Efficiency & Wet Grip -->
        <div class="mb-8 p-4 bg-gray-200 border border-gray-100 rounded-lg">
            <!-- Fuel Efficiency -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Fogyasztás</h3>
                <div class="space-y-2">
                    <label class="rating-item rating-a flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="fuel-rating" value="fuel-rating-a"
                            class="w-4 h-4 text-green-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">A</span>
                    </label>
                    <label class="rating-item rating-b flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="fuel-rating" value="fuel-rating-b"
                            class="w-4 h-4 text-lime-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">B</span>
                    </label>
                    <label class="rating-item rating-c flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="fuel-rating" value="fuel-rating-c"
                            class="w-4 h-4 text-yellow-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">C</span>
                    </label>
                    <label class="rating-item rating-d flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="fuel-rating" value="fuel-rating-d"
                            class="w-4 h-4 text-amber-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">D</span>
                    </label>
                    <label class="rating-item rating-e flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="fuel-rating" value="fuel-rating-e"
                            class="w-4 h-4 text-orange-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">E</span>
                    </label>
                    <label class="rating-item rating-f flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="fuel-rating" value="fuel-rating-f"
                            class="w-4 h-4 text-red-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">F</span>
                    </label>
                    <label class="rating-item rating-g flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="fuel-rating" value="fuel-rating-g" disabled
                            class="w-4 h-4 text-red-600 rounded focus:ring-brand-blue focus:ring-2 mr-3 cursor-not-allowed">
                        <span class="font-medium">G</span>
                    </label>
                </div>
            </div>

            <!-- Wet Grip -->
            <div class="mb-6">
                <h3 class="font-semibold text-gray-900 mb-3">Nedves tapadás</h3>
                <div class="space-y-2">
                    <label class="rating-item wet-rating-a flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="wet-rating" value="wet-rating-a"
                            class="w-4 h-4 text-blue-800 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">A</span>
                    </label>
                    <label class="rating-item wet-rating-b flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="wet-rating" value="wet-rating-b"
                            class="w-4 h-4 text-blue-700 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">B</span>
                    </label>
                    <label class="rating-item wet-rating-c flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="wet-rating" value="wet-rating-c"
                            class="w-4 h-4 text-blue-600 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">C</span>
                    </label>
                    <label class="rating-item wet-rating-d flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="wet-rating" value="wet-rating-d"
                            class="w-4 h-4 text-blue-500 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">D</span>
                    </label>
                    <label class="rating-item wet-rating-e flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="wet-rating" value="wet-rating-e"
                            class="w-4 h-4 text-blue-400 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">E</span>
                    </label>
                    <label class="rating-item wet-rating-f flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="wet-rating" value="wet-rating-f"
                            class="w-4 h-4 text-blue-300 rounded focus:ring-brand-blue focus:ring-2 mr-3">
                        <span class="font-medium">F</span>
                    </label>
                    <label class="rating-item wet-rating-g flex items-center bg-gray-100 p-2 rounded cursor-pointer">
                        <input type="checkbox" name="wet-rating" value="wet-rating-g" disabled
                            class="w-4 h-4 text-blue-200 rounded focus:ring-brand-blue focus:ring-2 mr-3 cursor-not-allowed">
                        <span class="font-medium">G</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="bg-green-600 text-white p-4 mb-6 rounded-lg">
            <h3 class="font-semibold mb-2">ÜGYFÉLSZOLGÁLAT</h3>
            <p class="text-sm mb-2">Hívjon minket, ha megtudásával kapcsolatban kérdése van!</p>
            <div class="flex items-center text-lg font-bold">
                <i class="fas fa-phone mr-2"></i>
                +36 1 123 45 67
            </div>
        </div>

        <!-- Opening Hours -->
        <div class="mt-4 text-sm text-gray-600">
            <div class="font-semibold mb-2">ELÉRHETŐSÉG</div>
            <div>H-P: 8:00 - 18:00</div>
            <div>SZ: 8:00 - 15:00</div>
            <div>V: ZÁRVA</div>
        </div>
    </div>
</div>
