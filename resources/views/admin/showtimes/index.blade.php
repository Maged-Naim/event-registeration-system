@extends('admin.index')

@section('content')
    <h2>List Of Showtimes</h2> 
    <div class="col-md-12 text-right">
        <a href="showtimes/create" type="button" class="btn btn-primary btn-round" >Add showtime</a>                                
    </div>
    
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                   <th>ID</th>
                   <th>Opening</th>
                   <th>Closing</th>
                   <th>MovieID</th>
          
                   <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ( $showtimes as  $showtime)
               <tr>
                   <td >{{$showtime->id}}</td>
                   <td>{{$showtime->opening}}</td>
                   <td>{{$showtime->closing}}</td>
                   {{-- <td>{{Movie::find($showtime->movieId)->title}}</td> --}}
                   <td>{{$movies->find($showtime->movieId)->title}}</td>

                   <td style="width: 40px">
                        <a type="submit" href="/admin/showtimes/{{$showtime->id}}/edit" class="btn btn-warning">Edit</a> 
                    </td>
                    <td>
                        <form action="/admin/showtimes/{{$showtime->id}}" method="post">
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