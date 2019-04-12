<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Amortizacion;
use App\Persona;
class Cajera extends Model
{
    protected $table='cajeras';
    public function amortizaciones(){
      return $this->hasMany(Amortizacion::class);
    }
    public function persona(){
      return $this->belongsTo(Persona::class);
    }
}
