 <aside class="page-sidebar" data-sidebar-layout="stroke-svg">
          <div class="left-arrow" id="left-arrow">
            <svg class="feather">
              <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#arrow-left"></use>
            </svg>
          </div>
          <div id="sidebar-menu">
            <ul class="sidebar-menu" id="simple-bar">
              <li class="pin-title sidebar-list p-0">
                <h5 class="sidebar-main-title">Pinned</h5>
              </li>
              <li class="line pin-line"></li>
              <li class="sidebar-main-title">General</li>
              <li class="sidebar-list"> 
                <svg class="pinned-icon">
                  <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Pin"></use>
                </svg><a class="sidebar-link" href="{{route('dashboard')}}">
                  <svg class="stroke-icon">
                    <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Home"></use>
                  </svg><span>Dashboard</span>
                  <div class="badge badge-primary rounded-pill">3</div>
                  <svg class="feather">
                    <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#chevron-right"></use>
                  </svg></a>
              </li>
              <li class="line"> </li>
              <li class="sidebar-main-title">Applications</li>
              <li class="sidebar-list"> 
                <svg class="pinned-icon">
                  <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Pin"></use>
                </svg><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Info-circle"></use>
                  </svg><span>Project</span>
                  <svg class="feather">
                    <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#chevron-right"></use>
                  </svg></a>
                <ul class="sidebar-submenu"> 
                  <li><a href="{{route('projects.index')}}"> 
                      <svg class="svg-menu">
                        <use href="{{asset('assets/svg/iconly-sprite.svg')}}#right-3"></use>
                      </svg>Project List</a></li>
                  <li> <a href="{{route('projects.create')}}"> 
                      <svg class="svg-menu">
                        <use href="{{asset('assets/svg/iconly-sprite.svg')}}#right-3"></use>
                      </svg>Create New</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> 
                <svg class="pinned-icon">
                  <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Pin"></use>
                </svg><a class="sidebar-link" href="javascript:void(0)">
                  <svg class="stroke-icon">
                    <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Profile"></use>
                  </svg><span>Users</span>
                  <svg class="feather">
                    <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#chevron-right"></use>
                  </svg></a>
                <ul class="sidebar-submenu"> 
                  <li><a href="{{route('profile.index')}}"> 
                      <svg class="svg-menu">
                        <use href="{{asset('assets/svg/iconly-sprite.svg')}}#right-3"></use>
                      </svg>User Profile</a></li>
                  <li><a href="{{route('profile.edit')}}"> 
                      <svg class="svg-menu">
                        <use href="{{asset('assets/svg/iconly-sprite.svg')}}#right-3"></use>
                      </svg>User Edit</a></li>
                </ul>
              </li>
              <li class="sidebar-list"> 
                <svg class="pinned-icon">
                  <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Pin"></use>
                </svg><a class="sidebar-link" href="{{route('tasks.index')}}">
                  <svg class="stroke-icon">
                    <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Tick-square"></use>
                  </svg><span>Tasks </span></a>
              </li>
              <li class="sidebar-list"> 
                <svg class="pinned-icon">
                  <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Pin"></use>
                </svg><a class="sidebar-link" href="to-do.html">
                  <svg class="stroke-icon">
                    <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Edit"></use>
                  </svg><span>To-Do </span></a>
              </li>
            </ul>
          </div>
          <div class="right-arrow" id="right-arrow">
            <svg class="feather">
              <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#arrow-right"></use>
            </svg>
          </div>
        </aside>