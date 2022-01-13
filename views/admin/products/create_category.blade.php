@extends('admin.layouts.master')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-sm-12 portlets">
                <div class="widget">
                    <div class="widget-header transparent">
                        <h2><strong>Category</strong> Form</h2>
                        <div class="additional-btn">
                            <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                            <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                            <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                        </div>
                    </div>
                    {{-- @dd($errors->has('users.name')) --}}
                    <div class="widget-content padding">
                        <form role="form" id="contactForm" action="{{route('create_category')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="categories[name]" >
                            </div>

                            <div class="form-group">
                                <label>Category Parent</label>
                                <select class="form-control" name="categories[parent_id]">
                                    <option checked value="" >No category parent</option>
                                    @foreach ($results as $key => $result)
                                        <option value="{{$result->id}}" >{{$result->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>




            </div>
        </div>


    </div>
@endsection
