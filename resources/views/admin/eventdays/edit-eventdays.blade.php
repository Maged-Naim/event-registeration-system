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
  
    <form action="/admin/eventdays/{{$updatedeventday->id}}" method="post">  
        @method('PATCH') 
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="name" value="{{$updatedeventday->name}}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Ticket Price</label>
            <input type="text" class="form-control @error('ticket-price') is-invalid @enderror" name="ticket_price" value="{{$updatedeventday->ticket_price}}">
            @error('ticket-price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    

       

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/admin/eventdays" type="button" class="btn btn-warning " >Back</a>                                

    </form>
</div>
@endsection