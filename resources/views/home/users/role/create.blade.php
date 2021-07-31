<x-app-layout>
  @if($roles->count()>0)
<form method="post" enctype="multipart/form-data" action="{{route('users.roles.store',['user'=>$user])}}">
  <div class="row">
  <div class="col-md-4 pl-1">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
      Select Role of your Choice
    </label>
    <select name="role" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state" required>
      @foreach($roles as $role)
      <option>{{$role->name}}</option>
      @endforeach
    </select>
    </div>
    <button type="submit" class="h-10 mt-9 col-md-4 btn btn-primary">
      <div class="row ml-2">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
          <p class="ml-2">Continue</p>
        </div>
    </button>

    </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    </form>
    @else
    <p class="ml-3">Seems You Have Assigned All The Roles</p>

    @endif

<a href="{{route('users.roles.index',['user'=>$user])}}">
      <div class="row ml-3 mb-1 mt-3" style="color:orange;font-weight:bold">
      <p class="mr-2 ml-2">Take Me to My Roles</p>
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
      </svg>
    </div>
  </a>

</x-app-layout>


{{--

  <form method="post" enctype="multipart/form-data" action="{{route('users.ministries.destroy',['user'=>$user,'ministry'=>$ministry])}}">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
    </svg>
  </button>
</form>

--}}
