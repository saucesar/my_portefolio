<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function destroy($id, $type = null)
    {
        try {
            dd($id, $type);
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
