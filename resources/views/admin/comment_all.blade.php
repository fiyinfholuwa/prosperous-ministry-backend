
@extends('admin.app')
@section('title' , 'Manage Comments')
@section('page' , 'Manage Comments')

@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing card" style="padding: 30px;">

                    <div class="widget-content widget-content-area br-6 table-responsive">
{{--                        <h6></h6>--}}

                        <table id="my-table" class="table dt-table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Post Title</th>
                                <th>Name</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th class="no-content">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{optional($comment->blog_info)->title}}</td>
                                    <td>{{$comment->name}}</td>
                                    <td>{{$comment->comment}}</td>
                                    <td>{{ $comment->created_at->format('d, M, Y') }}</td>

                                    <td>
                                        <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_comment_{{$comment->id}}" ><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @include('admin.modals.comment')
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>

            </div>

        </div>

@endsection
