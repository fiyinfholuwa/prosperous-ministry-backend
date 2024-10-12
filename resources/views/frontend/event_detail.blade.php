@extends('frontend.app')

@section('content')

    <section id="services" class="s-services">
        <div class="container">
            <div class="row">
                <!-- Left column (8) -->
                <div class="left-column">
                    <div class="tips-container2">
                        <img src="{{asset($event->image)}}" alt="" class="blog-banner">

                        <div class="tips-download"></div>

                        <div class="tips-process">
                            <h3 style="color: #ffffff; padding-bottom: 30px">{{ $event->title }}</h3>
                            {!! $event->body !!}
                        </div>

                        <!-- Event Details Section -->
                        <div class="event-details">
                            <h4 style="color: #b01e1e; margin-top: 30px;">Event Details</h4>
                            <ul>
                                <li><strong>Address:</strong> {{ $event->address }}</li>
                                <li><strong>Start Date:</strong> {{ $event->start_date }}</li>
                                <li><strong>End Date:</strong> {{ $event->end_date }}</li>
                                <li><strong>Event Time:</strong> {{ $event->time }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Right column (4) -->
                <div class="right-column">
                    <div class="subscribe-form">
                        <form style="background-color: white; padding: 20px;" action="{{route('attendance.save')}}" method="POST" autocomplete="off">
                            <h3 style="color: #b01e1e">Attendance Form</h3>

                            @csrf
                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                            </div>
                            <input type="hidden" value="{{$event->id}}" name="event_id">
                            <div class="form-group">
                                <label for="email">Email Address:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter" required>
                                <label class="form-check-label" for="newsletter" style="color: black">Subscribe to newsletter</label>
                            </div>
                            <button style="background-color: #b01e1e" type="submit" class="btn btn-danger">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Styles for layout and responsiveness -->
    <style>
        .container {
            width: 96%;
            margin: 0 auto;
            padding: 0 15px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .left-column {
            flex: 0 0 66.66%; /* Equivalent to 8 columns */
            padding: 15px;
        }

        .right-column {
            flex: 0 0 33.33%; /* Equivalent to 4 columns */
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .subscribe-form h3 {
            color: #b01e1e;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }


        .btn {
            background-color: #b01e1e;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #8b1717;
        }

        .event-details {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .event-details h4 {
            color: #b01e1e;
            margin-bottom: 10px;
        }

        .event-details ul {
            list-style-type: none;
            padding: 0;
        }

        .event-details ul li {
            padding: 8px 0;
            border-bottom: 1px solid #ddd;
            font-size: 16px;
            color: #333;
        }

        .event-details ul li:last-child {
            border-bottom: none;
        }

        @media (max-width: 991px) {
            .left-column, .right-column {
                flex: 100%;
                max-width: 100%;
            }
        }

        @media (max-width: 768px) {
            .form-control, .btn {
                width: 100%;
            }
        }
    </style>

    <style>
        .form-control {
            color: #fff; /* Input text color to white */
            background-color: #333; /* Optional: Change background to a dark color for contrast */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-control::placeholder {
            color: #bbb; /* Optional: Change placeholder color for better visibility */
        }
    </style>


@endsection
