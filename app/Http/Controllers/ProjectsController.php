<?php

namespace App\Http\Controllers;

use App\Http\Requests\Projects\StoreRequest;
use App\Http\Requests\Projects\UpdateRequest;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $data = [
            'projects' => \App\Models\Project::paginate(6),
            'tecnologies' => \App\Models\Tecnology::all(),
        ];

        return view('projects.index', $data);
    }

    public function store(StoreRequest $request)
    {
        try {
            $project = \App\Models\Project::create($request->all());
            $project->assossiateTecnologies($request->tecnologies);
            if($request->has('images')) {
                $this->saveImages($project, $request->images);
            }
            
            return back()->with('success', 'Projeto atualizado!');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function show($id)
    {
        try {
            $data = [
                'project' => \App\Models\Project::findOrFail($id),
                'tecnologies' => \App\Models\Tecnology::all(),
            ];

            return view('projects.show', $data);
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update(UpdateRequest $request, $id)
    {
        try {
            $project = \App\Models\Project::findOrFail($id);
            
            $project->update($request->only($project->getFillable()));
            $project->projectTecnology()->delete();
            $project->assossiateTecnologies($request->tecnologies);
            if($request->has('images')) {
                $this->saveImages($project, $request->images);
            }

            return back()->with('success', 'Projeto atualizado!');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $project = \App\Models\Project::findOrFail($id);
            $project->delete();
            
            session()->flash('success', 'Projeto deletado!');

            return redirect()->route('projects.index');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function saveImages(\App\Models\Project $project, Array $images)
    {
        if(env('FORCE_SAVE_IMG_BASE64', false)) {
            foreach($images as $img) {
                if($img->isValid()){
                    $project->imagesBase64()->create(['extension' => $img->getMimeType(), 'base64' => base64_encode($img->get())]);
                }
            }
        } else {
            foreach($images as $img) {
                if($img->isValid()){
                    $project->images()->create(['path' => $img->store("images/projects/$project->id/", 'public')]);
                }
            }
        }
    }
}
