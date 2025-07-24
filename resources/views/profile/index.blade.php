@extends('layouts.appp')

@section('title', 'profil')

@section('content')
   <div class="page-body">
          <div class="container-fluid">
            <div class="row page-title">
              <div class="col-sm-6">
                <h3>User Profile</h3>
              </div>
              <div class="col-sm-6">
                <nav>
                  <ol class="breadcrumb justify-content-sm-end align-items-center">
                    <li class="breadcrumb-item"> <a href="index.html">
                        <svg class="svg-color">
                          <use href="{{asset('assets/svg/iconly-sprite.svg')}}#Home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">User Profile</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid user-profile">
            <div class="row">
              <div class="col-sm-12">
                <div class="card hovercard text-center">
                  <div class="cardheader"></div>
                  <div class="user-image">
                    <div class="avatar"><img alt="" src="{{asset('assets/images/avatar/1.jpg')}}"></div>
                    <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
                  </div>
                  <div class="info">
                    <div class="row">
                      <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                        <div class="row">
                          <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                            <div class="ttl-info text-start">
                              <h6><i class="fa-solid fa-envelope"></i>Email</h6><span>{{$user->email}}</span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="ttl-info text-start">
                              <h6><i class="fa-solid fa-calendar-days"></i>BOD</h6><span>02 Juillet 2025</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                        <div class="user-designation">
                          <div class="title"><a target="_blank" href="">{{$user->name}}</a></div>
                          <div class="desc">designer</div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="ttl-info text-start">
                              <h6><i class="fa-solid fa-phone"></i>Contact Us</h6><span>+1 (438) 699-9094</span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="ttl-info text-start">
                              <h6><i class="fa fa-location-arrow"></i>Location</h6><span>388 rue saint sauveur</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="social-media">
                      <ul class="list-inline">
                        <li class="list-inline-item"><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="https://accounts.google.com/" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i class="fa fa-rss"></i></a></li>
                      </ul>
                    </div>
                    <div class="follow">
                      <div class="row">
                        <div class="col-6 text-md-end border-right">
                          <div class="follow-num counter" id="count4">25869</div><span>Follower</span>
                        </div>
                        <div class="col-6 text-md-start">
                          <div class="follow-num counter" id="count5">659887</div><span>Following</span>
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