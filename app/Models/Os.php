<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os extends Model
{
    protected $primaryKey = 'id_os';
    protected $fillable = ['nom_os'];
    use HasFactory;
}
