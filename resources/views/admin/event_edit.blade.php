@extends('admin.app')

@section('title' , 'Edit Event')
@section('page' , 'Edit Event')
@section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-10">

                    <div class="card">
                        <div class="card-body">
                            {{--                            <h5 class="card-title"></h5>--}}
                            <div class="">

                                <form method="post" action="{{route('admin.event.update', $event->id)}}" enctype="multipart/form-data"
                                      class="row g-3">
                                    @csrf
                                    <div class="col-md-6 col-lg-12">
                                        <label for="inputName5" class="form-label">Title</label>
                                        <input type="text" name="title" value="{{$event->title}}" class="form-control"
                                               placeholder="Enter Event Title" id="inputName5">
                                        <p style="font-weight:bold; color:red; font-size:12px;">
                                            @error('title')
                                            {{$message}}
                                            @enderror
                                        </p>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputCity" class="form-label">Image</label>
                                        <input  type="file" class="form-control"  name="image"/>
                                        <div>
                                            <img height="40px" width="40px" src="{{asset($event->image)}}"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="inputCity" class="form-label">Start Date</label>

                                            <input name="start_date" value="{{$event->start_date}}" type="date" class="form-control" placeholder="Start Date">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="inputCity" class="form-label">End Date</label>
                                            <input value="{{$event->end_date}}" name="end_date" type="date" class="form-control" placeholder="End Date">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-9">
                                            <label for="inputCity" class="form-label">Address</label>

                                            <input name="address" value="{{$event->address}}" type="text" class="form-control" placeholder="Address">
                                        </div>

                                        <div class="col-lg-3">
                                            <label for="inputCity" class="form-label">Time</label>
                                            <input name="time" value="{{$event->time}}"  type="text" class="form-control" placeholder="Time">
                                        </div>
                                    </div>



                                    <div class="col-md-6 col-lg-12">
                                        <label for="inputName5" class="form-label">About Event</label>
                                        <textarea id="myTextarea" name="body" placeholder="Event Content"
                                                  class="form-control" rows="10">{{$event->body}}</textarea>
                                        <p style="font-weight:bold; color:red; font-size:12px;">
                                            @error('body')
                                            {{$message}}
                                            @enderror
                                        </p>
                                    </div>


                                    <div class="">
                                        <button type="submit" class="btn btn-primary">Update Event</button>
                                    </div>
                                </form><!-- End Multi Columns Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


    </main><!-- End #main -->
@endsection
