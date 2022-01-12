@extends('admin.layouts.master')
@section('content')

    <div class="content">
        <!-- Your awesome content goes here -->

        <div class="row">
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header transparent">
                        <h2><strong></strong> CRUD Table</h2>
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
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th data-sortable="false">Option</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($results as $key => $result)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td><a href="mailto:#">{{$result->name}}</a></td>
                                        <td>{{$result->price}}</td>
                                        <td>{{$result->product->category->name}}</td>
                                        <td>
                                            <div class="btn-group btn-group-xs">
                                                <a data-toggle="tooltip" title="Edit" class="btn btn-default" href="{{route('get_edit_product', $result->id)}}"><i class="fa fa-edit"></i></a>
                                                <a data-toggle="tooltip" title="Delete" class="btn btn-default" href="{{route('delete_user', $result->id)}}"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach




                                </tbody>
                            </table>
                        </div>

                        <div class="data-table-toolbar">
                            {!!h_paginate($results)!!}
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>


@endsection
