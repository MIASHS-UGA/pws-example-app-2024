<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = Project::all();
        return view('project.index', ['projects' => $projects]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        //
        $project = new Project(); //on instancie un nouveau projet
        $request->validate([
            'title' => 'required|min:4|max:255',
            'description' => 'required',
        ]);
        $project->title = request('title'); //on set le titre avec la donnée envoyée du formulaire
        $project->description = request('description');
        $project->user_id = 1;

        $project->save(); // on enregistre dans la base
       // Project::create(request(['title', 'description']));

        return redirect('/project'); // méthode pour rediriger vers une autre url (en get par défaut)

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
