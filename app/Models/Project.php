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
        return $this->belongsTo(ProgramingLanguage::class, 'programing_language_id', 'id');
    }

    public function framework()
    {
        return $this->belongsTo(Framework::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function imagesBase64()
    {
        return $this->morphMany(ImageBase64::class, 'imageable');
    }

    public function tecnologies()
    {
        return $this->hasManyThrough(Tecnology::class, TecnologyProject::class, 'project_id', 'id', 'id','tecnology_id');
    }

    public function containsTecnology(int $id)
    {
        $contain = false;

        foreach($this->tecnologies as $tec) {
            $contain = ($tec->id == $id);
            if($contain) { break; }
        }
        
        return $contain;
    }
}
