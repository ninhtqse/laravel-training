@extends('admin.layouts.master')
@section('content')
    <div class="content">
        <!-- Your awesome content goes here -->
        <div class="row">
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header transparent">
                        <h2><strong>Toolbar</strong> CRUD Table</h2>
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
                                    {{-- href="{{router('get_create')}}" --}}
                                </div>
                                <div class="col-md-8">
                                    <div class="toolbar-btn-action">
                                        <a class="btn btn-success" href="{{ route('get_create') }}" ><i class="fa fa-plus-circle"></i> Add new</a>
                                        {{-- <a class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
                                        <a class="btn btn-primary"><i class="fa fa-refresh"></i> Update</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table data-sortable class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Full Name</th>
                                    <th>Location</th>
                                    <th>Date of birth</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th data-sortable="false">Option</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($results as $key => $result)
                                    <tr>
                                        <td>{{$result->id}}</td><td><strong>{{$result->name}}</strong></td>
                                        <td>Yogyakarta, Indonesia</td><td>January 01, 1985</td>
                                        <td><a href="mailto:#">{{$result->email}}</a></td>

                                        @if ($result->is_admin == 1)
                                            <td>Admin</td>
                                        @else
                                            <td>User</td>
                                        @endif
                                        <td>123</td>
                                        <td><span class="label label-success">Active</span></td>
                                        <td>
                                            <div class="btn-group btn-group-xs">

                                                @if ($result->active == 0)
                                                    <a data-toggle="tooltip" title="Lock User" class="btn btn-default" href="{{route('lock_user', [$result->id, 1])}}"><i class="fa fa-power-off"></i></a>
                                                @else
                                                    <a data-toggle="tooltip" title="Active User" class="btn btn-default" href="{{route('lock_user', [$result->id, 0])}}"><i class="fa fa-power-off"></i></a>
                                                @endif
                                                <a data-toggle="tooltip" title="Edit" class="btn btn-default" href="{{route('get_edit', $result->id)}}"><i class="fa fa-edit"></i></a>
                                                <a data-toggle="tooltip" title="Delete" class="btn btn-default" href="{{route('delete_user', $result->id)}}"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach




                                </tbody>
                            </table>
                        </div>

                        <div class="data-table-toolbar">
                            {!!@h_paginate($results)!!}
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>


@endsection
