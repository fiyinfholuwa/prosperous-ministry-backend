@extends('admin.app')

@section('title', 'Add Blog')
@section('page', 'Add Blog')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                <div class="col-xl-10 col-lg-10 col-sm-12  layout-spacing card" style="padding: 30px;">

                    <div class="widget-content widget-content-area br-6">
                        <div class="row">
                            <div class="col-lg-12">
{{--                                <h5 style="margin-bottom: 30px;">Add Blog</h5>--}}
                                <form action="{{route('admin.add.blog')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <div class="col-lg-12 mt-3">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Enter Title">
                                            @error('title')
                                            <p style="color: red; font-size:10px; font-weight: bolder">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <label>Read Time</label>
                                            <select name="read_time" class="form-control">
                                                <option value="">select option</option>
                                                <option value="1">1 minute</option>
                                                <option value="2">2 minutes</option>
                                                <option value="3">3 minutes</option>
                                                <option value="4">4 minutes</option>
                                                <option value="5">5 minutes</option>
                                                <option value="6">6 minutes</option>
                                            </select>
                                            @error('read_time')
                                            <p style="color: red; font-size:10px; font-weight: bolder">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="col-lg-4 mt-3">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="">select option</option>
                                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                            @error('status')
                                            <p style="color: red; font-size:10px; font-weight: bolder">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="col-lg-4 mt-3">
                                            <label>Category</label>
                                            <select name="category_id" class="form-control">
                                                <option value="">select option</option>
                                                @if(count($categories) > 0)
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    <option value="">No Post Category</option>
                                                @endif
                                            </select>
                                            @error('category_id')
                                            <p style="color: red; font-size:10px; font-weight: bolder">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="col-lg-12 mt-3">
                                            <label>Image</label>
                                            <input type="file" class="form-control" accept="*/image" name="image">
                                            @error('image')
                                            <p style="color: red; font-size:10px; font-weight: bolder">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <textarea id="editor" name="body" class="form-control" rows="10">{{old('body')}}</textarea>
                                            @error('body')
                                            <p style="color: red; font-size:10px; font-weight: bolder">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit"  class="btn btn-primary">Add Blog</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

@endsection
