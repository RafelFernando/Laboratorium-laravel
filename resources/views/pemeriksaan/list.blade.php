@extends('layout')
@section('judul','Pemeriksaan')
@section('konten')

<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Daftar Pemeriksaan</p>
        <p class="subtitle">Laboratorium Pemeriksaan</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <table class="table is-fullwidth is-striped is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemeriksaan</th>
                    <th>Nama Pasien</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_pemeriksaan }}</td>
                    <td>{{ $item->pasien->nama_pasien }}</td>
                    <td>
                        <a href="/pemeriksaan/{{ $item->id }}" class="button is-small is-info">
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
