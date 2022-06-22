<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modulos extends Model
{
    use HasFactory;

    protected $table = "adm_modulos";
    protected $primaryKey = 'mod_id';
    public $timestamps = false;
    protected $fillable = ["mod_nombre", "mod_img", "mod_descripcion", "mod_url", "mod_visitas", "mod_orden", "mod_estado"];
}