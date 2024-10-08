@extends('admin.app')

@section('title','Manage Messages')
    @section('page', 'Manage Messages')

    @section('content')

        <main id="main" class="main">

            <section class="section">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <table id="my-table" class="display table table-striped table-hover" >
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Subject</th>
                                        <th>Message</th>

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
                                            <td>{{$message->subject}}</td>
                                            <td>{{$message->message}}</td>

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

