<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    protected $primaryKey = 'id_cpu';
    protected $fillable = ['nom_cpu', 'id_marque', 'model_cpu', 'nombre_coeur', 'image_cpu'];

    public function marque()
    {
        return $this->belongsTo(Marque::class, 'id_marque');
    }
    use HasFactory;
}
