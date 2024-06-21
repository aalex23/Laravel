<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $primaryKey = 'id_laptop';
    protected $fillable = [
        'nom_laptop', 'id_marque', 'model_laptop', 'id_os', 'id_cpu', 'id_gpu', 'resolution_laptop', 'taille_laptop', 'fps_laptop', 'ram_laptop', 'stockage_laptop', 'prix', 'forma_laptop', 'dalle_laptop'
    ];

    public function marque()
    {
        return $this->belongsTo(Marque::class, 'id_marque');
    }

    public function cpu()
    {
        return $this->belongsTo(Cpu::class, 'id_cpu');
    }

    public function gpu()
    {
        return $this->belongsTo(Gpu::class, 'id_gpu');
    }

    public function os()
    {
        return $this->belongsTo(Os::class, 'id_os');
    }
    
    use HasFactory;
}
