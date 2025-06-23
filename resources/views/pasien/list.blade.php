@extends('layout')
@section('judul', 'Pasien')
@section('konten')

<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Daftar Pasien</p>
        <p class="subtitle">Laboratorium Pemeriksaan</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <table class="table is-fullwidth is-striped is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        @if ($item->gambar)
                        <figure class="image is-64x64">
                            <img src="{{ Storage::url($item->gambar) }}" alt="Gambar Pasien">
                        </figure>
                        @else
                        <figure class="image is-64x64">
                            <img src="https://via.placeholder.com/64" alt="Placeholder">
                        </figure>
                        @endif
                    </td>
                    <td>{{ $item->nama_pasien }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        <a href="/pasien/{{ $item->id }}" class="button is-small is-info">
                            <span class="icon"><i class="fas fa-info-circle"></i></span>
                            <span>Baca Selengkapnya</span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
