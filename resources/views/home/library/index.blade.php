<x-app-layout>
<a href="{{route('libraries.create')}}">
  <div class="row h-8 ml-5">
<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
</svg>
<p class="ml-2 mt-1">Create Library</p>
</div>
  </a>

@if($data->count()>0)
  <table class="table table-striped">
    <thead>
        <h5 style="text-align:center">All Libraries of the System</h5>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
      <tbody>
  @foreach($data as $library)
    <tr>
        <th scope="row">{{$library->id}}</th>
        <td>{{$library->name}}</td>
        <td style="width:50%;overflow:hidden;">{{$library->description}}</td>
        <td style="width:20%">
<td>

  <a href="{{route('libraries.ebooks.create',['library'=>$library])}}" aria-pressed="true">
    Add Ebook
  </a>
</td>

          <td>
            <a href="{{route('libraries.show',['library'=>$library])}}">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
              </svg>
          </a>
        </td>

        <td>
            <a href="{{route('libraries.edit',['library'=>$library])}}">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
              </svg>
            </a>
          </td>

          <td>

            <form method="post" enctype="multipart/form-data" action="{{route('libraries.destroy',['library'=>$library])}}">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <button type="submit">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
              </svg>
            </button>
            </form>

          </td>
  </td>
      </tr>
  @endforeach
    </tbody>
  </table>

  @else
<div class="col">
          <img src="{{asset('/img/empty.gif')}}" class="ml-5"style="width:50%;height:auto" alt="No videos Yet"/>
          <p class="ml-5">No Libraries Available</p>
        </div>
  @endif
</x-app-layout>