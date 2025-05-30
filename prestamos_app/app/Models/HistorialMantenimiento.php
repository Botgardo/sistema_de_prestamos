<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistorialMantenimiento
 *
 * @property $id
 * @property $equipo_id
 * @property $fecha
 * @property $descripcion
 * @property $responsable
 *
 * @property Equipo $equipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HistorialMantenimiento extends Model
{
    
    protected $perPage = 20;
    protected $table = "historial_mantenimiento";
    public $timestamps = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['equipo_id', 'fecha', 'descripcion', 'responsable'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function equipo()
    {
        return $this->belongsTo(\App\Models\Equipo::class, 'equipo_id', 'id');
    }
    
}
