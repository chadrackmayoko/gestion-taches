<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Modifier le projet</h2>
    </x-slot>

    <div class="py-4 max-w-2xl mx-auto">
        <form action="{{ route('projects.update', $project) }}" method="POST" class="bg-white p-6 rounded shadow">
            @csrf @method('PUT')
            <div>
                <label>Nom du projet</label>
                <input type="text" name="name" value="{{ $project->name }}" class="w-full border p-2" required>
            </div>
            <div class="mt-4">
                <label>Description</label>
                <textarea name="description" class="w-full border p-2">{{ $project->description }}</textarea>
            </div>
            <div class="mt-4">
                <button class="bg-blue-500 text-dark px-4 py-2">Mettre à jour</button>
            </div>
        </form>
    </div>
</x-app-layout>
