
@extends('admin.app')

@section('title','Manage Bookings')
    @section('page', 'Manage Bookings')

    @section('content')

        <main id="main" class="main">

            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body table-responsive">
                                <table id="my-table" class="display table table-striped table-hover" >
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Date/Time</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php $i = 1; ?>
                                    @foreach($all_messages as $message)
                                        <tr>

                                            <td>{{$i++}}</td>
                                            <td>{{$message->name}}</td>
                                            <td>{{$message->email}}</td>
                                            <td>{{$message->phone}}</td>
                                            <td>{{$message->time}}</td>
                                            <td>{{$message->message}}</td>
                                            <td>{{$message->status}}</td>

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

