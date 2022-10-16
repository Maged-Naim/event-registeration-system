@extends('admin.index')

@section('content')
    <h2>List Of EventDays</h2> 
    <div class="col-md-12 text-right">
        <a href="eventdays/create" type="button" class="btn btn-primary btn-round" >Add EventDay</a>                                
    </div>
    
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                   <th>ID</th>
                   <th>Name</th>
                   <th>Ticket Price</th>
                   <th>Showtimes</th>
                   <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($eventdays as  $eventday)
               <tr>
                   <td >{{$eventday->id}}</td>
                   <td>{{App\Models\EventDay::find($eventday->eventdayId)->name}}</td>
                   <td>{{App\Models\EventDay::find($eventday->eventdayId)->ticket_price}}</td>
                   <td>
                    {{App\Models\ShowTime::find($eventday->showtimesId)->opening}} - 
                    {{App\Models\ShowTime::find($eventday->showtimesId)->closing}}
                   </td>

                   <td style="width: 40px">
                        <a type="submit" href="/admin/eventdays/{{$eventday->id}}/edit" class="btn btn-warning">Edit</a> 
                    </td>
                    <td>


                        <form action="/admin/eventdays/{{$eventday->id}}" method="post">
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