<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Mes projets</h2>
    </x-slot>

    <div class="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('projects.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Créer projet</a>

        <div class="mt-4">
            @foreach ($projects as $project)
                <div class="p-4 border mb-2 bg-white shadow">
                    <h3 class="text-lg font-bold">{{ $project->name }}</h3>
                    <p>{{ $project->description }}</p>
                    <a href="{{ route('projects.edit', $project) }}" class="text-blue-500">Modifier</a>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button class="text-red-500" onclick="return confirm('Supprimer ce projet ?')">Supprimer</button>
                         <a href="{{ route('projects.show', $project) }}" class="text-blue-600 hover:underline">
            Voir les tâches →
        </a>
                    </form>
                </div>

            @endforeach
        </div>
    </div>
</x-app-layout>
