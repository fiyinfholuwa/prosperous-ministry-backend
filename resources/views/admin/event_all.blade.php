


@extends('admin.app')

@section('title', 'Manage Events')
@section('page', 'Manage Events')
@section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            {{--              <h5 class="card-title"></h5>--}}


                            <!-- Table with stripped rows -->
                            <table id="my-table" class="table datatable">
                                <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>Image</th>
                                    <th>Content</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Time</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach($events as $event)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$event->title}}</td>
                                        <td><img height="40px" width="40px" src="{{asset($event->image)}}"></td>
                                        <td>{!! (\Illuminate\Support\Str::limit($event->body, 20, '...')) !!}
                                        </td>

                                        <td>{{$event->start_date}}</td>
                                        <td>{{$event->end_date}}</td>
                                        <td>{{$event->time}}</td>
                                        <td>{{$event->address}}</td>
                                        <td>
                                            <a href="{{route('admin.event.edit', $event->id)}}">
                                                <i  class="fa fa-edit text-primary"></i>
                                            </a>
                                            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#blog_delete_{{$event->id}}">
                                                <i  class="fa fa-trash text-danger"></i>
                                            </a>
                                        </td>
                                        @include('admin.modals.event')
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </section>



    </main><!-- End #main -->
@endsection
