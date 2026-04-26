@extends('layouts.app')

@section('body')
<div class="mx-4 lg:mx-10">
    <div class="flex flex-col lg:flex-row gap-6">

        <div class="bg-white my-5 shadow-[3px_3px_10px_rgba(0,0,0,0.3)] p-4 rounded-lg lg:w-[300px]">
            <h1 class="font-bold text-2xl">Foto Profil</h1>
            <div class="border-t border-gray-300 my-4"></div>

            <img src="{{ asset('images/profile.png') }}" alt="Profile Image" class="w-full max-w-[200px] mx-auto">

            <button class="w-full bg-blue-400 text-white py-2 rounded-lg hover:bg-blue-500 transition mt-4">
                Ganti Foto Profil
            </button>
        </div>

        <div class="bg-white my-5 shadow-[3px_3px_10px_rgba(0,0,0,0.3)] p-4 rounded-lg flex-1">
            <h1 class="font-bold text-2xl">Informasi Pengguna</h1>

            <div class="border-t border-gray-300 my-4">

                <div class="my-3">
                    <p class="pb-2">Username</p>
                    <p class="w-full px-3 py-2 rounded-lg border border-gray-300">{{ $username }}</p>
                </div>

                <div class="my-3">
                    <p class="pb-2">Email</p>
                    <p class="w-full px-3 py-2 rounded-lg border border-gray-300">{{ $username }}@gmail.com</p>
                </div>

                <div class="my-3">
                    <p class="pb-2">Nomor Telepon</p>
                    <p class="w-full px-3 py-2 rounded-lg border border-gray-300">08123456789</p>
                </div>

                <div class="my-3">
                    <p class="pb-2">Alamat</p>
                    <p class="w-full px-3 py-2 rounded-lg border border-gray-300">Jember</p>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
