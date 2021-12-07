<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['path', 'imageable_type', 'imageable_id'];

    public function imageable()
    {
        return $this->morphTo();
    }

    public function url($basePath='storage/')
    {
        return url($basePath.$this->path);
    }
}
