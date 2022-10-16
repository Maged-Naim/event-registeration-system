@extends('admin.index')

@section('content')
   <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">overview</h2>
                </div>
            </div>
        </div>

        <div class="row m-t-25">
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                            <div class="text">
                                <h2>{{$attendee}}</h2>
                                <span>Attendees</span>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-time"></i>
                            </div>
                            <div class="text">
                                <h2>{{$showtimes}}</h2>
                                <span>ShowTimes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </div>
                            <div class="text">
                                <h2>2</h2>
                                <span>EventDays</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c4">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                {{-- <i class="zmdi zmdi-money"></i> --}}
                                <i class="zmdi zmdi-tv"></i>
                            </div>
                            <div class="text">
                                <h2>{{$movies}}</h2>
                                <span>Movies</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
    
@endsection
