@extends('admin.index')

@section('content')
    <h2>List Of Attendees</h2> 
    <div class="col-md-12 text-right">
                               
    </div>
    
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                   <th>ID</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>phone</th>
                   <th>Eventday</th>
                   {{-- <th>Showtime</th> --}}
                   <th></th>
                   <th>Action</th>
                </tr>  
            </thead>
            <tbody>
               @foreach ($attendees as  $attendee)
               <tr>
                <td>{{App\Models\Attendees::find($attendee->AttendeesId)->id}}</td>
                <td>{{App\Models\Attendees::find($attendee->AttendeesId)->name}}</td>
                <td>{{App\Models\Attendees::find($attendee->AttendeesId)->email}}</td>
                <td>{{App\Models\Attendees::find($attendee->AttendeesId)->number}}</td>
                <td>{{App\Models\EventDay::find($attendee->eventdaysId)->name}}</td>
                <td></td>
                   {{-- <td >{{$attendee->id}}</td>
                   <td>{{$attendee->name}}</td>
                   <td>{{$attendee->email}}</td>
                   <td>{{$attendee->number}}</td> --}}
                   {{-- <td></td>
                   <td></td> --}}
                    <td>
                        <form action="/admin/attendees/{{$attendee->id}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
       
@endsection