<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tecnology extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description', 'icon_path'];

    public function iconUrl()
    {
        return url($this->icon_path);
    }
}
