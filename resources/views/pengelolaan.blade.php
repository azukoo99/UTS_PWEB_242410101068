@extends('layouts.app')

@section('body')

<div class="flex justify-end mx-4 lg:mx-10">
    <button class="bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-500 transition">
        Tambah Produk
    </button>
</div>

<div class="p-4 mx-4 lg:mx-10">

    <div class="hidden md:grid grid-cols-3 bg-white py-2 px-4 rounded-2xl shadow">
        <p>Produk</p>
        <p class="text-center">Stok</p>
        <p class="text-right">Aksi</p>
    </div>

    <div>
        @foreach ($produk as $item)

            <div class="bg-white py-3 px-4 rounded-2xl shadow mt-4 flex flex-col md:grid md:grid-cols-3 md:items-center gap-3">

                <div class="flex items-center gap-3">
                    <img src="{{ asset($item['gambar']) }}" alt="{{ $item['nama'] }}" class="w-12 h-12 object-cover rounded-lg">
                    <div>
                        <p>{{ $item['nama'] }}</p>
                        <p>Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                    </div>
                </div>

                <p class="md:text-center">
                    <span class="md:hidden font-semibold">Stok: </span>{{ $item['stok'] }}
                </p>

                <div class="flex gap-2 md:justify-end">
                    <button class="bg-blue-400 text-white px-3 py-1 rounded-lg hover:bg-blue-500 transition">Edit</button>
                    <button class="bg-red-400 text-white px-3 py-1 rounded-lg hover:bg-red-500 transition">Hapus</button>
                </div>

            </div>

        @endforeach
    </div>

</div>

@endsection
