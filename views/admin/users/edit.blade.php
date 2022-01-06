@extends('admin.layouts.master')
@section('content')
{{-- {{route('edit'), $results->id}} --}}
{{-- @dd($results->id) --}}
<div class="content">
    <div class="row">
        <div class="col-sm-12 portlets">
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Contact</strong> Form</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form role="form" id="contactForm" action="{{route('edit', $results->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="users[name]" value="{{$results->name}}">
                      </div>
                      <div class="form-group">
                        <label>Email address</label>
                        <input type="text" class="form-control" name="users[email]" value="{{$results->email}}">
                      </div>
                      {{-- <div class="form-group">
                        <label>password</label>
                        <input type="text" class="form-control" name="users[password]" value="{{$results->password}}">
                      </div> --}}
                      <div class="form-group">
                        <label>Role</label>
                            <select class="form-control" name="users[is_admin]">
                             
                                
                                @if($results->is_admin == 1)
                                <option value="0" selected>Admin</option>
                                <option value="1" >User</option>
                                @else
                                <option value="0">Admin</option>
                                <option value="1" selected>User</option>
                                @endif
                            </select>
                      </div>
                     
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            
            
            {{-- <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Empty</strong> Validator</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form role="form" id="NotEmptyValidator">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username">
                      </div>
                      <div class="form-group">
                        <label>Country</label>
                            <select class="form-control" name="country">
                                <option value="">-- Select a country --</option>
                                <option value="fr">France</option>
                                <option value="de">Germany</option>
                                <option value="it">Italy</option>
                                <option value="jp">Japan</option>
                                <option value="ru">Russia</option>
                                <option value="gb">United Kingdom</option>
                                <option value="us">United State</option>
                            </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div> --}}
            
            {{-- <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Identical</strong> Validator</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form role="form" id="IdenticalValidator">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password">
                      </div>
                      <div class="form-group">
                        <label>Retype password</label>
                        <input type="text" class="form-control" name="confirmPassword">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Other</strong> Validations</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form role="form" id="OtherValidator">
                      <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control" name="ages">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div> --}}
            
        </div>
    </div>
    
                    
</div>
@endsection