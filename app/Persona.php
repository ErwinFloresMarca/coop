<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Socio;
class Persona extends Model
{
    protected $table = 'personas';
    public function socio(){
      return $this->hasOne(Socio::class);
    }
}
