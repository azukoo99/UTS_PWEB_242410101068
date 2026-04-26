@extends('layouts.app')

@section('body')
<div class="mx-4 lg:mx-10">
    <div>
        <div class="flex flex-col lg:flex-row gap-6">

            <div class="w-full lg:w-1/2 flex flex-col bg-blue-400 p-4 rounded-2xl text-white shadow-[3px_3px_10px_rgba(0,0,0,0.3)]">
                <p class="font-bold text-xl">Ringkasan</p>
                <div class="flex flex-col bg-white text-gray-800 p-4 rounded-2xl mt-2">
                    <p class="font-bold text-2xl py-1">0</p>
                    <p>Transaksi Bulan Ini</p>
                    <p class="font-bold text-2xl py-1">Rp 0</p>
                    <p>Pendapatan Bulan Ini</p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col gap-4">

                <div class="text-center bg-blue-400 p-4 rounded-2xl text-white">
                    <p class="font-bold text-xl">Rekap Transaksi</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">

                    <div class="w-full sm:w-1/2 bg-white p-4 rounded-lg shadow-[3px_3px_10px_rgba(0,0,0,0.3)]">
                        <p class="pb-6 font-bold text-xl">Pemasukan Bulan ini</p>
                        <p class="font-bold text-3xl pb-7">Rp 0</p>
                    </div>

                    <div class="w-full sm:w-1/2 bg-white p-4 rounded-lg shadow-[3px_3px_10px_rgba(0,0,0,0.3)]">
                        <p class="pb-6 font-bold text-xl">Stok Hampir Habis</p>
                        <p class="font-bold text-3xl pb-7">Hiu</p>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="my-5">
        <h1 class="font-bold text-2xl">Katalog Produk</h1>

        <div class="flex flex-wrap gap-6 pt-4 justify-start">
            @foreach ($produk as $item)
                <div class="w-[250px] bg-white p-4 rounded-lg shadow-[3px_3px_10px_rgba(0,0,0,0.3)]">
                    <img src="{{ asset($item['gambar']) }}" alt="{{ $item['nama'] }}" class="w-full h-48 object-cover rounded-lg mb-2">
                    <h2 class="font-bold text-xl">{{ $item['nama'] }}</h2>
                    <p class="text-lg font-bold">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                    <p class="text-gray-600">Stok: {{ $item['stok'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
