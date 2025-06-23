@extends('layout')
@section('judul','Pemeriksaan - '.$kategori->nama_pemeriksaan)
@section('konten')

<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Pemeriksaan</p>
        <p class="subtitle">Nama Pemeriksaan: {{ $kategori->nama_pemeriksaan }}</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <table class="table is-fullwidth is-striped is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
			<th>Id Pasien</th>
                    <th>Nama Pemeriksaan</th>
                    
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
    <tr>
        <td>{{ $index + 1 }}</td>
	<td>{{ $item->id_pasien }}</td>
        <td>{{ $item->nama_pemeriksaan }}</td>
  
        <td>
            <a href="/pemeriksaan/{{ $item->id }}" class="button is-small is-info">
                <span class="icon"><i class="fas fa-info-circle"></i></span>
                <span>Selengkapnya</span>
            </a>
        </td>
    </tr>
@endforeach

            </tbody>
        </table>
    </div>
</section>

@endsection
