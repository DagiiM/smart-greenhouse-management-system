<x-app-layout>
  @if($data->count()>0)
      <table class="table table-striped">
        <thead>
            <h5 style="text-align:center">All Users of the System</h5>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
          <tbody>
      @foreach($data as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->firstname}}</td>
            <td>{{$user->lastname}}</td>
            <td >{{$user->email}}</td>
            <td>{{$user->mobile}}</td>
            <td>
              @if($user->verified)
                <p style="color:blue"> Verified</p>
                </div>

                @elseif(!$user->verified)
                <p style="color:brown">Unverified</p>
                @endif
            </td>
            <td style="width:20%">
              <td>
                <a href="{{route('users.roles.index',['user'=>$user])}}">
                  Role
              </a>
            </td>
              <td>
                <a href="{{route('users.show',['user'=>$user])}}">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                  </svg>
              </a>
            </td>

            <td>
                <a href="{{route('users.edit',['user'=>$user])}}">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                  </svg>
                </a>
              </td>

              <td>

                <form method="post" enctype="multipart/form-data" action="{{route('users.destroy',['user'=>$user])}}">
                  {{csrf_field()}}
                  {{method_field('DELETE')}}
                  <button type="submit">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7a4 4 0 11-8 0 4 4 0 018 0zM9 14a6 6 0 00-6 6v1h12v-1a6 6 0 00-6-6zM21 12h-6"></path>
                  </svg>
                </button>
                </form>

              </td>
          </tr>
      @endforeach
        </tbody>
      </table>

      @else
    <div class="col">
              <img src="{{asset('/img/empty.gif')}}" class="ml-5"style="width:50%;height:auto" alt="No videos Yet"/>
              <p class="ml-5">Could not Find Any User</p>
            </div>
      @endif

</x-app-layout>
