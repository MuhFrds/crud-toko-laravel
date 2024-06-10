<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">

        <div class="flex mt-6 justify-between items-center">
            <h2 class="font-semibold text-xl">Product Details</h2>
        </div>

        <div class="mt-4">
            <div class="flex gap-8">
                <div class="w-1/2">
                    <img src="{{ asset('storage/' . $product->foto) }}" class="rounded-md" />
                </div>
                <div class="w-1/2">
                    <div class="mt-4">
                        <x-input-label for="nama" :value="__('Nama')" />
                        <p class="block mt-1 w-full border p-2">{{ $product->nama }}</p>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="harga" :value="__('Harga')" />
                        <p class="block mt-1 w-full border p-2">Rp. {{ number_format($product->harga) }}</p>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                        <p class="block mt-1 w-full border p-2">{{ $product->deskripsi }}</p>
                    </div>

                    <div class="flex space-x-2 mt-4">
                        <!-- Tambahkan tombol baru di sini -->
                        <a href="{{ route('products.index', $product) }}">
                            <button class="bg-blue-100 px-10 py-2 w-full rounded-md font-semibold">Back</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>