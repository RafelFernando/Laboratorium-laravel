@extends('layout')
@section('judul','Pemeriksaan')
@section('konten')

<!-- Header Section -->
<section class="bg-green-500 text-white py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold">Daftar Pemeriksaan</h1>
        <p class="text-lg mt-2">Laboratorium Pemeriksaan</p>
    </div>
</section>

<!-- Table Section -->
<section class="py-10">
    <div class="container mx-auto px-4">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow rounded-lg">
                <thead class="bg-green-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-left">No</th>
                        <th class="py-3 px-4 text-left">Nama Pemeriksaan</th>
                        <th class="py-3 px-4 text-left">Nama Pasien</th>
                        <th class="py-3 px-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($data as $index => $item)
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $index + 1 }}</td>
                        <td class="py-3 px-4">{{ $item->nama_pemeriksaan }}</td>
                        <td class="py-3 px-4">{{ $item->pasien->nama_pasien }}</td>
                        <td class="py-3 px-4">
                            <a href="/pemeriksaan/{{ $item->id }}"
                               class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 rounded">
                                <i class="fas fa-info-circle mr-2"></i> Baca Selengkapnya
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
