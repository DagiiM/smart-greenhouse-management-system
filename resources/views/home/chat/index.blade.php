<x-app-layout>
  @section('navigation')
  @endsection
  @section('footer')
  @endsection

@section('aside')
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Nav Item - User Information -->
  <div class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="sidebar-brand-icon">
          <img style="height:100px;width:100px;border-radius:100%; border:1px white solid" class="img-profile rounded-circle"
              src="{{asset('/img/'.Auth::user()->picture)}}">
            </div>
              <div class="sidebar-brand-text">{{Auth::user()->firstname}}</div>

      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
          aria-labelledby="userDropdown">
          <a class="dropdown-item" href="{{route('users.show',['user'=>$user])}}">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
          </a>
          <a class="dropdown-item" href="#">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
          </a>
          <a class="dropdown-item" href="#">
              <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
              Activity Log
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
          </a>
      </div>
  </div>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<hr class="sidebar-divider my-0">
@if($ministries->count()>0)

@foreach($ministries as $ministry)
      <li class="nav-item">
          <a class="nav-link sidebar-brand d-flex align-items-center" style="margin-left:2px" href="{{route('ministries.chats.index',['ministry'=>$ministry])}}">
              <div class="sidebar-brand-icon rotate-n-15">
                  <img style="height:60px;width:60px;border-radius:100%" src="{{asset('./img/'.$ministry->image)}}"/>
              </div>
              <div class="sidebar-brand-text" style="text-overflow:ellipsis;width:20px;padding-left:10px;font-size:9px;">{{$ministry->name}}</div>
          </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
@endforeach
<li class="mt-3 mb-3">
    <a class="nav-item" href="{{route('users.ministries.create',['user'=>$user])}}">
      <div class="row h-8 ml-1 mb-2">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <p class="ml-2 mt-1">Join Another Ministry</p>
    </div>
    </a>
</li>
@else
<li>
    <p class="ml-5" style="width:90%;overflow:ellipsis">No Ministry Found</p>
</li>
<li class="mt-3 mb-3">
  <a href="{{route('users.ministries.create',['user'=>$user])}}">
    <div class="row h-8 ml-5 mb-2">
  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
  </svg>
  <p class="ml-2 mt-1">Join A Ministry</p>
  </div>
  </a>
</li>
@endif
</ul>

@endsection

<div style="background-color:white;">
    <div class="row" style="height:90vh">
      <div class="col mt-5" style="margin-left:30%;">
          <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            <p class="mt-5" style="font-weight:800;color:brown">Choose a Ministry to Start Chatting..</p>
        </div>

    </div>
</div>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</x-app-layout>
