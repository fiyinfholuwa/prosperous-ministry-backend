
@extends('admin.app')

@section('title', 'Manage Blog')
@section('page', 'Manage Blog')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing card" style="padding: 30px;">

                    <div class="widget-content widget-content-area br-6 table-responsive">
{{--                        <h6>Manage Blogs</h6>--}}

                        <table id="my-table" class="table dt-table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Read Time</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th class="no-content">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{optional($blog->category_info)->name}}</td>
                                    <td>{{$blog->read_time}}Minutes</td>
                                    <td><img height="40px" width="60px" src="{{asset($blog->image)}}" alt="image"></td>
                                    <td>
                                        @if($blog->status == '1')
                                            <span class="btn bg-light-success">Active</span>
                                        @else
                                            <span class="btn bg-light-warning">InActive</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{route('admin.blog.edit', $blog->id)}}" class="btn btn-info btn-sm" ><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_blog_{{$blog->id}}" ><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @include('admin.modals.blog')

                            @endforeach


                            </tbody>

                        </table>
                    </div>
                </div>

            </div>

        </div>

@endsection
