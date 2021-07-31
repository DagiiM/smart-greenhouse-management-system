<x-app-layout>
  <a href="{{route('users.index')}}">
    <div class="row ml-2">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
    </svg>
    <p class="ml-2">Back to users </p>
  </div>
</a>

  <div class="container-fluid">
      <div class="row">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Edit Profile</h4>
                  </div>
                  <div class="card-body">
                      <form method="put" enctype="multipart/form-data" action="{{route('users.update',['user'=>$user])}}">

                          <div class="row">
                              <div class="col-md-5 pr-1">
                                  <div class="form-group">
                                      <label>Company (disabled)</label>
                                      <input type="text" class="form-control" disabled="" placeholder="Company" value="{{config('app.name')}}">
                                  </div>
                              </div>
                              <div class="col-md-3 px-1">
                                  <div class="form-group">
                                      <label>Username</label>
                                      <input type="text" class="form-control" placeholder="Username" value="{{$user->firstname}}.{{$user->lastname}}">
                                  </div>
                              </div>
                              <div class="col-md-4 pl-1">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" class="form-control" placeholder="Email" value="{{ $user->email}}">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6 pr-1">
                                  <div class="form-group">
                                      <label>First Name</label>
                                      <input type="text" class="form-control" placeholder="Company" value="{{ $user->firstname}}">
                                  </div>
                              </div>
                              <div class="col-md-6 pl-1">
                                  <div class="form-group">
                                      <label>Last Name</label>
                                      <input type="text" class="form-control" placeholder="Last Name" value="{{ $user->lastname}}">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Address</label>
                                      <input type="text" class="form-control" placeholder="Home Address" value="{{$user->address}}">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-4 pr-1">
                                  <div class="form-group">
                                      <label>City</label>
                                      <input type="text" class="form-control" placeholder="City" value="{{$user->city}}">
                                  </div>
                              </div>
                              <div class="col-md-4 px-1">
                                  <div class="form-group">
                                      <label>Country</label>
                                      <input type="text" class="form-control" placeholder="Country" value="{{$user->country}}">
                                  </div>
                              </div>
                              <div class="col-md-4 pl-1">
                                  <div class="form-group">
                                      <label>Postal Code</label>
                                      <input type="number" class="form-control" placeholder="ZIP Code" value="{{$user->postal_code}}">
                                  </div>
                              </div>

              
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label>About Me</label>
                                      <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">{{$user->bio}}</textarea>
                                  </div>
                              </div>
                          </div>
                          <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>

                          <div class="clearfix"></div>
                          {{csrf_field()}}
                      </form>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card card-user">
                  <div class="card-image">
                      <img src="{{asset('./img/'.$user->cover_image)}}" alt="{{$user->firstname}}">
                  </div>
                  <div class="card-body">
                      <div class="author">
                          <a href="#">
                              <img class="avatar border-gray" src="{{asset('./img/'.$user->picture)}}" alt="{{ $user->firstname}}">
                              <h5 class="title">{{$user->lastname }}</h5>
                          </a>
                          <p class="description">
                              {{ $user->firstname}}.{{ $user->lastname }}
                          </p>
                      </div>
                      MINISTRIES
                      @foreach($ministries as $data)
                      <p class="description text-center">
                          <b/>{{$data->name}}</b>
                      </p>
                      @endforeach
                      ROLES
                      @foreach($roles as $data)
                      <p class="description text-center">
                        <b/>{{$data->name}}</b>
                      </p>
                      @endforeach
                  </div>
                  <hr>
                  <div class="button-container mr-auto ml-auto">
                      <button href="#" class="btn btn-simple btn-link btn-icon">
                          <i class="fa fa-facebook-square"></i>
                      </button>
                      <button href="#" class="btn btn-simple btn-link btn-icon">
                          <i class="fa fa-twitter"></i>
                      </button>
                      <button href="#" class="btn btn-simple btn-link btn-icon">
                          <i class="fa fa-google-plus-square"></i>
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </div>

  </x-app-layout>
