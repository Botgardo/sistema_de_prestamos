<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $id
 * @property $nombre
 * @property $marca
 * @property $modelo
 * @property $numero_serie
 * @property $estado
 * @property $ubicacion
 * @property $tipo_id
 *
 * @property TipoEquipo $tipoEquipo
 * @property HistorialMantenimiento[] $historialMantenimientos
 * @property Prestamo[] $prestamos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
    
    protected $perPage = 20;
    protected $table = "equipo";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'marca', 'modelo', 'numero_serie', 'estado', 'ubicacion', 'tipo_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoEquipo()
    {
        return $this->belongsTo(\App\Models\TipoEquipo::class, 'tipo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialMantenimientos()
    {
        return $this->hasMany(\App\Models\HistorialMantenimiento::class, 'id', 'equipo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prestamos()
    {
        return $this->hasMany(\App\Models\Prestamo::class, 'id', 'equipo_id');
    }
    
}
