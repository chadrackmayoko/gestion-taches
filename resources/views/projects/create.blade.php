{{-- <x-app-layout>
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
 --}}

 @extends('layouts.appp')
 @section('title', 'Project Create')
 @section('content')
      <div class="page-body">
          <div class="container-fluid">
            <div class="row page-title">
              <div class="col-sm-6">
                <h3>Project Create</h3>
              </div>
              <div class="col-sm-6">
                <nav>
                  <ol class="breadcrumb justify-content-sm-end align-items-center">
                    <li class="breadcrumb-item"> <a href="index.html">
                        <svg class="svg-color">
                          <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Project</li>
                    <li class="breadcrumb-item active">Project Create</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-sm-12"> 
                <div class="card">
                  <div class="card-body">
                    <div class="form theme-form">
                      <form method="POST" action="{{route('projects.store')}}">
                        @csrf
                      <div class="row">
                        <div class="col"> 
                          <div class="mb-3">
                            <label>Project Name</label>
                            <input class="form-control" type="text" placeholder="Project name *" name="name" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Description</label>
                            <input class="form-control" type="text" name="description" placeholder="Description Project">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="text-end"><button type="submit" class="btn btn-success me-3" href="#">Add</button>
                            <a class="btn btn-danger" href="#">Cancel</a></div>
                        </div>
                      </div>
                                                    
                            </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts -->
        </div>
 @endsection