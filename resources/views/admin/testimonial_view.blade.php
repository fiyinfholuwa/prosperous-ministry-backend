

@extends('admin.app')

@section('title', 'Add Testimonial')
@section('page', 'Add Testimonial')
@section('content')

  <main id="main" class="main">

  <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
{{--              <h5 class="card-title"></h5>--}}
              <div class="">

              <form method="post" action="{{route('admin.testimonial.save')}}" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-md-6 col-lg-12">
                  <label for="inputName5" class="form-label">Full Name</label>
                  <input type="text" name="full_name" value="{{old('full_name')}}" class="form-control" placeholder="Full Name" id="inputName5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('full_name')
                    {{$message}}
                  @enderror
                  </p>
                </div>
                <div class="col-md-6 col-lg-12">
                  <label for="inputName5" class="form-label">Image</label>
                  <input type="file" name="image"  class="form-control" id="inputName5">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('image')
                    {{$message}}
                  @enderror
                  </p>
                </div>

                  <div class="col-md-12">
                      <label for="inputCity" class="form-label">Testimonial Type</label>
                      <select required name="type" class="form-control">
                          <option value="">Select Option</option>
                          <option value="text">text</option>
                          <option value="link">link</option>
                      </select>
                      <p style="font-weight:bold; color:red; font-size:12px;">
                          @error('type')
                          {{$message}}
                          @enderror
                      </p>
                  </div>


              <div class="form-group">
                  <label for="inputCity" class="form-label">Testimonial Content (optional)</label>
                  <textarea rows="5" placeholder="Testimonial Content" class="form-control" name="body"></textarea>
              </div>
                <div class="col-md-12">
                  <label for="inputCity" class="form-label">Testimonial Link (optional)</label>
                  <input type="text" name="link" value="{{old('link')}}" class="form-control" id="inputCity" placeholder="Enter Testimonial Link">
                  <p style="font-weight:bold; color:red; font-size:12px;">
                  @error('link')
                    {{$message}}
                  @enderror
                  </p>
                </div>

                <div class="">
                  <button type="submit" class="btn btn-primary">Add Testimonial</button>
                </div>
              </form><!-- End Multi Columns Form -->


            </div>
          </div>


            </div>
          </div>

        </div>
      </div>
    </section>



  </main><!-- End #main -->
@endsection
