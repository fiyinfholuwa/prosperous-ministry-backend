@extends('admin.app')

@section('title','Manage Attendees')
    @section('page', 'Manage Attendees')

    @section('content')

        <main id="main" class="main">

            <form style="margin-bottom: 20px;" method="post" action="{{route('admin.attendee.report')}}">
                @csrf
                <div class="row">
                    <div class="col-lg-2  mt-1">
                        <div class="" style="">

                            <input name="date_from" class="form-control "  type="date"  placeholder="Start Date"  required/>

                        </div>
                    </div>
                    <div class="col-lg-2  mt-1">
                        <div class="" style="">

                            <input name="date_to" class="form-control "  type="date"  placeholder="End Date"   required/>

                        </div>
                    </div>

                    <div class="col-lg-2  mt-1">
                        <div class="" style="">
                            <select required class="form-control" name="event_id">
                                <option value="">Event Title</option>
                                @foreach($events as $event)
                                    <option value="{{$event->id}}">{{$event->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4   mt-1" >
                        <button type="submit" class='btn btn-primary'>Export to CSV</button>
                    </div>
                </div>
            </form>

            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <table id="my-table" class="display table table-striped table-hover" >
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Event Name</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php $i = 1; ?>
                                    @foreach($all_messages as $message)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{optional($message->event_info)->title}}</td>
                                            <td>{{$message->full_name}}</td>
                                            <td>{{$message->email}}</td>
                                            <td>
                                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_comment_{{$message->id}}" ><i class="fa fa-trash"></i></a>
                                            </td>




                                            <!-- Modal -->
                                            <div class="modal fade" id="delete_comment_{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('contact.delete', $message->id)}}" method="post">
                                                        @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-danger" id="exampleModalLabel">Attendee Delete</h5>

                                                            </div>
                                                            <div class="modal-body">
                                                                Are You Sure You want to delete this Attendee
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>





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

