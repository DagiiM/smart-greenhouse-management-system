<x-app-layout>
  <a href="{{route('roles.index')}}">
    <div class="row ml-2">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
    </svg>
    <p class="ml-2">Back to Roles </p>
  </div>
</a>
<p class="ml-3 mb-1 mt-2" style="color:orange;font-weight:bold">Create a Role and Assign Abilities</p>

@if($data->count()>0)
<form method="post" enctype="multipart/form-data" action="{{route('roles.store')}}">
<div class="card-body">
<div class="row">
    <input name="name" class="form-control col-lg-3 col-md-3 col-sm-3 ml-2 mr-2" type="text" autofocus placeholder="Name of the name" value="Maker" required/>
    <input name="description" class="form-control col-lg-3 col-md-3 col-sm-3 ml-2 mr-2" type="text" autofocus placeholder="Describe the role" required/>
    <button type="submit" class="col-lg-3 col-sm-3 col-md-3 btn btn-primary" style="width:50%">
        +ADD ROLE
    </button>
</div>

<ul>
  <p class="mb-1 mt-2" style="color:orange;font-weight:bold">Select an Ability to Attach to The Role</p>
    @foreach($data as $ability)
    <li>
  <input class="form-check-input ml-2" type="checkbox" name="ability_select[]" value="{{$ability->id}}" id="gridCheck">
      <label class="form-check-label ml-2" for="gridCheck">{{$ability->name}}  </label>
    </li>
    @endforeach

    </ul>
</div>
  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
</form>
@else
<p class="ml-2"> No Abilities Available.
   <a style="color:blue;" href="{{route('abilities.create')}}">Create Ability, </a>
   Then Get back here to proceed With Role Creation.
 </p>
  @endif
</x-app-layout>
