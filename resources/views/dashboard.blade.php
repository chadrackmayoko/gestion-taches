{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.appp')
@section('title', 'Dashbioard')
@section('content')
    <div class="page-body">
          <div class="container-fluid">
            <div class="row page-title">
              <div class="col-sm-6">
                <h3>Default dashboard</h3>
              </div>
              <div class="col-sm-6">
                <nav>
                  <ol class="breadcrumb justify-content-sm-end align-items-center">
                    <li class="breadcrumb-item"> <a href="index.html">
                        <svg class="svg-color">
                          <use href="{{asset('assets/svg/iconly-spritesvg')}}#Home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Default</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <div class="container-fluid default-dashboard">
            <div class="row">
              <div class="col-sm-6 col-xl-4">
                <div class="card profile-greeting card-hover">
                  <div class="card-body">
                    <div class="img-overlay">
                      <h1>Good day, Lena Miller</h1>
                      <p>Welcome to the Edmin family! We are delighted that you have visited our dashboard.</p><a class="btn btn-primary" href="pricing.html">Go Premium</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card project-card">
                  <div class="card-header">
                    <h4>Project Overview</h4>
                    <div class="dropdown icon-dropdown">
                      <button class="btn dropdown-toggle" id="userdropdown7" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown7"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <h4>56<span class="ms-1">Project</span></h4>
                    <div class="row align-items-center">
                      <div class="col-5 custom-width">
                        <div class="progress progress-striped-primary">
                          <div class="progress-bar" style="width: 55%" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-striped-secondary">
                          <div class="progress-bar" style="width: 60%" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-striped-tertiary">
                          <div class="progress-bar" style="width: 45%" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col-7 d-sm-none d-md-block">
                        <ul class="overview-details"> 
                          <li class="d-flex align-items-center">
                            <div class="circle-dot-primary"><span></span></div>
                            <h5>15<span class="font-light ms-1">Signed</span></h5>
                          </li>
                          <li class="d-flex align-items-center">
                            <div class="circle-dot-secondary"><span></span></div>
                            <h5>62<span class="font-light ms-1">Manager Review</span></h5>
                          </li>
                          <li class="d-flex align-items-center">
                            <div class="circle-dot-tertiary"><span></span></div>
                            <h5>20<span class="font-light ms-1">Client Review</span></h5>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <button class="view-btn btn bg-light d-block w-100 position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">View project
                      <svg class="feather">
                        <use href="{{asset('assets/svg/feather-icons/dist/feather-spritesvg')}}#chevron-down"></use>
                      </svg>
                      <ul class="dropdown-menu dropdown-block">
                        <li><a class="dropdown-item" href="#">Project</a></li>
                        <li><a class="dropdown-item" href="#">Ecommerce</a></li>
                        <li><a class="dropdown-item" href="#">Crypto</a></li>
                      </ul>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-2">
                <div class="row">
                  <div class="col-6 col-sm-12">
                    <div class="card client-card card-hover">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-6 custom-width-1">
                            <h3 class="font-primary">457</h3>
                            <h5 class="f-w-600">Total Clients</h5>
                          </div>
                          <div class="col-6 custom-width-2">
                            <div class="client" id="client"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-12">
                    <div class="card client-card card-hover">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-6 custom-width-1">
                            <h3 class="font-secondary">541</h3>
                            <h5 class="f-w-600">New Project</h5>
                          </div>
                          <div class="col-6 custom-width-2">
                            <div class="project" id="project"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card investing-card">
                  <div class="card-header pb-0">
                    <h4>Investing</h4>
                    <div class="dropdown icon-dropdown">
                      <button class="btn dropdown-toggle" id="userdropdown3" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown3"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="investing" id="investing"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-6">
                <!-- Invoice menu-->
                <div class="card invoice-card">
                  <div class="card-header pb-0">
                    <h4>All Invoices</h4>
                    <div class="dropdown icon-dropdown">
                      <button class="btn dropdown-toggle" id="userdropdown4" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown4"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                    </div>
                  </div>
                  <div class="card-body invoice-table checkbox-checked">
                    <div class="table-responsive"> 
                      <table class="table" id="all-invoice">
                        <thead> 
                          <tr> 
                            <th class="form-check">
                              <input class="form-check-input" type="checkbox">
                            </th>
                            <th>Invoice Id</th>
                            <th>Client Name</th>
                            <th>Project</th>
                            <th>Created Date</th>
                            <th>Amount </th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody> 
                                         <tr>
                                            <td>
                                              <input class="form-check-input" type="checkbox">
                                            </td>
                                            <td>#IH63390</td>
                                            <td>
                                              <div class="d-flex align-items-center gap-2">
                                                <div class="flex-shrink-0"><img class="b-r-10" src="{{asset('assets/images/avatar/10.jpg')}}" alt=""></div>
                                                <div class="flex-grow-1"><a href="user-profile.html">
                                                    <h6 class="f-w-500">Elle Amberson</h6></a><span class="font-light f-w-400 f-13">Elle34@gmail.com</span></div>
                                              </div>
                                            </td>
                                            <td>Website</td>
                                            <td>10-10-2024</td>
                                            <td>$5411.55</td>
                                            <td> 
                                              <button class="btn edge-btn f-13 w-100 btn-light-primary">Done</button>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <input class="form-check-input" type="checkbox">
                                            </td>
                                            <td>#F749U8</td>
                                            <td>
                                              <div class="d-flex align-items-center gap-2">
                                                <div class="flex-shrink-0"><img class="b-r-10" src="{{asset('assets/images/avatar/11.jpg')}}" alt=""></div>
                                                <div class="flex-grow-1"><a href="user-profile.html">
                                                    <h6 class="f-w-500">Anna Catmire</h6></a><span class="font-light f-w-400 f-13">Anna12@gmail.com</span></div>
                                              </div>
                                            </td>
                                            <td>Mobile App</td>
                                            <td>15-09-2024</td>
                                            <td>$6589.36</td>
                                            <td> 
                                              <button class="btn edge-btn f-13 w-100 btn-light-tertiary">Pending</button>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <input class="form-check-input" type="checkbox">
                                            </td>
                                            <td>#RT5094</td>
                                            <td>
                                              <div class="d-flex align-items-center gap-2">
                                                <div class="flex-shrink-0"><img class="b-r-10" src="{{asset('assets/images/avatar/1.jpg')}}" alt=""></div>
                                                <div class="flex-grow-1"><a href="user-profile.html">
                                                    <h6 class="f-w-500">Laura Dagson</h6></a><span class="font-light f-w-400 f-13">Laura@gmail.com</span></div>
                                              </div>
                                            </td>
                                            <td>Wordpress</td>
                                            <td>23-05-2024</td>
                                            <td>$9655.16</td>
                                            <td> 
                                              <button class="btn edge-btn f-13 w-100 btn-light-primary">Done</button>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <input class="form-check-input" type="checkbox">
                                            </td>
                                            <td>#PZ7384</td>
                                            <td>
                                              <div class="d-flex align-items-center gap-2">
                                                <div class="flex-shrink-0"><img class="b-r-10" src="{{asset('assets/images/avatar/3.jpg')}}" alt=""></div>
                                                <div class="flex-grow-1"><a href="user-profile.html">
                                                    <h6 class="f-w-500">Rachel Green</h6></a><span class="font-light f-w-400 f-13">Rache87@gmail.com</span></div>
                                              </div>
                                            </td>
                                            <td>Service</td>
                                            <td>15-02-2024</td>
                                            <td>$5984.62</td>
                                            <td> 
                                              <button class="btn edge-btn f-13 w-100 btn-light-danger">Overdue</button>
                                            </td>
                                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3">
                <!-- invest menu-->
                <div class="card invest-card">
                  <div class="card-header">
                    <h4>Total Investment</h4>
                    <div class="dropdown icon-dropdown">
                      <button class="btn dropdown-toggle" id="userdropdown2" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown2"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="chart-invest" id="investment"></div>
                    <ul> 
                                      <li> 
                                        <h5>Total</h5>
                                        <h6>$ 34,4562</h6>
                                      </li>
                                      <li> 
                                        <h5>Monthly</h5>
                                        <h6>$ 12,463</h6>
                                      </li>
                                      <li> 
                                        <h5>Daily</h5>
                                        <h6>$ 5000</h6>
                                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3">
                <!-- Task menu-->
                <div class="card task-card">
                  <div class="card-header pb-0">
                    <h4>Task list</h4>
                    <div class="dropdown icon-dropdown">
                      <button class="btn dropdown-toggle" id="userdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                    </div>
                  </div>
                  <div class="card-body filled-checkbox">
                    <ul> 
                                      <li class="d-flex line-primary">
                                        <div class="flex-shrink-0">
                                          <div class="form-check checkbox checkbox-solid-primary">
                                            <input class="form-check-input" type="checkbox" id="solid5">
                                            <label class="form-check-label" for="solid5"></label>
                                          </div>
                                        </div>
                                        <div class="flex-grow-1"> <a href="task.html">
                                            <h5 class="f-w-500">Task With dropdown menu</h5></a>
                                          <h6>By Johnny</h6>
                                        </div>
                                        <div class="dropdown task-dropdown">
                                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="dorpdown44">
                                            <svg class="feather">
                                              <use href="{{asset('assets/svg/feather-icons/dist/feather-spritesvg')}}#more-horizontal"></use>
                                            </svg>
                                          </button>
                                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dorpdown44"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                        </div>
                                      </li>
                                      <li class="d-flex line-secondary">
                                        <div class="flex-shrink-0">
                                          <div class="form-check checkbox checkbox-solid-primary">
                                            <input class="form-check-input" type="checkbox" id="solid4">
                                            <label class="form-check-label" for="solid4"></label>
                                          </div>
                                        </div>
                                        <div class="flex-grow-1"> <a href="task.html">
                                            <h5 class="f-w-500">Badge on the right task</h5></a>
                                          <h6>This task has show on hover actions!</h6>
                                        </div>
                                        <div class="dropdown task-dropdown">
                                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="dorpdown55">
                                            <svg class="feather">
                                              <use href="{{asset('assets/svg/feather-icons/dist/feather-spritesvg')}}#more-horizontal"></use>
                                            </svg>
                                          </button>
                                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dorpdown55"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                        </div>
                                      </li>
                                      <li class="d-flex line-tertiary">
                                        <div class="flex-shrink-0">
                                          <div class="form-check checkbox checkbox-solid-primary">
                                            <input class="form-check-input" type="checkbox" checked id="solid3">
                                            <label class="form-check-label" for="solid3"></label>
                                          </div>
                                        </div>
                                        <div class="flex-grow-1"> <a href="task.html">
                                            <h5 class="f-w-500">Wash the car</h5></a>
                                          <h6>Written by bob</h6>
                                        </div>
                                        <div class="dropdown task-dropdown">
                                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="dorpdown66">
                                            <svg class="feather">
                                              <use href="{{asset('assets/svg/feather-icons/dist/feather-spritesvg')}}#more-horizontal"></use>
                                            </svg>
                                          </button>
                                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dorpdown66"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                        </div>
                                      </li>
                                      <li class="d-flex line-primary">
                                        <div class="flex-shrink-0">
                                          <div class="form-check checkbox checkbox-solid-primary">
                                            <input class="form-check-input" type="checkbox" id="solid2">
                                            <label class="form-check-label" for="solid2"></label>
                                          </div>
                                        </div>
                                        <div class="flex-grow-1"> <a href="task.html">
                                            <h5 class="f-w-500">Go grocery shopping</h5></a>
                                          <h6>A short description for this todo item</h6>
                                        </div>
                                        <div class="dropdown task-dropdown">
                                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="dorpdown77">
                                            <svg class="feather">
                                              <use href="{{asset('assets/svg/feather-icons/dist/feather-spritesvg')}}#more-horizontal"></use>
                                            </svg>
                                          </button>
                                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dorpdown77"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                        </div>
                                      </li>
                                      <li class="d-flex line-secondary">
                                        <div class="flex-shrink-0">
                                          <div class="form-check checkbox checkbox-solid-primary">
                                            <input class="form-check-input" type="checkbox" id="solid1">
                                            <label class="form-check-label" for="solid1"></label>
                                          </div>
                                        </div>
                                        <div class="flex-grow-1"> <a href="task.html">
                                            <h5 class="f-w-500">Development Task</h5></a>
                                          <h6>Finish react todo list app</h6>
                                        </div>
                                        <div class="dropdown task-dropdown">
                                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdown88">
                                            <svg class="feather">
                                              <use href="{{asset('assets/svg/feather-icons/dist/feather-spritesvg')}}#more-horizontal"></use>
                                            </svg>
                                          </button>
                                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown88"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                        </div>
                                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-xl-7">
                <div class="card">
                  <div class="card-header pb-0">
                    <h4>Monthly Overview</h4>
                    <div class="dropdown icon-dropdown">
                      <button class="btn dropdown-toggle" id="userdropdown6" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown6"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                    </div>
                  </div>
                  <div class="card-body"> 
                    <div class="monthly-overview" id="monthly-overview"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-5">
                <div class="card summary-card">
                  <div class="card-header pb-0">
                    <h4>Task summary</h4>
                    <div class="dropdown icon-dropdown">
                      <button class="btn dropdown-toggle" id="userdropdown01" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown01"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                    </div>
                  </div>
                  <div class="card-body"> 
                    <div class="row"> 
                      <div class="col-sm-8 custom-width-1">
                        <div class="project-cost">
                          <h5 class="font-light">
                            <svg class="svg-w-20 stroke-light me-2">
                              <use href="{{asset('assets/svg/iconly-spritesvg')}}#Chart"></use>
                            </svg>Estimated project cost
                          </h5>
                          <ul class="d-flex">
                            <li class="card-hover">
                              <div class="d-flex bg-light-primary flex-column">
                                <div class="flex-shrink-0 border-primary">
                                  <svg class="svg-w-24 stroke-primary">
                                    <use href="{{asset('assets/svg/iconly-spritesvg')}}#Pie"></use>
                                  </svg>
                                </div>
                                <div class="flex-grow-1">
                                  <h6 class="f-w-500">Project</h6>
                                  <h4 class="f-w-700">32</h4>
                                </div>
                              </div>
                            </li>
                            <li class="card-hover">
                              <div class="d-flex bg-light-secondary flex-column">
                                <div class="flex-shrink-0 border-secondary">
                                  <svg class="svg-w-24 stroke-secondary">
                                    <use href="{{asset('assets/svg/iconly-spritesvg')}}#Category"></use>
                                  </svg>
                                </div>
                                <div class="flex-grow-1">
                                  <h6 class="f-w-500">Assigned</h6>
                                  <h4 class="f-w-700">78</h4>
                                </div>
                              </div>
                            </li>
                            <li class="card-hover">
                              <div class="d-flex bg-light-tertiary flex-column">
                                <div class="flex-shrink-0 border-tertiary">
                                  <svg class="svg-w-24 stroke-tertiary">
                                    <use href="{{asset('assets/svg/iconly-spritesvg')}}#Document"></use>
                                  </svg>
                                </div>
                                <div class="flex-grow-1">
                                  <h6 class="f-w-500">Completed</h6>
                                  <h4 class="f-w-700">54</h4>
                                </div>
                              </div>
                            </li>
                          </ul>
                          <div class="task-bottom d-flex align-items-center gap-2">
                            <h5 class="font-light">Completion rate in terms of time:</h5>
                            <h2 class="font-primary">83%</h2><span class="badge bg-light f-14">
                              <svg class="svg-w-20 stroke-dark me-1">
                                <use href="{{asset('assets/svg/iconly-spritesvg')}}#right-3"></use>
                              </svg>3.4%</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4 custom-width-2">
                        <h5 class="font-light"> 
                          <svg class="svg-w-20 stroke-light me-2">
                            <use href="{{asset('assets/svg/iconly-spritesvg')}}#User"></use>
                          </svg>Our crew
                        </h5>
                        <div class="team-member"> 
                          <h5 class="font-light mb-2">Team Members</h5>
                          <div class="customers d-inline-block avatar-group">
                            <ul>
                                              <li class="d-inline-block"><img class="img-40 b-r-8" src="{{asset('assets/images/user/13.jpg')}}" alt="#"></li>
                                              <li class="d-inline-block"><img class="img-40 b-r-8" src="{{asset('assets/images/user/6.jpg')}}" alt="#"></li>
                                              <li class="d-inline-block"><img class="img-40 b-r-8" src="{{asset('assets/images/user/3.jpg')}}" alt="#"></li>
                              <li class="d-inline-block"><span class="b-r-10">+4</span></li>
                            </ul>
                          </div>
                          <div class="d-flex bg-light">
                            <div class="flex-grow-1"> 
                              <h6 class="f-16 font-light">Hours</h6>
                              <h4>67</h4>
                            </div>
                            <div class="team-chart" id="team-chart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <!-- Bookmark menu-->
                <div class="card"> 
                  <div class="card-header pb-0">
                    <h4>Courses Highlighted</h4>
                    <div class="dropdown icon-dropdown">
                      <button class="btn dropdown-toggle" id="userdropdown1" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown1"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                    </div>
                  </div>
                  <div class="card-body pt-0 course-table">
                    <div class="table-responsive"> 
                      <table class="table">
                        <thead> 
                          <tr> 
                            <th>Course name</th>
                            <th>Price</th>
                            <th>Type</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody> 
                                          <tr>
                                            <td>
                                              <div class="d-flex align-items-center gap-2">
                                                <div class="flex-shrink-0"><img src="{{asset('assets/images/dashboard1/invest/01.jpg')}}" alt=""></div>
                                                <div class="flex-grow-1"> <a href="user-profile.html">
                                                    <h6 class="f-w-500">Civil engineering</h6></a><span class="font-light f-w-400 f-13">20h 10m</span></div>
                                              </div>
                                            </td>
                                            <td>$150</td>
                                            <td>UX/UI Design</td>
                                            <td> 
                                              <button class="btn edge-btn f-13 w-100 btn-light-primary">Done</button>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="d-flex align-items-center gap-2">
                                                <div class="flex-shrink-0"><img src="{{asset('assets/images/dashboard1/invest/02.jpg')}}" alt=""></div>
                                                <div class="flex-grow-1"> <a href="user-profile.html">
                                                    <h6 class="f-w-500">Web development</h6></a><span class="font-light f-w-400 f-13">12h 05m</span></div>
                                              </div>
                                            </td>
                                            <td>$156</td>
                                            <td>Illustration</td>
                                            <td> 
                                              <button class="btn edge-btn f-13 w-100 btn-light-tertiary">Pending</button>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="d-flex align-items-center gap-2">
                                                <div class="flex-shrink-0"><img src="{{asset('assets/images/dashboard1/invest/03.jpg')}}" alt=""></div>
                                                <div class="flex-grow-1"> <a href="user-profile.html">
                                                    <h6 class="f-w-500">Computer science</h6></a><span class="font-light f-w-400 f-13">06h 15m</span></div>
                                              </div>
                                            </td>
                                            <td>$695</td>
                                            <td>UX/UI Design</td>
                                            <td> 
                                              <button class="btn edge-btn f-13 w-100 btn-light-primary">Done</button>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="d-flex align-items-center gap-2">
                                                <div class="flex-shrink-0"><img src="{{asset('assets/images/dashboard1/invest/04.jpg')}}" alt=""></div>
                                                <div class="flex-grow-1"> <a href="user-profile.html">
                                                    <h6 class="f-w-500">Web designer</h6></a><span class="font-light f-w-400 f-13">04h 30m</span></div>
                                              </div>
                                            </td>
                                            <td>$364</td>
                                            <td>Leadership</td>
                                            <td> 
                                              <button class="btn edge-btn f-13 w-100 btn-light-tertiary">Done</button>
                                            </td>
                                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 order-1 order-xl-0">
                <!-- Schedule menu-->
                <div class="card schedule-card">
                  <div class="card-header pb-0">
                    <h4 class="mb-2">Schedule Time</h4>
                    <div class="dropdown icon-dropdown">
                      <button class="btn dropdown-toggle" id="userdropdown8" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown8"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="d-flex justify-content-between mb-3">
                      <h5>Aug 2024</h5>
                      <div class="d-flex align-items-center gap-2 monthly-time">
                        <h5 class="font-light">Month </h5>
                        <h5 class="font-light">Year</h5>
                      </div>
                    </div>
                    <ul class="schedule-wrapper nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="mon-tab" data-bs-toggle="tab" href="#mon" role="tab" aria-controls="mon" aria-selected="false"><span>Mo </span>
                          <h6>01</h6></a></li>
                      <li class="nav-item"><a class="nav-link" id="tue-tab" data-bs-toggle="tab" href="#tue" role="tab" aria-controls="tue" aria-selected="true"><span>Tu </span>
                          <h6>02</h6></a></li>
                      <li class="nav-item"><a class="nav-link" id="wed-tab" data-bs-toggle="tab" href="#wed" role="tab" aria-controls="wed" aria-selected="false"><span>We </span>
                          <h6>03</h6></a></li>
                      <li class="nav-item"><a class="nav-link" id="thu-tab" data-bs-toggle="tab" href="#thu" role="tab" aria-controls="thu" aria-selected="false"><span>Th </span>
                          <h6>04</h6></a></li>
                      <li class="nav-item"><a class="nav-link" id="frd-tab" data-bs-toggle="tab" href="#frd" role="tab" aria-controls="frd" aria-selected="true"><span>Fr </span>
                          <h6>05</h6></a></li>
                      <li class="nav-item"><a class="nav-link font-primary" id="sat-tab" data-bs-toggle="tab" href="#sat" role="tab" aria-controls="sat" aria-selected="false"><span>Sa </span>
                          <h6>06</h6></a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade active show" id="mon" role="tabpanel" aria-labelledby="mon-tab">
                        <ul class="activity-update">
                                          <li class="d-flex align-items-center b-l-primary">
                                            <div class="flex-grow-1"> <span>10:00 to 10:20 am</span>
                                              <h5>Mobile Application Release</h5>
                                              <h6>Hannah</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/11.jpg')}}" alt=""></div>
                                          </li>
                                          <li class="d-flex align-items-center b-l-secondary">
                                            <div class="flex-grow-1"> <span>12:00 to 01:45 am</span>
                                              <h5>General Meeting</h5>
                                              <h6>Madeleine Lisa</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/1.jpg')}}" alt=""></div>
                                          </li>
                                          <li class="d-flex align-items-center b-l-tertiary">
                                            <div class="flex-grow-1"> <span>06:00 to 11:30 am</span>
                                              <h5>Client Visit</h5>
                                              <h6>Hemmings Edmunds</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/3.jpg')}}" alt=""></div>
                                          </li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="tue" role="tabpanel" aria-labelledby="tue-tab">
                        <ul class="activity-update">
                                          <li class="d-flex align-items-center b-l-info">
                                            <div class="flex-grow-1"> <span>12:00 to 02:20 am</span>
                                              <h5>What`s the project report update?</h5>
                                              <h6>Loie Fenter</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/2.jpg')}}" alt=""></div>
                                          </li>
                                          <li class="d-flex align-items-center b-l-success">
                                            <div class="flex-grow-1"> <span>04:00 to 08:20 am</span>
                                              <h5>James created changelog page</h5>
                                              <h6>Anna Catmire</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/4.jpg')}}" alt=""></div>
                                          </li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="wed" role="tabpanel" aria-labelledby="wed-tab">
                        <ul class="activity-update">
                                          <li class="d-flex align-items-center b-l-danger">
                                            <div class="flex-grow-1"> <span>09:00 to 02:20 am</span>
                                              <h5>Dima phizeg edited ACME 2.4</h5>
                                              <h6>Susan Connor</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/5.jpg')}}" alt=""></div>
                                          </li>
                                          <li class="d-flex align-items-center b-l-dark">
                                            <div class="flex-grow-1"> <span>10:00 to 01:45 am</span>
                                              <h5>Complete the medical ui system idea.</h5>
                                              <h6>Jeff Johnson</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/6.jpg')}}" alt=""></div>
                                          </li>
                                          <li class="d-flex align-items-center b-l-warning">
                                            <div class="flex-grow-1"> <span>04:00 to 10:30 am</span>
                                              <h5>Make a new landing page.</h5>
                                              <h6>Roger Lum</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/9.jpg')}}" alt=""></div>
                                          </li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="thu" role="tabpanel" aria-labelledby="thu-tab">
                        <ul class="activity-update">
                                          <li class="d-flex align-items-center b-l-primary">
                                            <div class="flex-grow-1"> <span>10:00 to 10:20 am</span>
                                              <h5>Mobile Application Release</h5>
                                              <h6>Hannah</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/11.jpg')}}" alt=""></div>
                                          </li>
                                          <li class="d-flex align-items-center b-l-secondary">
                                            <div class="flex-grow-1"> <span>12:00 to 01:45 am</span>
                                              <h5>General Meeting</h5>
                                              <h6>Madeleine Lisa</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/1.jpg')}}" alt=""></div>
                                          </li>
                                          <li class="d-flex align-items-center b-l-tertiary">
                                            <div class="flex-grow-1"> <span>06:00 to 11:30 am</span>
                                              <h5>Client Visit</h5>
                                              <h6>Hemmings Edmunds</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/3.jpg')}}" alt=""></div>
                                          </li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="frd" role="tabpanel" aria-labelledby="frd-tab">
                        <ul class="activity-update">
                                          <li class="d-flex align-items-center b-l-info">
                                            <div class="flex-grow-1"> <span>12:00 to 02:20 am</span>
                                              <h5>What`s the project report update?</h5>
                                              <h6>Loie Fenter</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/2.jpg')}}" alt=""></div>
                                          </li>
                                          <li class="d-flex align-items-center b-l-success">
                                            <div class="flex-grow-1"> <span>04:00 to 08:20 am</span>
                                              <h5>James created changelog page</h5>
                                              <h6>Anna Catmire</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/4.jpg')}}" alt=""></div>
                                          </li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="sat" role="tabpanel" aria-labelledby="sat-tab">
                        <ul class="activity-update">
                                          <li class="d-flex align-items-center b-l-danger">
                                            <div class="flex-grow-1"> <span>09:00 to 02:20 am</span>
                                              <h5>Dima phizeg edited ACME 2.4</h5>
                                              <h6>Susan Connor</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/5.jpg')}}" alt=""></div>
                                          </li>
                                          <li class="d-flex align-items-center b-l-dark">
                                            <div class="flex-grow-1"> <span>10:00 to 01:45 am</span>
                                              <h5>Complete the medical ui system idea.</h5>
                                              <h6>Jeff Johnson</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/6.jpg')}}" alt=""></div>
                                          </li>
                                          <li class="d-flex align-items-center b-l-warning">
                                            <div class="flex-grow-1"> <span>04:00 to 10:30 am</span>
                                              <h5>Make a new landing page.</h5>
                                              <h6>Roger Lum</h6>
                                            </div>
                                            <div class="flex-shrink-0"> <img class="img-40 b-r-10" src="{{asset('assets/images/avatar/9.jpg')}}" alt=""></div>
                                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-2 custom-margin">
                <div class="row">
                  <div class="col-6 col-xl-12 col-lg-5">
                    <div class="card visit-card card-hover">
                      <div class="card-header pb-0">
                        <h4>Total visit</h4>
                        <div class="dropdown icon-dropdown">
                          <button class="btn dropdown-toggle" id="userdropdown03" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown03"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                        </div>
                      </div>
                      <div class="card-body pb-0">
                        <ul class="d-flex justify-content-xl-between justify-content-evenly">
                          <li> 
                            <div class="badge bg-light-primary b-r-0">
                              <svg class="svg-menu me-1">
                                <use href="{{asset('assets/svg/iconly-spritesvg')}}#mobile"></use>
                              </svg>Mobile 
                            </div>
                            <div class="d-block text-center mt-2">
                              <h6 class="f-w-500">68,9%</h6><span class="font-light f-13">20,600</span>
                            </div>
                          </li>
                          <li> 
                            <div class="badge bg-light-secondary b-r-0">
                              <svg class="svg-menu me-1">
                                <use href="{{asset('assets/svg/iconly-spritesvg')}}#desktop"></use>
                              </svg>Desktop
                            </div>
                            <div class="d-block text-center mt-2">
                              <h6 class="f-w-500">13,4%</h6><span class="font-light f-13">02,450</span>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="visit-chart"></div>
                    </div>
                  </div>
                  <div class="col-6 col-xl-12 col-lg-7">
                    <div class="card visit-card card-hover">
                      <div class="card-header pb-0">
                        <h4>Total Earning</h4>
                        <div class="dropdown icon-dropdown">
                          <button class="btn dropdown-toggle" id="userdropdown02" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown02"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                        </div>
                      </div>
                      <div class="card-body py-0 total-earn">
                        <h4 class="font-primary mt-1">Rp 30.000</h4>
                        <p class="f-13 font-light">Compared to Rp 23.000 Yesterday</p>
                        <div class="earn-chart" id="earn-chart"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 custom-margin">
                <div class="card notification-card">
                  <div class="card-header">
                    <h4>Notifications</h4>
                    <div class="dropdown icon-dropdown">
                      <button class="btn dropdown-toggle" id="userdropdown5" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown5"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                    </div>
                  </div>
                  <div class="card-body p-0"> 
                    <div class="d-flex bg-light gap-3">
                      <div class="flex-shrink-0"> <img class="img-40 b-r-15" src="{{asset('assets/images/avatar/10.jpg')}}" alt="Use1"></div>
                      <div class="flex-grow-1"><a href="user-profile.html">
                          <h6>Polly edited  Contact page</h6></a><span>18 mins ago . Craftwork design</span></div>
                      <div class="circle-dot-primary"><span></span></div>
                    </div>
                    <div class="d-flex gap-3">
                      <div class="flex-shrink-0"> <span class="bg-secondary">KP</span></div>
                      <div class="flex-grow-1"><a href="user-profile.html">
                          <h6>James left a comment on ACME 2.1</h6></a><span>3 hours ago . ACME</span></div>
                    </div>
                    <div class="d-flex gap-3">
                      <div class="flex-shrink-0"> <img class="img-40 b-r-15" src="{{asset('assets/images/avatar/4.jpg')}}" alt="Use2"></div>
                      <div class="flex-grow-1"><a href="user-profile.html">
                          <h6>Mary shared the file isometric 2.0</h6></a><span>4 hours ago . Craftwork Design</span>
                        <div class="d-flex gap-2 p-0 mt-2">
                          <button class="btn btn-outline-dark">Decline</button>
                          <button class="btn btn-primary">Accept</button>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex gap-3 bg-light">
                      <div class="flex-shrink-0"> <span class="bg-tertiary">HS</span></div>
                      <div class="flex-grow-1"><a href="user-profile.html">
                          <h6>Dima phizeg edited ACME 2.4</h6></a><span>3 hours ago . ACME</span></div>
                      <div class="circle-dot-primary"><span></span></div>
                    </div>
                    <div class="d-flex gap-3">
                      <div class="flex-shrink-0"> <img class="img-40 b-r-15" src="{{asset('assets/images/avatar/12.jpg')}}" alt="Use3"></div>
                      <div class="flex-grow-1"><a href="user-profile.html">
                          <h6>James created changelog page</h6></a><span>3 hours ago . Blank</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    
@endsection