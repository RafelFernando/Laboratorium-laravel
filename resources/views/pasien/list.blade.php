@extends('layout')
@section('judul', 'Pasien')
@section('konten')

<!-- Hero Section -->
<section class="bg-green-500 text-white py-10">
    <div class="text-center">
        <h1 class="text-3xl font-bold">Daftar Pasien</h1>
        <p class="text-lg mt-2">Laboratorium Pemeriksaan</p>
    </div>
</section>

<!-- Tabel Pasien -->
<section class="py-10 px-4">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow">
            <thead class="bg-gray-100 text-left text-sm font-semibold text-gray-700">
                <tr>
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">Foto</th>
                    <th class="px-4 py-3">Nama Pasien</th>
                    <th class="px-4 py-3">Jenis Kelamin</th>
                    <th class="px-4 py-3">Alamat</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-700">
                @foreach ($data as $index => $item)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3">{{ $index + 1 }}</td>
                    <td class="px-4 py-3">
                        <img src="{{ $item->gambar ? Storage::url($item->gambar) : 'https://via.placeholder.com/64' }}" 
                             alt="Gambar Pasien"
                             class="w-16 h-16 object-cover rounded">
                    </td>
                    <td class="px-4 py-3">{{ $item->nama_pasien }}</td>
                    <td class="px-4 py-3">{{ $item->jenis_kelamin }}</td>
                    <td class="px-4 py-3">{{ $item->alamat }}</td>
                    <td class="px-4 py-3">
                        <a href="/pasien/{{ $item->id }}" 
                           class="inline-block bg-blue-500 text-white text-sm px-3 py-1 rounded hover:bg-blue-600 transition">
                            <i class="fas fa-info-circle mr-1"></i>Baca Selengkapnya
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection
