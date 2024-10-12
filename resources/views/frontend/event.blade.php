@extends('frontend.app')


@section('content')

    <section id="services" class="s-services">

        <div class="row">

            <div class="column large-12 w-900-stack">
                <h1 class="display-1" data-aos="fade-up">
                    Experience engaging discussions and meaningful fellowship whether you are seeking spiritual growth, financial wisdom or physical health. This is the perfect opportunity to connect and thrive.
                </h1>
            </div>

        </div>

        @if(count($events) > 0)
            <div class="row block-large-1-2 block-tab-full s-services__services item-list">
                @foreach($events as $event)
                    <div class="column item item-service" data-aos="fade-up">
                        <a href="{{route('event.detail', $event->slug)}}">
                            <span class="service-icon service-icon--community-outreach"></span>
                            <h3 class="item-title">{{$event->title}}</h3>
                            <img src="{{asset($event->image)}}" style="width: 100%">
                            <p>
                                {!! (\Illuminate\Support\Str::limit($event->body, 40, '...')) !!}                    </p>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif


    </section> <!-- end s-services -->

@endsection

<!-- footer
================================================== -->
