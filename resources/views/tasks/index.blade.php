@extends('layouts.appp')

@section('title', 'task')

@section('content')
    <div class="page-body">
          <div class="container-fluid">
            <div class="row page-title">
              <div class="col-sm-6">
                <h3>Tasks</h3>
              </div>
              <div class="col-sm-6">
                <nav>
                  <ol class="breadcrumb justify-content-sm-end align-items-center">
                    <li class="breadcrumb-item"> <a href="index.html">
                        <svg class="svg-color">
                          <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Apps</li>
                    <li class="breadcrumb-item active">Tasks</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid email-wrap bookmark-wrap">
            <div class="row"> 
              <div class="col-xl-3 box-col-6">
                <div class="md-sidebar email-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="javascript:void(0)">task filter</a>
                  <div class="md-sidebar-aside">
                    <div class="email-left-aside">
                      <div class="card">
                        <div class="card-body">
                          <div class="email-app-sidebar left-bookmark task-sidebar">
                            <div class="d-flex flex-wrap">
                              <div class="media-size-email"><img class="me-3 rounded-circle" src="{{asset('assets/images/user/4.jpg')}}" alt=""></div>
                              <div class="flex-grow-1">
                                <h6 class="f-w-600">MARK JENCO</h6>
                                <p>Markjecno@gmail.com</p>
                              </div>
                            </div>
                            <ul class="nav main-menu custom-scrollbar" role="tablist">
                              <li class="nav-item">
                                <button class="badge-light-primary btn-block btn-mail w-100" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  <svg class="feather me-2">
                                    <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#check-circle"></use>
                                  </svg> New Task
                                </button>
                                <div class="modal fade modal-bookmark" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter une tâche</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form class="form-bookmark needs-validation" method="POST" action="{{ route('tasks.store') }}">
                            @csrf

                            {{-- Titre --}}
                            <div class="mb-3">
                                <label for="task-title">Titre de la tâche</label>
                                <input type="text" class="form-control" id="task-title" name="title" required>
                            </div>

                            {{-- Description --}}
                            <div class="mb-3">
                                <label for="task-desc">Description</label>
                                <textarea class="form-control" id="task-desc" name="description" rows="3" required></textarea>
                            </div>

                            {{-- Assigné à --}}
                            <div class="mb-3">
                                <label for="assigned-to">Assigner à</label>
                                <select class="form-control" id="assigned-to" name="assigned_to" required>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                                </select>
                            </div>

                            {{-- Statut --}}
                            <div class="mb-3">
                                <label for="completed">Statut</label>
                                <select class="form-control" id="completed" name="completed" required>
                                <option value="0" selected>Non complétée</option>
                                <option value="1">Complétée</option>
                                </select>
                            </div>

                            {{-- Project ID (si besoin en champ caché) --}}
                            <label for="project_id">Projet :</label>
                            <select name="project_id" id="project_id" required>
                                <option value="">-- Choisir un projet --</option>
                                @foreach(Auth::user()->projects as $project)
                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                @endforeach
                            </select>

                            <div class="d-flex justify-content-end">
                                <button class="btn btn-secondary me-2" type="submit">Enregistrer</button>
                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                            </div>
                            </form>
                        </div>

                        </div>
                    </div>
