<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageBase64 extends Model
{
    use HasFactory;

    protected $fillable = ['extension', 'base64', 'imageable_type', 'imageable_id'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
