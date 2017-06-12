<?php

namespace sistemaPractica;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    protected $table='venta';

    protected $primaryKey='idventa';

    public $timestamps=false;

    protected $fillable =[
    'idcliente',
    'numero_factura',
    'fecha_hora',
    'impuesto',
    'total_venta',
    'estado'
    ];
    protected $guarded =[];
}
