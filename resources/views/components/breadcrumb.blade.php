<div class="container mx-auto px-4 py-3">
    <nav class="flex text-sm text-gray-500">
        <a href="{{ route('home') }}" class="hover:text-gray-700">somigumi.hu</a>
        <span class="mx-2">›</span>
        <a href="{{ url('/' . request()->segment(1)) }}" class="hover:text-gray-700">
            {{ ucfirst(request()->segment(1)) }}
        </a>
        {{-- <span class="mx-2">›</span>
        <a href="#" class="hover:text-gray-700"></a>
        <span class="mx-2">›</span>
        <a href="#" class="hover:text-gray-700"></a>
        <span class="mx-2">›</span>
        <span class="text-gray-700"></span> --}}
    </nav>
</div>
