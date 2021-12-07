<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description', 'link', 'github_url'];

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

    public function assossiateTecnologies(array $tecnologyIDs)
    {
        foreach($tecnologyIDs as $tecnology_id) {
            \App\Models\TecnologyProject::create(['tecnology_id' => $tecnology_id, 'project_id' => $this->id]);
        }
    }

    public function projectTecnology()
    {
        return $this->hasMany(TecnologyProject::class, 'project_id', 'id');
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
