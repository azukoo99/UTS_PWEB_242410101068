@extends('layouts.loginlayout')

@section('body')
<div style="background-image: url('{{ asset('images/bg.jpg') }}')"
     class="flex flex-col items-center justify-center bg-cover bg-center h-screen">

    <div class="bg-white rounded-2xl shadow-[3px_3px_10px_rgba(0,0,0,0.3)">
        <form action="/login" method="POST" class="p-8">
            @csrf

            <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Username</label>
                <input type="text" name="username" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium mb-1">Password</label>
                <input type="password" name="password"
                    class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <button type="submit"
                class="w-full bg-blue-400 text-white py-2 rounded-lg hover:bg-blue-500 transition">
                Login
            </button>
        </form>
    </div>

    <p class="mt-6 text-white">Bismillah Lulus UTS</p>

</div>
@endsection
