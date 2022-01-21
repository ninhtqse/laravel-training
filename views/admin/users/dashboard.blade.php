@extends('admin.layouts.master')
@section('content')

 <div class="content-wrapper">
  

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
<div class="col-md-8">
  <div class=" panel-widget widget Nexus-stats clearfix" style="height:435px;">

    <div class="col-sm-12" style="height:435px;">
      <h4 class="title">Sales Report</h4>
      
       <div id="rickshaw-timescale" class="bigchart"></div>
          <div id="slider"></div>
    </div>
    <div class="right">
     
      <!-- start stats -->
      <ul class="widget-block-list clearfix">
        <li class="col-4"><div class="block"><span>10547</span>Coreldraw</div><//li>
        <li class="col-4"><div class="block"><span>8795</span>Photoshop</i></div></li>
        <li class="col-4"><div class="block"><span>656</span>Illustrator</i></div></li>
      </ul>
      <!-- end stats -->
    </div>


  </div>
</div>

<div class="col-md-4">
           
          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
             <h3 class="box-title">Order Graph</h3>
              <div class="box-tools pull-right">
                <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body border-radius-none">
              <div class="chart" id="line-chart1" style="height: 250px;"></div>
            </div><!-- /.box-body -->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #333333">
                  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#1ab394">
                  <div class="knob-label">Mail-Orders</div>
                </div><!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #333333">
                  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#1ab394">
                  <div class="knob-label">Online</div>
                </div><!-- ./col -->
                <div class="col-xs-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#1ab394">
                  <div class="knob-label">In-Store</div>
                </div><!-- ./col -->
              </div><!-- /.row -->
            </div><!-- /.box-footer -->
          </div><!-- /.box -->
          </div>
      </div>

      @endsection