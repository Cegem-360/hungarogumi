<x-layouts.app>
    <x-slot name="title">Szolgáltatásaink</x-slot>
    <x-slot name="description">Az árak forintban értendők, és tartalmazzák az ÁFA értékét!</x-slot>
    <x-slot name="keywords">gumiabroncsok, autógumik, nyári gumik, téli gumik, lemezfelnik, alufenik, centrírózás,
        kerékszerelés</x-slot>

    <!-- Breadcrumb -->
    <x-breadcrumb />

    <!-- Header Section -->
    <section class="bg-white py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Szolgáltatások</h1>
            <p class="text-gray-600 text-lg">Az árak forintban értendők, és tartalmazzák az ÁFA értékét!</p>
        </div>
    </section>

    <!-- Services Tables -->
    <section class="py-12 bg-gray-50">
        <div class="container grid grid-cols-2 gap-6 mx-auto px-4">

            <!-- LEMEZ TELJES Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">LEMEZ TELJES</h2>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Típus</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Méret</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ár</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Lemez teljes 12"-13"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">12"-13"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">4.500 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Lemez teljes 14"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">14"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">4.990 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Lemez teljes 15"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">15"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">5.500 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Lemez teljes 16"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">16"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">5.990 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Lemez teljes 17"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">17"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">6.490 Ft/db
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- LEMEZ SZERELÉS Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">LEMEZ SZERELÉS</h2>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Szolgáltatás</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Méret</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ár</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Lemez szerelés 12"-13"
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">12"-13"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">3.500 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Lemez szerelés 14"-15"
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">14"-15"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">3.990 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Lemez szerelés 16"-17"
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">16"-17"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">4.500 Ft/db
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- LEMEZ CENTRÍROZÁS Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">LEMEZ CENTRÍROZÁS</h2>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Szolgáltatás</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Méret</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ár</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Lemez centrírozás 12"-13"
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">12"-13"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">3.990 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Lemez centrírozás 14"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">14"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">3.990 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Lemez centrírozás 15"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">15"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">4.290 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Lemez centrírozás 16"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">16"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">4.500 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Lemez centrírozás 17"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">17"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">4.990 Ft/db
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ALU TELJES Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">ALU TELJES</h2>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Típus</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Méret</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ár</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu teljes 13"-14"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">13"-14"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">5.500 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu teljes 15"-16"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">15"-16"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">5.990 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu teljes 17"-18"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">17"-18"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">6.500 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu teljes 19"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">19"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">7.500 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu teljes 20"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">20"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">8.990 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu teljes 21"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">21"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">9.900 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu teljes 22"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">22"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">9.990 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu teljes 23"-tól</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">23"-tól</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">9.990 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu franciatárcsa teljes
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">-</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">6.990 Ft/db
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ALU CENTRÍROZÁS Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">ALU CENTRÍROZÁS</h2>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Szolgáltatás</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Méret</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ár</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu centrírozás 13"-14"
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">13"-14"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">4.500 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu centrírozás 15"-16"
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">15"-16"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">4.990 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu centrírozás 17"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">17"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">5.500 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu centrírozás 18"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">18"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">5.500 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu centrírozás 19"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">19"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">6.500 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu centrírozás 20"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">20"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">6.990 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu centrírozás 21"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">21"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">6.990 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu centrírozás 22"-tól
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">22"-tól</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">7.500 Ft/db
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ALU SZERELÉS Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">ALU SZERELÉS</h2>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Szolgáltatás</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Méret</th>
                                <th class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">Ár</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu szerelés 13"-14"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">13"-14"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">3.500 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu szerelés 15"-16"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">15"-16"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">3.990 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu szerelés 17"-18"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">17"-18"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">4.500 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu szerelés 19"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">19"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">4.990 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu szerelés 20"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">20"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">5.990 Ft/db
                                </td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu szerelés 21"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">21"</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">5.990 Ft/db
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alu szerelés 22"-tól</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">22"-tól</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium">7.500 Ft/db
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ALUFELNI JAVÍTÁS Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">ALUFELNI JAVÍTÁS</h2>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Alufelni javítás 13"-14"</h3>
                            <p class="text-gray-600 mb-2">13"-14"</p>
                            <p class="text-lg font-medium text-gray-900">16.990 Ft/db</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Alufelni javítás 15"-16"</h3>
                            <p class="text-gray-600 mb-2">15"-16"</p>
                            <p class="text-lg font-medium text-gray-900">18.990 Ft/db</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Alufelni javítás 17"-18"</h3>
                            <p class="text-gray-600 mb-2">17"-18"</p>
                            <p class="text-lg font-medium text-gray-900">19.990 Ft/db</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Alufelni javítás 19"-20"</h3>
                            <p class="text-gray-600 mb-2">19"-20"</p>
                            <p class="text-lg font-medium text-gray-900">24.990 Ft/db</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Alufelni javítás 21"-tól</h3>
                            <p class="text-gray-600 mb-2">21"-tól</p>
                            <p class="text-lg font-medium text-gray-900">26.990 Ft/db</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Alufelni esztétika</h3>
                            <p class="text-gray-600 mb-2">A felni méretétől, a sérülés mértékétől, a javítási
                                metódustól függően az ár változhat</p>
                            <p class="text-lg font-medium text-gray-900">20.000 - 35.000 Ft/db</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ALU SZÉTSZERELÉS Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">ALU SZÉTSZERELÉS</h2>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="p-6">
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Alu/lemez szétszerelés 17"-ig</h3>
                            <p class="text-gray-600 mb-2">17"-ig</p>
                            <p class="text-lg font-medium text-gray-900">3.990 Ft/db</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Alu szétszerelés 18"-19"-20"</h3>
                            <p class="text-gray-600 mb-2">18"-19"-20"</p>
                            <p class="text-lg font-medium text-gray-900">3.990 Ft/db</p>
                        </div>
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Alu szétszerelés 21"-tól</h3>
                            <p class="text-gray-600 mb-2">21"-tól</p>
                            <p class="text-lg font-medium text-gray-900">5.000 Ft/db</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SZERELÉSI FELÁRAK LEMEZ/ALUFELNI Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">SZERELÉSI FELÁRAK LEMEZ/ALUFELNI</h2>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Felárak</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li>• TPMS: 850 Ft/db</li>
                                <li>• Defekttűrő: 850 Ft/db</li>
                                <li>• Kisteher/terepjáró: 850 Ft/db</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">ABRONCS TÁROLÁS</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li>• Abroncs tárolás 13"-16": 5.500 Ft/db</li>
                                <li>• Abroncs tárolás 17"-18": 6.500 Ft/db</li>
                                <li>• Abroncs tárolás 19"-20": 7.500 Ft/db</li>
                                <li>• Abroncs tárolás 21"-tól: 8.500 Ft/db</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TPMS Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">TPMS</h2>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">TPMS Szolgáltatások</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Tpms kerék programozás</span>
                                    <span class="font-medium">4.990 Ft/db</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Tpms autó programozás</span>
                                    <span class="font-medium">14.990 Ft/db</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Tpms szelep kiszerelés / átszerelés</span>
                                    <span class="font-medium">3.990 Ft/db</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">EGYÉB Szolgáltatások</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Kerékmosás</span>
                                    <span class="font-medium">990 Ft/kerék</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Szöglyuk javítás</span>
                                    <span class="font-medium">6.990 Ft/db</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Perem csiszolás</span>
                                    <span class="font-medium">3.990 Ft/db</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Perem tömítés</span>
                                    <span class="font-medium">3.990 Ft/db</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Csavartároló doboz</span>
                                    <span class="font-medium">290 Ft/db</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Kerék le-fel szerelés</span>
                                    <span class="font-medium">2.990 Ft/db</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Kerék le-fel szerelés (Terepjáró, kisteher)</span>
                                    <span class="font-medium">3.500 Ft/db</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Extra centrírozás felár</span>
                                    <span class="font-medium">4.990 Ft/db</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Extra teljes szerelés felár</span>
                                    <span class="font-medium">4.990 Ft/db</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Gumis zsák</span>
                                    <span class="font-medium">390 Ft/db</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Segédanyagok Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">SEGÉDANYAGOK</h2>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="mb-4">
                        <p class="text-gray-600 mb-4">
                            <strong>A fenti táblázatokban szereplő árak a munkadíjak árát jelentik, a felhasznált
                                segédanyagok (pl. szelep, súlyok) árát nem tartalmazzák!</strong>
                        </p>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Segédanyagok ára:</h3>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-medium text-gray-900 mb-2">Szelepek:</h4>
                            <ul class="space-y-1 text-gray-600">
                                <li>• Gumiszelep: 690 Ft/db (minden esetben cseréljük)</li>
                                <li>• Krómszelep: 790 Ft/db (minden esetben cseréljük)</li>
                                <li>• Fémszelep: 1.990 Ft/db</li>
                                <li>• Rejtett fém szelep: 5.990 Ft/garnitúra</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900 mb-2">Egyéb:</h4>
                            <ul class="space-y-1 text-gray-600">
                                <li>• Csavar: már 490 Ft/db ár-tól (a speciális eseteket kivéve)</li>
                                <li>• Ragasztott cink vagy acél súly: 12 Ft/g</li>
                                <li>• Ütött cink vagy acél súly: 10 Ft/g</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-6 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                        <p class="text-sm text-yellow-800">
                            <strong>Fontos tudnivalók:</strong>
                        </p>
                        <ul class="text-sm text-yellow-700 mt-2 space-y-1">
                            <li>• Szelepcsere nélkül az elvégzett munkára nem tudunk garanciát vállalni</li>
                            <li>• Cégünk hatályos jogszabályoknak megfelelően centrírozáskor kizárólag cink vagy acél
                                súlyokat használ</li>
                            <li>• Az ólom súlyok használatát jogszabály tiltja, mert súlyosan károsítják a környezetet
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Important Notes Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 mb-8">
                <h2 class="text-xl font-bold text-yellow-800 mb-4">Fontos tudnivalók az árakról és szolgáltatásokról
                </h2>
                <div class="text-yellow-700 space-y-2">
                    <p><strong>A fenti táblázatokban szereplő árak a munkadíjak árát jelentik, a felhasznált
                            segédanyagok (pl. szelep, súlyok) árát nem tartalmazzák!</strong></p>
                    <p>• Az árak forintban értendők, és tartalmazzák az ÁFA értékét</p>
                    <p>• Szelepcsere nélkül az elvégzett munkára nem tudunk garanciát vállalni</p>
                    <p>• Cégünk hatályos jogszabályoknak megfelelően centrírozáskor kizárólag cink vagy acél súlyokat
                        használ</p>
                    <p>• Az ólom súlyok használatát jogszabály tiltja, mert súlyosan károsítják a környezetet</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4">Kapcsolat és időpontfoglalás</h3>
                    <div class="text-blue-700 space-y-3">
                        <p><strong>Telefonos egyeztetés:</strong> Kérjük, hogy a szolgáltatások igénybevétele előtt
                            telefonon egyeztessen velünk az időpontról és a részletekről.</p>
                        <p><strong>Munkaidő:</strong> Hétfő-Péntek 8:00-17:00, Szombat 8:00-13:00</p>
                        <p><strong>Időtartam:</strong> A munkálatok időtartama függ a kerékmérettől és a szolgáltatás
                            típusától.</p>
                    </div>
                </div>

                <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-green-800 mb-4">Garanciális feltételek</h3>
                    <div class="text-green-700 space-y-3">
                        <p><strong>Szavatosság:</strong> Minden elvégzett munkára szavatosságot biztosítunk</p>
                        <p><strong>Minőségbiztosítás:</strong> Professzionális eszközökkel és tapasztalt szakemberekkel
                            dolgozunk</p>
                        <p><strong>Utókövetés:</strong> A javítások után utókövetést biztosítunk</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
