
<x-app-layout>
<h2 class="mt-4 text-xl font-bold">Liste des tâches</h2>

<ul class="mt-2">
    @forelse ($project->tasks as $task)
        <li class="mb-2 border p-3 rounded bg-gray-100">
            <div class="flex justify-between items-center">
                <div>
                    <strong>{{ $task->title }}</strong>
                   
                    @if ($task->completed)
                   
                        <span class="text-green-600 font-semibold">(terminée)</span>
                    @endif
                    <p class="text-sm text-gray-600">{{ $task->description }}</p>
                      <label class="block">Assigner à :</label>
                <select name="assigned_to" class="border p-2 w-full rounded">
                        <option value="">-- Non assignée --</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ old('assigned_to', $task->assigned_to ?? '') == $user->id ? 'selected' : '' }}>
                {{ $user->name }}
            </option>
                    @endforeach
                </select>
                </div>

                {{-- Supprimer la tâche --}}
                <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600 hover:underline" onclick="return confirm('Supprimer cette tâche ?')">
                        Supprimer
                    </button>
                </form>
            </div>
        </li>
        @can('toggle', $task)
        <form method="POST" action="{{ route('tasks.toggle', $task) }}">
    @csrf
    @method('PATCH')

    <button class="text-sm {{ $task->completed ? 'text-green-600' : 'text-gray-600' }}">
        {{ $task->completed ? 'Marquer comme non terminée' : 'Marquer comme  terminée' }}
    </button>
</form>
@endcan
<a href="{{ route('tasks.edit', $task) }}" class="text-blue-600 hover:underline text-sm mr-2">
    Modifier
</a>
    @empty
        <p class="text-gray-500">Aucune tâche pour ce projet.</p>
    @endforelse
</ul>


<h3 class="mt-6 font-semibold">Ajouter une tâche</h3>

<form method="POST" action="{{ route('projects.tasks.store', $project) }}" class="mt-2 space-y-2">
    @csrf
    <div>
        <input type="text" name="title" placeholder="Titre" required class="w-full border p-2 rounded">
    </div>
    <div>
        <textarea name="description" placeholder="Description" class="w-full border p-2 rounded"></textarea>
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ajouter</button>
</form>

</x-app-layout>