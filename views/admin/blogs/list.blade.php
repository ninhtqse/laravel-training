@extends('admin.layouts.master')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header transparent">
                        <h2><strong>Blogs</strong></h2>
                        <div class="additional-btn">
                            <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                            <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                            <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                        </div>
                    </div>
                    <div class="widget-content">
                        <div class="data-table-toolbar">
                            <div class="row">
                                <div class="col-md-4">
                                    <form role="form">
                                        <input type="text" class="form-control" placeholder="Search...">
                                    </form>
                                </div>
                                <div class="col-md-8">
                                    <div class="toolbar-btn-action">
                                        <a class="btn btn-success" href="{{ route('get_create_blog') }}" ><i class="fa fa-plus-circle"></i> Add new</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table data-sortable class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Creator</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($blogs as $key => $blog)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td><strong>{{$blog->title}}</strong></td>
                                        <td>{{$blog->user->name}}</td>
                                        <td>
                                            <div class="btn-group btn-group-xs">
                                                <a data-toggle="tooltip" title="Edit" class="btn btn-default" href="{{route('get_edit_blog', $blog->id)}}"><i class="fa fa-edit"></i></a>
                                                <a data-toggle="tooltip" title="Delete" class="btn btn-default" href="{{route('delete_blog', $blog->id)}}"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="data-table-toolbar">
                            {!!h_paginate($blogs)!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
