<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function destroy($id, $type = null)
    {
        try {
            $image = $type == 'base64' ? \App\Models\ImageBase64::findOrFail($id) : \App\Models\Image::findOrFail($id);
            $image->delete();

            return back()->with('success', 'Imagem removida!');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
