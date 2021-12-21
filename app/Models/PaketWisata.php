<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaketWisata extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tb_paket_wisata';
    protected $fillable = [
        'id',
        'kategori_paket_wisata_id',
        'image',
        'nama',
        'slug',
        'deskripsi',
        'harga',
        'address'
    ];

    protected $casts = [
        'id' => 'integer',
        'kategori_paket_wisata_id' => 'integer',
        'harga' => 'integer'
    ];

    protected $with = [
        'kategori'
    ];

    protected $appends = [
        'image_path'
    ];

    public function kategori()
    {
        return $this->belongsTo('App\Models\KategoriPaketWisata', 'kategori_paket_wisata_id')->withTrashed();
    }

    public function getImagePathAttribute()
    {
        return $this->image ? url("/photo/" . $this->image) : 'https://placehold.co/300x200';
    }
}
