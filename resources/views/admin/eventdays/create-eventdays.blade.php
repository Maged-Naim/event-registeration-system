@extends('admin.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Create a EventDay</h2>
            </div>
        </div>
    </div>
  
    <form action="/admin/eventdays" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Ticket Price</label>
            <input type="text" class="form-control @error('ticket_price') is-invalid @enderror" name="ticket_price" placeholder="ticket_price">
            @error('ticket_price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="showtimes" class="form-label">ShowTimes</label>
            <select class="form-control" id="showtimes" name="showtimes">
            <option selected disabled>&nbsp;</option>
            @foreach ($showtimes as $showtime)
            <option value="{{$showtime->id}}">{{$showtime->opening}} - {{$showtime->closing}}</option>
            @endforeach
            </select>
        </div>
     

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/admin/movies" type="button" class="btn btn-warning " >Back</a>                                

    </form>
</div>
@endsection