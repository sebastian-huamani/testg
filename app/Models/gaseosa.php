<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaseosa extends Model
{
    use HasFactory;

    protected $fillable = [ 'nombre', 'precio', 'presentacion', 'stock'];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

}
