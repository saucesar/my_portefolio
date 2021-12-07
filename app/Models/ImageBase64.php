<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageBase64 extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['extension', 'base64', 'imageable_type', 'imageable_id'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
