
@extends('frontend.app')

<!-- Hero Section -->
@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box text-center">
                        <i class="fas fa-user-nurse"></i>
                        <h3>Personal Care Assistant (PCA)</h3>
                        <p>Assistance with daily living activities and personal care needs.</p>
                        <a href="{{route('pca')}}" class="btn btn-sm btn-primary mt-3">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box text-center">
                        <i class="fas fa-stethoscope"></i>
                        <h3>Skilled Nursing</h3>
                        <p>Professional nursing care for complex medical needs.</p>
                        <a href="{{route('nurse')}}" class="btn btn-sm btn-primary mt-3">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box text-center">
                        <i class="fas fa-home"></i>
                        <h3>Live-In Care</h3>
                        <p>24/7 care and support in the comfort of your home.</p>
                        <a href="{{route('live.care')}}" class="btn btn-sm btn-primary mt-3">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box text-center">
                        <i class="fas fa-walking"></i>
                        <h3>Rehabilitation Therapy</h3>
                        <p>Specialized therapy to improve mobility and independence.</p>
                        <a href="{{route('therapy')}}" class="btn btn-sm btn-primary mt-3">Learn More</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-box text-center">
                        <i class="fas fa-user-nurse"></i>
                        <h3>Nursing</h3>
                        <p>General nursing care for individuals with health conditions requiring professional monitoring.
                        </p>
                        <a href="{{route('nursing')}}" class="btn btn-sm btn-primary mt-3">Learn More</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-box text-center">
                        <i class="fas fa-child"></i>
                        <h3>Pediatrics
                        </h3>
                        <p>Specialized medical care tailored for infants, children, and adolescents.</p>
                        <a href="{{route('pediatrics')}}" class="btn btn-sm btn-primary mt-3">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
<!-- Footer -->
