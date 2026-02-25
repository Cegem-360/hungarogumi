<section class="services py-8">
    <div class="container mx-auto px-4 justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="{{ route('accessories', ['category' => 'mankókerék']) }}">
                <div class="group flex items-center gap-2 bg-white hover:bg-brand-blue p-4 rounded-lg">
                    <div
                        class="p-4 bg-blue-200 group-hover:bg-white rounded-full flex items-center justify-center aspect-[1/1]">
                        <i class="text-2xl fas fa-recycle text-brand-blue group-hover:text-blue-400"></i>
                    </div>
                    <div class="group-hover:text-white text-sm font-medium">Mankókerék</div>
                </div>
            </a>
            <a href="{{ route('accessories', ['category' => 'tehermentesítő gyűrűk']) }}">
                <div class="group flex items-center gap-2 bg-white hover:bg-brand-blue p-4 rounded-lg">
                    <div
                        class="p-4 bg-blue-200 group-hover:bg-white rounded-full flex items-center justify-center aspect-[1/1]">
                        <i class="text-2xl fas fa-car text-brand-blue group-hover:text-blue-400"></i>
                    </div>
                    <div class="group-hover:text-white text-sm font-medium">Tehermentesítő gyűrűk</div>
                </div>
            </a>
            <a href="{{ route('accessories', ['category' => 'csavarok és anyák']) }}">
                <div class="group flex items-center gap-2 bg-white hover:bg-brand-blue p-4 rounded-lg">
                    <div
                        class="p-4 bg-blue-200 group-hover:bg-white rounded-full flex items-center justify-center aspect-[1/1]">
                        <i class="text-2xl fas fa-certificate text-brand-blue group-hover:text-blue-400"></i>
                    </div>
                    <div class="group-hover:text-white text-sm font-medium">Csavarok és anyák</div>
                </div>
            </a>
            <a href="{{ route('accessories', ['category' => 'dísztárcsák']) }}">
                <div class="group flex items-center gap-2 bg-white hover:bg-brand-blue p-4 rounded-lg">
                    <div
                        class="p-4 bg-blue-200 group-hover:bg-white rounded-full flex items-center justify-center aspect-[1/1]">
                        <i class="text-2xl fas fa-medal text-brand-blue group-hover:text-blue-400"></i>
                    </div>
                    <div class="group-hover:text-white text-sm font-medium">Dísztárcsák</div>
                </div>
            </a>
        </div>
    </div>
</section>
