@extends('admin.index')

@section('content')
    <h2>List Of Movies</h2> 
    <div class="col-md-12 text-right">
        <a href="movies/create" type="button" class="btn btn-primary btn-round" >Add Movie</a>                                
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                   <th>ID</th>
                   <th>title</th>
                   <th>genere</th>
                   <th>language</th>
                   <th>year</th>
                   <th>description</th>
                   <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($movies as $movie)
               <tr>
                   <td >{{$movie->id}}</td>
                   <td>{{$movie->title}}</td>
                   <td>{{$movie->genere}}</td>
                   <td>{{$movie->language}}</td>
                   <td>{{$movie->year}}</td>
                   <td>{{$movie->description}}</td>
                   <td style="width: 40px">
                        <a type="submit" href="/admin/movies/{{$movie->id}}/edit" class="btn btn-warning">Edit</a> 
                    </td>
                    <td>
                        <form action="/admin/movies/{{$movie->id}}" method="post">
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