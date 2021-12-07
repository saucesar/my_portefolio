<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        //
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

    public function update(Request $request, $id)
    {
        try {
            $project = \App\Models\Project::findOrFail($id);
            
            $project->update($request->only($project->getFillable()));
            $project->projectTecnology()->delete();
            $project->assossiateTecnologies($request->tecnologies);

            return back()->with('success', 'Projeto atualizado!');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
