<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Créer un projet</h2>
    </x-slot>

    <div class="py-4 max-w-2xl mx-auto">
        <form action="{{ route('projects.store') }}" method="POST" class="bg-white p-6 rounded shadow">
            @csrf
            <div>
                <label>Nom du projet</label>
                <input type="text" name="name" class="w-full border p-2" required>
            </div>
            <div class="mt-4">
                <label>Description</label>
                <textarea name="description" class="w-full border p-2"></textarea>
            </div>
            <div class="mt-4">
                <button class="bg-green-500 text-red px-4 py-2">Créer</button>
            </div>
        </form>
    </div>
</x-app-layout>
