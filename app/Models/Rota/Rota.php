<?php

namespace App\Models\Rota;

use App\Models\LinkedModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rota extends LinkedModel
{
    use HasFactory;
    protected $table = "rota";
    protected $guarded = [];

}
