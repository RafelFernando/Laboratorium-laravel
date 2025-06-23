<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pemeriksaan extends Model
{
    use HasFactory;
	
	protected $table = 'pemeriksaan';
	
	protected $fillable = [
		"id_pasien",
		"nama_pemeriksaan",
		"hasil_pemeriksaan",
		"gambar",
		"lampiran",
		"lampiran_nama"
	];
	
	public function kategori():BelongsTo
	{
		return $this->belongsTo(Pasien::class, 'id_pasien');
	}
	

	protected $casts = [
		'lampiran' => 'array',
		'lampiran_nama' => 'array',
	];
}
