<x-app-layout>

  <table class="table table-striped">
    <thead>
        <h5 style="text-align:center">System Services</h5>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Subject</th>
        <th scope="col">Time</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
      <tbody>
    <tr>
        <th scope="row">{{$data->id}}</th>
        <td scope="col"> {{$data->subject}}</td>
        <td scope="col">{{$data->time}} </td>
        <td style="width:20%">

        <td>
            <a href="{{route('services.edit',$data)}}">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
              </svg>
            </a>
          </td>

          <td>
            <form method="post" enctype="multipart/form-data" action="{{route('services.destroy',$data)}}">
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
    </tbody>
  </table>

</x-app-layout>
