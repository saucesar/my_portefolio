<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'link', 'github_url', 'programing_language_id', 'framework_id'];

    public function language()
    {
        return $this->belongsTo(ProgramingLanguage::class);
    }

    public function framework()
    {
        return $this->belongsTo(Framework::class);
    }
}