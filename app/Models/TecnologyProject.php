<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TecnologyProject extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'tecnology_id'];
}
