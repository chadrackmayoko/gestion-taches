<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    use AuthorizesRequests;
    
    public function index()
    {
        $users = auth()->user();
       $projects = Auth::user()->projects()->latest()->get();
        return view('projects.index', compact('projects', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:25',
            'description' => 'nullable|string'
        ]);
        Auth::user()->projects()->create($request->only('name', 'description'));
        return redirect()->route('projects.index')->with('Success', 'Project cree avec succss');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $users = User::all();
        return view('projects.show', compact('project', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $this->authorize('update', $project);
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $this->authorize('update', $project);
        $request->validate([
            'name' => 'required|string|max:25',
            'description' => 'nullable|string'
        ]);

        $project->update($request->only('name', 'description'));
        return redirect()->route('projects.index')->with('success', 'Project Update');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $this->authorize('delete', $project);
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Projet supprimé.');

    }
}
