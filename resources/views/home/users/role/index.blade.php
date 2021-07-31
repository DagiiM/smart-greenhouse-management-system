<x-app-layout>

  @if($roles->count()>0)

  <table class="table table-striped">
    <thead>
        <p class="ml-3 mb-1" style="color:orange;font-weight:bold">My Roles </p>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
      <tbody>
  @foreach($roles as $role)
    <tr>
        <th scope="row">{{$role->id}}</th>
        <td>
          <a class="mr-5" href="{{route('roles.show',['role'=>$role])}}">
              {{$role->name}}
            </a>
          </td>

          <td>
            <form method="post" enctype="multipart/form-data" action="{{route('users.roles.destroy',['user'=>$user,'role'=>$role])}}">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <button type="submit">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
              </svg>
            </button>
            </form>

          </td>
      </tr>
  @endforeach

    </tbody>
  </table>

  @else
  <a href="{{route('users.roles.create',['user'=>$user])}}">
    <div class="row h-8 ml-5 mb-2">
  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
  </svg>
  <p class="ml-2 mt-1">Add A Role</p>
  </div>
  </a>
   You Have No Roles Defined

  @endif


</x-app-layout>