</div>
                              </li>
                              <li class="nav-item"><span class="main-title"> Views</span></li>
                              <li><a class="show" id="pills-todaytask-tab" data-bs-toggle="pill" href="#pills-todaytask" role="tab" aria-controls="pills-todaytask" aria-selected="false"><span class="title"> Today's Tasks</span></a></li>
                              <li><a class="show" id="pills-delayed-tab" data-bs-toggle="pill" href="#pills-delayed" role="tab" aria-controls="pills-delayed" aria-selected="false"><span class="title"> Delayed Tasks</span></a></li>
                              <li><a class="show" id="pills-upcoming-tab" data-bs-toggle="pill" href="#pills-upcoming" role="tab" aria-controls="pills-upcoming" aria-selected="false"><span class="title">Upcoming Tasks</span></a></li>
                              <li><a class="show" id="pills-weekly-tab" data-bs-toggle="pill" href="#pills-weekly" role="tab" aria-controls="pills-weekly" aria-selected="false"><span class="title">This week tasks</span></a></li>
                              <li><a class="show" id="pills-monthly-tab" data-bs-toggle="pill" href="#pills-monthly" role="tab" aria-controls="pills-monthly" aria-selected="false"><span class="title">This month tasks</span></a></li>
                              <li><a class="show" id="pills-tasks-tab" data-bs-toggle="pill" href="#pills-tasks" role="tab" aria-controls="pills-tasks" aria-selected="false"><span class="title">My tasks</span></a></li>
                              <li>
                                <hr>
                              </li>
                              </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 col-md-12 box-col-12">
                <div class="email-right-aside bookmark-tabcontent">
                  <div class="card email-body">
                    <div class="ps-0">
                      <div class="tab-content">
                        
                        <div class="fade tab-pane" id="pills-todaytask" role="tabpanel" aria-labelledby="pills-todaytask-tab">
                          <div class="card mb-0">
                            <div class="card-header d-flex pb-0">
                              <h4 class="mb-0">Today's Tasks</h4><a class="font-primary" href="javascript:void(0)">
                                <svg class="feather me-2">
                                  <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#printer"></use>
                                </svg>Print</a>
                            </div>
                            <div class="card-body">
                              <div class="details-bookmark text-center">
                                <div class="row" id="favouriteData"></div>
                                <div class="no-favourite"><span>No task due today.</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="fade tab-pane" id="pills-delayed" role="tabpanel" aria-labelledby="pills-delayed-tab">
                          <div class="card mb-0">
                            <div class="card-header d-flex pb-0">
                              <h4 class="mb-0">Delayed Tasks</h4><a class="font-primary" href="javascript:void(0)">
                                <svg class="feather me-2">
                                  <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#printer"></use>
                                </svg>Print</a>
                            </div>
                            <div class="card-body">
                              <div class="details-bookmark text-center"><span>No tasks found.</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="fade tab-pane" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab">
                          <div class="card mb-0">
                            <div class="card-header d-flex pb-0">
                              <h4 class="mb-0">Upcoming Tasks</h4><a class="font-primary" href="javascript:void(0)">
                                <svg class="feather me-2">
                                  <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#printer"></use>
                                </svg>Print</a>
                            </div>
                            <div class="card-body">
                              <div class="details-bookmark text-center"><span>No tasks found.</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="fade tab-pane" id="pills-weekly" role="tabpanel" aria-labelledby="pills-weekly-tab">
                          <div class="card mb-0">
                            <div class="card-header d-flex pb-0">
                              <h4 class="mb-0">This Week Tasks</h4><a class="font-primary" href="javascript:void(0)">
                                <svg class="feather me-2">
                                  <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#printer"></use>
                                </svg>Print</a>
                            </div>
                            <div class="card-body">
                              <div class="details-bookmark text-center"><span>No tasks found.</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="fade tab-pane" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                          <div class="card mb-0">
                            <div class="card-header d-flex pb-0">
                              <h4 class="mb-0">This Month Tasks</h4><a class="font-primary" href="javascript:void(0)">
                                <svg class="feather me-2">
                                  <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#printer"></use>
                                </svg>Print</a>
                            </div>
                            <div class="card-body">
                              <div class="details-bookmark text-center"><span>No tasks found.</span></div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="fade tab-pane active show" id="pills-tasks" role="tabpanel" aria-labelledby="pills-tasks-tab">
                          <div class="card mb-0">
                            <div class="card-header d-flex pb-0">
                              <h4 class="mb-0">My tasks</h4><a class="font-primary" href="javascript:void(0)">
                                <svg class="feather me-2">
                                  <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#printer"></use>
                                </svg>Print</a>
                            </div>
                            <div class="card-body p-0">
                              <div class="taskadd">
                                <div class="table-responsive theme-scrollbar">
                                  <table class="table">
                                    @forelse ($tasks as $task)
                                         <tr>
                                      <td>
                                        <h6 class="task_title_0 f-w-600">Task name</h6>
                                        <p class="project_name_0">{{$task->title}}</p>
                                      </td>
                                      <td>
                                        <p class="task_desc_0">{{$task->description}}</p>
                                      </td>
                                      <td><a class="me-2" href="javascript:void(0)">
                                          <svg class="feather">
                                            <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#link"></use>
                                          </svg></a><a href="javascript:void(0)">
                                          <svg class="feather">
                                            <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#more-horizontal"></use>
                                          </svg></a></td>
                                      <td><a href="javascript:void(0)">
                                          <svg class="feather">
                                            <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#trash-2"></use>
                                          </svg></a></td>
                                    </tr>
                                    @empty
                                        
                                    @endforelse
                                   
                                 
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid ends-->
        </div>
@endsection