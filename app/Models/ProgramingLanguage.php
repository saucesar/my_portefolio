<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramingLanguage extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon_path'];

    public function frameworks()
    {
        return $this->hasMany(Framework::class);
    }
    
    public function iconUrl()
    {
        return $this->icon_path ? url($this->icon_path) : '';
    }
}
