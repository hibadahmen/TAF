<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class epreuves extends Model
{protected $table = 'epreuves';

public $timestamps = false;
protected $keyType = 'integer';
public function matiere(): BelongsTo
{
    return $this->belongsTo(Matiere::class, 'matiere_id');
}

}
