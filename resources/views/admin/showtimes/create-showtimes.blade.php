@extends('admin.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Create a Showtime</h2>
            </div>
        </div>
    </div>
  
    <form action="/admin/showtimes" method="post">
        {!! csrf_field() !!}
        <div class="col-md-12">
            <div class="form-group">
                <label for="opening">Opening</label>
                <input type="time" class="form-control @error('opening') is-invalid @enderror" name="opening" placeholder="opening">
                @error('opening')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Closing</label>
                <input type="time" class="form-control @error('closing') is-invalid @enderror" name="closing" placeholder="closing">
                @error('closing')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="movies" class="form-label">Movie</label>
                <select class="form-control" id="movie" name="movie">
                    <option selected disabled>&nbsp;</option>
                    @foreach ($movies as $movie)
                      <option value="{{$movie->id}}">{{$movie->title}}</option>
                    @endforeach
                </select>
            </div> 
         
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/admin/showtimes" type="button" class="btn btn-warning " >Back</a>  
        </div>                              

    </form>
</div>
@endsection