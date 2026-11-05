<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matieres extends Model
{
    protected $table = 'matieres';

public $timestamps = false;
protected $keyType = 'integer';
 public function epreuves(): HasMany
    {
        return $this->hasMany(Epreuve::class);
    }
}
