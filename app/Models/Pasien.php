<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
	
	protected $table = 'pasien';
	
	protected $fillable = [
		'nama_pasien',
		'gambar',
		'alamat',
		
		
	];

public function pemeriksaan():BelongsTo
	{
		return $this->hasMany(Pemeriksaan::class, 'pasien_id');
	}
}
