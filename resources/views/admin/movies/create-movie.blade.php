@extends('admin.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Create a Movie</h2>
            </div>
        </div>
    </div>
  
    <form action="/admin/movies/create" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title">
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Genere</label>
            <input type="text" class="form-control @error('genere') is-invalid @enderror" name="genere" placeholder="genere">
            @error('genere')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Year</label>
            <input type="number" class="form-control @error('year') is-invalid @enderror" name="year" placeholder="Year">
            @error('year')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Language</label>
            <input type="text" class="form-control @error('language') is-invalid @enderror" name="language" placeholder="Langauge">
            @error('language')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Description</label><br>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
            {{-- <input type="text" class="form-control @error('language') is-invalid @enderror" name="language" placeholder="Langauge"> --}}
    
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/admin/movies" type="button" class="btn btn-warning " >Back</a>                                

    </form>
</div>
@endsection