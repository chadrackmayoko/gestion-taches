{{-- <x-app-layout>
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
</x-app-layout> --}}

@extends('layouts.appp')
@section('title', 'Project List')
@section('content')
    
<div class="page-body">
          <div class="container-fluid"> 
            <div class="row page-title">
              <div class="col-sm-6">
                <h3>Project List</h3>
              </div>
              <div class="col-sm-6">
                <nav>
                  <ol class="breadcrumb justify-content-sm-end align-items-center">
                    <li class="breadcrumb-item"> <a href="index.html">
                        <svg class="svg-color">
                          <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Project</li>
                    <li class="breadcrumb-item active">Project List</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row project-cards"> 
              <div class="col-md-12 project-list">
                <div class="card">
                  <div class="row">
                    <div class="col-md-6"> 
                      <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true">
                            <svg class="feather">
                              <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#target"></use>
                            </svg>All</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">
                            <svg class="feather">
                              <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#info"></use>
                            </svg>Doing</a></li>
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false">
                            <svg class="feather">
                              <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#check-circle"></use>
                            </svg>Done</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 d-md-block d-none">
                      <div class="form-group mb-0 me-0"> </div><a class="btn btn-primary d-flex align-items-center" href="{{route('projects.create')}}"> 
                        <svg class="feather">
                          <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#plus-square"></use>
                        </svg>Create New Project </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12"> 
                <div class="card">
                  <div class="card-body"> 
                    <div class="tab-content" id="top-tabContent">
                      <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                        <div class="row">
                          @forelse ($projects as $project)
                             <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-success">
                              <h5 class="f-w-500 mb-2">{{$project->name}}</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt="" data-original-title="" title="">
                              </div>
                              <p>{{$project->description}}</p>
                            </div>
                          </div>
                          @empty
                            
                          @endforelse
                         
                          {{-- <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-success"><span class="badge badge-success">Done</span>
                              <h5 class="f-w-500 mb-2">Mobile-Friendly</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="{{asset('assets/images/user/4.jpg')}}" alt="" data-original-title="" title="">
                                <p class="font-light">Envato, australia </p>
                              </div>
                              <p>Error Handling and Feedback: The design incorporates  and feedback mechanisms.</p>
                              <div class="row details">
                                <div class="col-6"> <span>Issues </span></div>
                                <div class="col-6 font-success">40</div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-success">40</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-success">20</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/4.jpg')}}" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+2 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">100%</p><span>Done</span>
                                </div>
                                <div class="progress bg-light-success" style="height: 5px">
                                  <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts   -->
        </div>

@endsection