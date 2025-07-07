@extends('layout')
@section('judul', $data->nama_pemeriksaan)
@section('konten')

<!-- Hero Section -->
<section class="bg-green-500 text-white py-10">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold">{{ $data->nama_pemeriksaan }}</h1>
        <h2 class="text-lg mt-2">Hasil Pemeriksaan: {{ $data->kategori ? $data->kategori->nama_pasien : '' }}</h2>
    </div>
</section>

<!-- Detail Card -->
<section class="py-10">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-white rounded shadow p-6">
            <h2 class="text-xl font-semibold mb-6">Detail Pemeriksaan</h2>

            <div class="mb-4">
                <label class="font-medium text-gray-700">Nama:</label>
                <p class="text-gray-800">{{ $data->kategori ? $data->kategori->nama_pasien : '' }}</p>
            </div>

            <div class="mb-4">
                <label class="font-medium text-gray-700">Jenis Kelamin:</label>
                <p class="text-gray-800">{{ $data->kategori ? $data->kategori->jenis_kelamin : '' }}</p>
            </div>

            <div class="mb-4">
                <label class="font-medium text-gray-700">Alamat:</label>
                <p class="text-gray-800">{{ $data->kategori ? $data->kategori->alamat : '' }}</p>
            </div>

            <div class="mb-4">
                <label class="font-medium text-gray-700">Hasil Pemeriksaan:</label>
                <p class="text-gray-800">{{ $data->hasil_pemeriksaan }}</p>
            </div>

            <div class="mb-4">
                <label class="font-medium text-gray-700">Gambar Hasil Pemeriksaan:</label>
                @if($data->gambar)
                    <div class="flex justify-center mt-2">
                        <img src="{{ asset('storage/' . $data->gambar) }}" alt="Gambar Pemeriksaan" class="rounded max-w-full h-auto">
                    </div>
                @else
                    <p class="text-gray-500">Gambar tidak tersedia</p>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection
