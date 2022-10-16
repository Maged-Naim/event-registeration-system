@extends('admin.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Update a EventDay</h2>
            </div>
        </div>
    </div>
  
    <form action="/admin/showtimes/{{$updatedshowtime->id}}" method="post">  
        @method('PATCH') 
        @csrf
        <div class="form-group">
            <label for="opening">Opening</label>
            <input type="time" class="form-control @error('opening') is-invalid @enderror" name="opening" value="{{$updatedshowtime->opening}}">
            @error('opening')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Closing</label>
            <input type="time" class="form-control @error('closing') is-invalid @enderror" name="closing" value="{{$updatedshowtime->closing}}">
            @error('closing')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="movies" >Movie</label><br>
            <select class="form-control" id="movie" name="movie">
            <option selected>{{ $movies->find($updatedshowtime->movieId)->title}}</option>
            @foreach ($movies as $movie)
            <option value="{{$movie->id}}">{{$movie->title}}</option>
            @endforeach
            </select>
        </div>
    

       

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/admin/eventdays" type="button" class="btn btn-warning " >Back</a>                                

    </form>
</div>
@endsection