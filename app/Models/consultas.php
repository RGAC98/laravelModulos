<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consultas extends Model
{
    use HasFactory;

    protected $table = "adm_consultas";
    protected $primaryKey = 'csl_id';
    public $timestamps = false;
    protected $fillable = ["csl_nombre", "csl_descripcion", "csl_ruta", "csl_imagen", "csl_estado"];
}
