<x-app-layout>
  <a href="{{route('abilities.index')}}">
    <div class="row ml-2">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
    </svg>
    <p class="ml-2">All Abilities </p>
  </div>
</a>
<form method="post" enctype="multipart/form-data" action="{{route('abilities.store')}}">
  <div class="row">
  <input name="name" class="form-control col-lg-3 col-md-3 col-sm-3" type="text" autofocus placeholder="Name of the Ability" value="Editor" required/>
  <input name="description" class="form-control col-lg-6 col-md-6 col-sm-6" type="text" autofocus placeholder="Name eg facebook" value="Allowed to Edit Articles And Events" required/>
  <button type="submit" class="col-lg-3 col-sm-3 col-md-3 btn btn-primary" style="width:50%">
      +ADD ABILLITY
  </button>

</div>
  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
</form>
</x-app-layout>
