<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/welcome.css">
</head>
<body>
    <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">	
                <h2 class="card-heading">
                    Register Now :)
                  
                </h2>
            </div>
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
          @endif
            <form action="/" method="post">
               
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="phone">
                </div>
                <div class="mb-3">
                <label for="eventday" class="form-label">EventDay</label>
                <select class="form-select" id="eventday" name="eventday" >
                    <option selected>&nbsp;</option>
                    @foreach ($eventdays as $eventday)
                    <option value="{{$eventday->id}}">{{$eventday->name}}</option>
                    @endforeach
                    
                </select>
                </div>
                <div class="mb-3">
                    <label for="movies" class="form-label">Movies</label>
                    <select class="form-select" id="movies" name="movies">
                    <option selected>&nbsp;</option>
                    @foreach ($movies as $movie)
                    <option value="{{$movie->id}}">{{$movie->title}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="showtimes" class="form-label">ShowTimes</label>
                    <select class="form-select" id="showtimes" name="showtimes">
                    <option selected>&nbsp;</option>
                    @foreach ($showtimes as $showtime)
                    <option value="{{$showtime->id}}">{{$showtime->opening}} - {{$showtime->closing}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="action">
                    <button class="action-button">Register Now :)</button>
                </div>
            </form>
        </div>
    </div> 
    

    
</body>
</html>