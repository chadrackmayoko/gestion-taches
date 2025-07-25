<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $users = User::all();
        $projects = Auth::user()->projects()->get();
         $tasks = Auth::user()->assignedTasks()->latest()->get();
        return view('tasks.index', compact('tasks','users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'title' => 'string|required|max:255',
            'description' => 'nullable|string',
             'assigned_to' => 'nullable|exists:users,id',
             'completed' => 'required|boolean',
             'project_id' => 'required|exists:projects,id',
        ]);
        $project = Project::findOrFail($validate['project_id']);
        $project->tasks()->create([
            'title' => $validate['title'],
            'description' => $validate['description'],
            'assigned_to' => auth()->id(),
            'completed' => $validate['completed'],
            'project_id' => $validate['project_id']
        ]);
        return redirect()->route('projects.index')->with('success', 'ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $users = User::all();
        return view('tasks.edit', compact('task', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $users = User::all();
        $this->authorize('update', $task);
        $validate = $request->validate([
            'title' => 'string|required|max:255',
            'description' => 'nullable|string',
             'assigned_to' => 'nullable|exists:users,id',
        ]);
        $task->update($validate);
        return redirect()->route('projects.show', $task->project)->with('success', 'task update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function toggle (Task $task) {
        $this->authorize('toggle', $task);

        $task->update([
            'completed' => !$task->completed,
        ]);
//dd($task->completed);
        return back()->with('success', 'tache mise a jour');
    }
}
