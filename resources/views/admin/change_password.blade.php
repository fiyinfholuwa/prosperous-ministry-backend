
@extends('admin.app')
@section('title' , 'Change Password')
@section('page' , 'Change Password')

@section('content')
    <div id="content" class="main-content">
        <div class="col-xl-6 col-lg-6 col-sm-12  layout-spacing card" style="padding: 30px;">
             <section id="multiple-column-form">
                        <div class="card-body">
                            <form action="{{route('user.password.change')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-2">
                                    <label for="email2">Old Password</label>
                                    <input type="password" class="form-control" id="email2" required name="old_password" placeholder="Enter Old Password">
                                    <small style="color:red; font-weight:500">
                                        @error('old_password')
                                        {{$message}}
                                        @enderror
                                    </small>

                                </div>

                                <div class="form-group mt-2">
                                    <label for="email2">New Password</label>
                                    <input type="password" class="form-control" id="email2" required name="new_password" placeholder="Enter New Password">
                                    <small style="color:red; font-weight:500">
                                        @error('new_password')
                                        {{$message}}
                                        @enderror
                                    </small>

                                </div>

                                <div class="form-group mt-2">
                                    <label for="email2">New Password</label>
                                    <input type="password" class="form-control" id="email2" required name="new_password_confirmation" placeholder="Enter New Password  Confirmation">
                                    <small style="color:red; font-weight:500">
                                        @error('new_password_confirmation')
                                        {{$message}}
                                        @enderror
                                    </small>

                                </div>
                                <div class="card-action mt-4">
                                    <button class="btn btn-primary">Change Password</button>

                                </div>
                            </form>
                        </div>

                </section>
                <!-- Basic Floating Label Form section end -->

            </div>

        </div>

@endsection
