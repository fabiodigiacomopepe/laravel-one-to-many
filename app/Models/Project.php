<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome",
        "framework",
        "versione",
        "deployato",
        "type_id"
    ];

    public function types() {
        return $this -> belongsTo(Type :: class);
    }
}
