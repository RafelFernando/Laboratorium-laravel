@extends('layout')
@section('judul', $data->nama_pemeriksaan)
@section('konten')

<section class="hero is-success">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">{{ $data->nama_pemeriksaan }}</h1>
            <h2 class="subtitle">Hasil Pemeriksaan: {{ $data->kategori ? $data->kategori->nama_pasien : '' }}</h2>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-three-quarters">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Detail Pemeriksaan
                        </p>
                    </header>
                    <div class="card-content">
						<div class="content">
                            <strong>Nama:</strong>
                            <p>{{ $data->kategori ? $data->kategori->nama_pasien : '' }}</p>
                        </div>
						<div class="content">
                            <strong>Jenis Kelamin:</strong>
                            <p>{{ $data->kategori ? $data->kategori->jenis_kelamin : '' }}</p>
                        </div>
						<div class="content">
                            <strong>Alamat:</strong>
                            <p>{{ $data->kategori ? $data->kategori->alamat : '' }}</p>
                        </div>
                        <div class="content">
                            <strong>Hasil Pemeriksaan:</strong>
                            <p>{{ $data->hasil_pemeriksaan }}</p>
                        </div>
                        <div class="content">
                            <strong>Gambar Hasil Pemeriksaan:</strong>
                            @if($data->gambar)
                                <div class="image-container">
                                    <img src="{{ asset('storage/' . $data->gambar) }}" alt="Gambar Pemeriksaan">
                                </div>
                            @else
                                <p>Gambar tidak tersedia</p>
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<style>
    .image-container {
        display: flex;
        justify-content: center;
    }
    .image-container img {
        max-width: 100%;
        height: auto;
    }
</style>
