<x-app-layout>
    <h1 class="text-xl font-bold mb-4">Modifier la tâche</h1>

    <form method="POST" action="{{ route('tasks.update', $task) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block">Titre</label>
            <input type="text" name="title" value="{{ old('title', $task->title) }}" required class="border p-2 w-full rounded">
        </div>

        <div>
            <label class="block">Description</label>
            <textarea name="description" class="border p-2 w-full rounded">{{ old('description', $task->description) }}</textarea>
        </div>

        <div>
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


        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Enregistrer</button>
    </form>
</x-app-layout>