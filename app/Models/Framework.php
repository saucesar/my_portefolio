<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'icon_path', 'programing_laguage_id'];

    public function language()
    {
        return $this->belongsTo(ProgramingLaguage::class);
    }

    public function iconUrl()
    {
        return $this->icon_path ? url($this->icon_path) : '';
    }
}
