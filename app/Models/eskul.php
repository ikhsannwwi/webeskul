<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
    use HasFactory, HasSlug;

    protected $guarded = [];

    public function slugConfigs(): array
    {
        return [
            'slug_dokumentasi' => 'nama_kegiatan'
        ];
    }
    
}
