<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Menu</h1>
        @if (session('success'))
            <div class="bg-green-500 text-white p-3 mb-4">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('menu.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Menu</a>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @foreach ($menus as $menu)
                <div class="p-4 bg-white shadow rounded">
                    <img src="{{ Storage::url($menu->gambar) }}" class="h-48 w-full object-cover mb-4" alt="Menu Image">
                    <h2 class="text-lg font-bold">{{ $menu->nama }}</h2>
                    <p>{{ Str::limit($menu->deskripsi, 100) }}</p>
                    <p class="mt-2 font-bold text-gray-700">Rp{{ number_format($menu->harga, 0, ',', '.') }}</p>
                    <a href="{{ route('menu.edit', $menu->id) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline ml-2">Hapus</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
