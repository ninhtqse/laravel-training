@extends('admin.layouts.master')
@section('content')

<div class="content">
            								
    <!-- Your awesome content goes here -->
    <div class="box-info box-messages animated fadeInDown">
        <div class="row">
            <!-- ENd div .col-md-2 -->
            
            
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-content padding">
                        <form role="form" class="form-horizontal" method="POST" action="{{route('create_blog')}}">
                            @csrf
                            
                            <div class="form-group">
                                <label class="control-label col-sm-1">Subject:</label>
                                <div class="col-sm-11">
                                    <input type="text" class="form-control input-invis" name="blog[title]">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <textarea class="summernote-small form-control" name="blog[content]"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-8">
                                    <button type="submit" class="btn btn-danger">Save</button>
                                </div>
                                
                            </div>	
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of your awesome content -->

    

                
</div>

@endsection