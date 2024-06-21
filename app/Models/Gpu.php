<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gpu extends Model
{
    protected $primaryKey = 'id_gpu';
    protected $fillable = ['nom_cpu', 'id_marque', 'id_marque_gpu', 'v_ram_gpu', 'type_gpu', 'image_gpu'];

    public function marque()
    {
        return $this->belongsTo(Marque::class, 'id_marque');
    }

    public function gpuMarque()
    {
        return $this->belongsTo(Marque::class, 'id_marque_gpu');
    }
    use HasFactory;
}
