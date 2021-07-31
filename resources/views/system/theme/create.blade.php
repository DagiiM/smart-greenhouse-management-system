<x-app-layout>
  <a href="{{route('themes.index')}}">
    <div class="row ml-2">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
    </svg>
    <p class="ml-2">Back to Themes </p>
  </div>
  </a>
  
<form method="post" enctype="multipart/form-data" action="{{route('themes.store')}}">
  <div class="row">
    <input name="semester" class="form-control col-lg-4 col-md-4 col-sm-4" type="text" autofocus placeholder="Semester"/>
  <input name="subject" class="form-control col-lg-4 col-md-4 col-sm-4" type="text" autofocus placeholder="This Semester Theme"/>
  <button type="submit" class="col-lg-4 col-sm-4 col-md-4 btn btn-primary" style="width:50%">
      +ADD THEME
  </button>

</div>
  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
</form>


</x-app-layout>
