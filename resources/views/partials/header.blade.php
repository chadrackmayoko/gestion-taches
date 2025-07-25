<header class="page-header row">
        <div class="logo-wrapper d-flex align-items-center col-auto"><a href="index.html"><img class="for-light" src="{{asset('assets/images/logo/logo.png')}}" alt="logo"><img class="for-dark" src="{{asset('assets/images/logo/dark-logo.png')}}" alt="logo"></a><a class="close-btn" href="javascript:void(0)">
            <div class="toggle-sidebar">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div></a></div>
        <div class="page-main-header col">
          <div class="header-left d-lg-block d-none">
            <form class="search-form mb-0">
              <div class="input-group"><span class="input-group-text pe-0">
                  <svg class="search-bg svg-color">
                    <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Search"></use>
                  </svg></span>
                <input class="form-control" type="text" placeholder="Search anything...">
              </div>
            </form>
          </div>
          <div class="nav-right">
            <ul class="header-right">
              <li class="modes d-flex"><a class="dark-mode">
                  <svg class="svg-color">
                    <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Moon"></use>
                  </svg></a></li>
              <li class="serchinput d-lg-none d-flex"><a class="search-mode">
                  <svg class="svg-color">
                    <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Search"></use>
                  </svg></a>
                <div class="form-group search-form">
                  <input type="text" placeholder="Search here...">
                </div>
              </li>
              <!-- Notification menu-->
              <li class="custom-dropdown"><a href="javascript:void(0)">
                  <svg class="svg-color circle-color">
                    <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Bell"></use>
                  </svg></a><span class="badge rounded-pill badge-secondary">3</span>
                <div class="custom-menu notification-dropdown py-0 overflow-hidden">
                  <h5 class="title bg-primary-light">Notifications <a href="private-chat.html"><span class="font-primary">View</span></a></h5>
                  <ul class="activity-update">
                                  <li class="d-flex align-items-center b-l-primary">
                                    <div class="flex-grow-1"> <span>Just Now</span><a href="private-chat.html">
                                        <h5>What`s the project report update?</h5></a>
                                      <h6>Rick Novak</h6>
                                    </div>
                                    <div class="flex-shrink-0"> <img class="b-r-15 img-40" src="{{asset('assets/images/avatar/10.jpg')}}" alt=""></div>
                                  </li>
                                  <li class="d-flex align-items-center b-l-secondary">
                                    <div class="flex-grow-1"> <span>12:47 am</span><a href="private-chat.html">
                                        <h5>James created changelog page</h5></a>
                                      <h6>Susan Connor</h6>
                                    </div>
                                    <div class="flex-shrink-0"> <img class="b-r-15 img-40" src="{{asset('assets/images/avatar/4.jpg')}}" alt=""></div>
                                  </li>
                                  <li class="d-flex align-items-center b-l-tertiary">
                                    <div class="flex-grow-1"> <span>06:10 pm</span><a href="private-chat.html">
                                        <h5>Polly edited Contact page</h5></a>
                                      <h6>Roger Lum</h6>
                                    </div>
                                    <div class="flex-shrink-0"> <img class="b-r-15 img-40" src="{{asset('assets/images/avatar/1.jpg')}}" alt=""></div>
                                  </li>
                    <li class="mt-3 d-flex justify-content-center">
                      <div class="button-group"><a class="btn btn-secondary" href="private-chat.html">All Notification</a></div>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Bookmark menu-->
              <li class="custom-dropdown"><a href="javascript:void(0)">
                  <svg class="svg-color">
                    <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Star"></use>
                  </svg></a>
                <div class="custom-menu bookmark-dropdown py-0 overflow-hidden">
                  <h5 class="title bg-primary-light">Bookmark</h5>
                  <ul> 
                    <li> 
                      <form class="mb-3">
                        <div class="input-group">
                          <input class="form-control" type="text" placeholder="Search Bookmark..."><span class="input-group-text">
                            <svg class="svg-color">
                              <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Search"></use>
                            </svg></span>
                        </div>
                      </form>
                    </li>
                                  <li class="d-flex align-items-center bg-light-primary">
                                    <div class="flex-shrink-0 me-2"><a href="index.html">
                                        <svg class="svg-color stroke-primary">
                                          <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Home"></use>
                                        </svg></a></div>
                                    <div class="d-flex justify-content-between align-items-center w-100"><a href="index.html">Dashboard</a>
                                      <svg class="svg-color icon-star">
                                        <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Star"></use>
                                      </svg>
                                    </div>
                                  </li>
                                  <li class="d-flex align-items-center bg-light-secondary">
                                    <div class="flex-shrink-0 me-2"><a href="to-do.html">
                                        <svg class="svg-color stroke-secondary">
                                          <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Pie"></use>
                                        </svg></a></div>
                                    <div class="d-flex justify-content-between align-items-center w-100"><a href="to-do.html">To-do</a>
                                      <svg class="svg-color icon-star">
                                        <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Star"></use>
                                      </svg>
                                    </div>
                                  </li>
                                  <li class="d-flex align-items-center bg-light-tertiary">
                                    <div class="flex-shrink-0 me-2"><a href="apexchart.html">
                                        <svg class="svg-color stroke-tertiary">
                                          <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Chart"></use>
                                        </svg></a></div>
                                    <div class="d-flex justify-content-between align-items-center w-100"><a href="apexchart.html">Chart</a>
                                      <svg class="svg-color icon-star">
                                        <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Star"></use>
                                      </svg>
                                    </div>
                                  </li>
                  </ul>
                </div>
              </li>
              <!-- Cart menu-->
              <li class="custom-dropdown"><a href="javascript:void(0)">
                  <svg class="svg-color">
                    <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Bag"></use>
                  </svg></a>
                <div class="custom-menu cart-dropdown py-0 overflow-hidden">
                  <h5 class="title bg-primary-light">Cart<span>Total : <span class="font-primary">4350.9</span></span></h5>
                  <ul>
                                  <li class="cartbox d-flex bg-light-primary">
                                    <div class="flex-shrink-0 border-primary"><img src="{{asset('assets/images/dashboard2/product/1.png')}}" alt=""></div>
                                    <div class="touchpin-details"><a href="cart.html">
                                        <h5>Apple Computers</h5></a><span>$2600.00</span>
                                      <div class="touchspin-wrapper">
                                        <button class="decrement-touchspin btn-touchspin">
                                          <svg class="svg-color">
                                            <use href="{{asset('assets/svg/iconly-sprite.svg')}}#minus"></use>
                                          </svg>
                                        </button>
                                        <input class="form-control input-touchspin bg-light-primary" type="number" value="5">
                                        <button class="increment-touchspin btn-touchspin">
                                          <svg class="svg-color">
                                            <use href="{{asset('assets/svg/iconly-sprite.svg')}}#plus"></use>
                                          </svg>
                                        </button>
                                      </div>
                                      <button class="btn btn-close"></button>
                                    </div>
                                  </li>
                                  <li class="cartbox d-flex bg-light-secondary">
                                    <div class="flex-shrink-0 border-secondary"><img src="{{asset('assets/images/dashboard2/product/2.png')}}" alt=""></div>
                                    <div class="touchpin-details"><a href="cart.html">
                                        <h5>Microwave</h5></a><span>$1450.45</span>
                                      <div class="touchspin-wrapper">
                                        <button class="decrement-touchspin btn-touchspin">
                                          <svg class="svg-color">
                                            <use href="{{asset('assets/svg/iconly-sprite.svg')}}#minus"></use>
                                          </svg>
                                        </button>
                                        <input class="form-control input-touchspin bg-light-secondary" type="number" value="5">
                                        <button class="increment-touchspin btn-touchspin">
                                          <svg class="svg-color">
                                            <use href="{{asset('assets/svg/iconly-sprite.svg')}}#plus"></use>
                                          </svg>
                                        </button>
                                      </div>
                                      <button class="btn btn-close"></button>
                                    </div>
                                  </li>
                                  <li class="cartbox d-flex bg-light-tertiary">
                                    <div class="flex-shrink-0 border-tertiary"><img src="{{asset('assets/images/dashboard2/product/3.png')}}" alt=""></div>
                                    <div class="touchpin-details"><a href="cart.html">
                                        <h5>Mackup Kit</h5></a><span>$300.45</span>
                                      <div class="touchspin-wrapper">
                                        <button class="decrement-touchspin btn-touchspin">
                                          <svg class="svg-color">
                                            <use href="{{asset('assets/svg/iconly-sprite.svg')}}#minus"></use>
                                          </svg>
                                        </button>
                                        <input class="form-control input-touchspin bg-light-tertiary" type="number" value="5">
                                        <button class="increment-touchspin btn-touchspin">
                                          <svg class="svg-color">
                                            <use href="{{asset('assets/svg/iconly-sprite.svg')}}#plus"></use>
                                          </svg>
                                        </button>
                                      </div>
                                      <button class="btn btn-close"></button>
                                    </div>
                                  </li>
                    <li class="mt-3 p-0 d-flex justify-content-center">
                      <div><a class="btn btn-secondary" href="checkout.html">Checkout</a></div>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Bookmark menu-->
              <li class="custom-dropdown"><a href="javascript:void(0)">
                  <svg class="svg-color">
                    <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Message"></use>
                  </svg></a><span class="badge rounded-pill badge-tertiary">3</span>
                <div class="custom-menu message-dropdown py-0 overflow-hidden">
                  <h5 class="title bg-primary-light">Messages</h5>
                  <ul> 
                                  <li class="d-flex b-t-primary">
                                    <div class="d-block"><a href="letter-box.html">
                                        <h5>Design meeting</h5></a>
                                      <h6>
                                        <svg class="feather me-1">
                                          <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#clock"></use>
                                        </svg><span>Just Now</span>
                                      </h6>
                                    </div>
                                    <div class="badge badge-light-danger">
                                      <svg class="feather me-1">
                                        <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#clock"></use>
                                      </svg><span>Open</span>
                                    </div>
                                  </li>
                                  <li class="d-flex b-t-secondary">
                                    <div class="d-block"><a href="letter-box.html">
                                        <h5>Weekly scurm Meeting</h5></a>
                                      <h6>
                                        <svg class="feather me-1">
                                          <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#clock"></use>
                                        </svg><span>1  Hour Ago</span>
                                      </h6>
                                    </div>
                                    <div class="badge badge-light-danger">
                                      <svg class="feather me-1">
                                        <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#clock"></use>
                                      </svg><span>Open</span>
                                    </div>
                                  </li>
                                  <li class="d-flex b-t-tertiary">
                                    <div class="d-block"><a href="letter-box.html">
                                        <h5>Check your login page</h5></a>
                                      <h6>
                                        <svg class="feather me-1">
                                          <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#clock"></use>
                                        </svg><span>2  Hour Ago</span>
                                      </h6>
                                    </div>
                                    <div class="badge badge-light-success">
                                      <svg class="feather me-1">
                                        <use href="{{asset('assets/svg/feather-icons/dist/feather-sprite.svg')}}#clock"></use>
                                      </svg><span>Closed</span>
                                    </div>
                                  </li>
                  </ul>
                </div>
              </li>
              <li class="profile-dropdown custom-dropdown">
                <div class="d-flex align-items-center"><img src="{{asset('assets/images/profile.png')}}" alt="">
                  <div class="flex-grow-1"> 
                    <h5>{{$user->name}}</h5><span>UI Designer</span>
                  </div>
                </div>
                <div class="custom-menu overflow-hidden">
                  <ul> 
                    <li class="d-flex"> 
                      <svg class="svg-color">
                        <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Profile"></use>
                      </svg><a class="ms-2" href="{{route('profile.index')}}">Account</a>
                    </li>
                    <li class="d-flex"> 
                      <svg class="svg-color">
                        <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Message"></use>
                      </svg><a class="ms-2" href="letter-box.html">Inbox</a>
                    </li>
                    <li class="d-flex"> 
                      <svg class="svg-color">
                        <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Document"></use>
                      </svg><a class="ms-2" href="to-do.html">Task</a>
                    </li>
                    <li class="d-flex"> 
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="d-flex align-items-center border-0 bg-transparent p-0">
      <svg class="svg-color">
        <use href="{{ asset('assets/svg/iconly-sprite.svg') }}#Login"></use>
      </svg>
      <span class="ms-2">Log Out</span>
    </button>
  </form>
</li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </header>