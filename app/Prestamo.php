<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Socio;
use App\Asesor;
class Prestamo extends Model
{
    protected $table='perstamos';

    public function socio(){
      return $this->belongsTo(Socio::class);
    }
    public function asesor(){
      return $this->belongsTo(Asesor::class);
    }
}
