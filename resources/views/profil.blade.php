@extends('layout')
@section('judul', 'Profil')
@section('konten')

<section class="bg-green-500 text-white py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold">Profil Mahasiswa</h1>
        <p class="text-xl mt-2">Program Studi Sistem Informasi</p>
    </div>
</section>

<section class="bg-green-50 py-12">
    <div class="container mx-auto px-4 flex flex-col md:flex-row gap-8 items-start">
        <div class="w-full md:w-1/3">
            <img class="rounded-lg shadow-md w-full object-cover" 
     src="{{ asset('images/rafel.png') }}" 
     alt="Foto Profil Rafel">


        </div>
        <div class="w-full md:w-2/3 bg-white rounded-lg shadow p-6">
            <table class="w-full text-left border-collapse">
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 font-semibold text-gray-700 w-1/3">Nama</td>
                        <td class="py-2 w-1">:</td>
                        <td class="py-2 text-gray-800">Rafel Fernando</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 font-semibold text-gray-700">Alamat</td>
                        <td class="py-2">:</td>
                        <td class="py-2 text-gray-800">Sukoharjo</td>
                    </tr>
                    <tr>
                        <td class="py-2 font-semibold text-gray-700">Kewarganegaraan</td>
                        <td class="py-2">:</td>
                        <td class="py-2 text-gray-800">Indonesia</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
