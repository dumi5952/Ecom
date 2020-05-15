@extends('backEnd.layouts.master')
@section('title','Dashboard')
@section('content')
    <!--breadcrumbs-->
    <div class="container-fluid">
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-flat-color-1">
                    <div class="inner">
                        <?php

                        $orderCount = DB::table('orders')->where('id')->count()
                        ?>
                        <h3>{{$orderCount}}</h3>


                      <p>Total Orders</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
        <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                        <?php
                            $val = "success";
                        $orderCount = DB::table('orders')->where('order_status',$val)->get()->count()
                        ?>
                      <h3>{{$orderCount}}</h3>

                      <p>completed Orders</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <?php
                            $val = "Processing";
                        $orderCount = DB::table('orders')->where('order_status',$val)->get()->count()
                        ?>
                      <h3>{{$orderCount}}</h3>

                      <p>New Orders</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">

                        <?php
                         use Carbon\Carbon;
                         $date=Carbon::now()->format('Y-m-d');
                            $orderCount = DB::table('orders')->where('created_at',$date)->get()->count()

                        ?>
                      <h3>{{$orderCount}}</h3>

                      <p>Today Orders</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
        </div>
    </section>
    <div class="container-fluid">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>List Orders</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>Order no</th>
                        <th>Customer Name</th>
                        <th>Adress (Shipping)</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Pin code</th>
                        <th>District</th>
                        <th>Telephone No</th>
                        <th>Payment ammount</th>
                        {{-- <th>Items name</th> --}}
                        <th>Payment type</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $ord )

                            <tr class="gradeC">
                                <td>{{$ord ->id}}</td>
                                <td>{{$ord ->name}}</td>
                                <td style="text-align: center;">{{$ord->address}}</td>
                                <td style="text-align: center;">{{$ord->city}}</td>
                                <td style="text-align: center;">{{$ord->state}}</td>
                                <td style="text-align: center;">{{$ord->pincode}}</td>
                                <td style="text-align: center;">{{$ord->country}}</td>
                                <td style="text-align: center;">{{$ord->mobile}}</td>
                                <td style="text-align: center;">{{$ord->grand_total}}</td>
                                <td style="text-align: center;">{{$ord->payment_method}}</td>
                                <td style="text-align: center;">{{$ord->order_status}}</td>
                                <td style="text-align: center;">
                                    <a href="" class="btn btn-primary btn-mini">Update Order status</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    {{-- <tbody>
                        <tr class="gradeC">
                            <td>1</td>
                            <td>Gayan Perera</td>
                            <td>Negombo RD, Kurunegala</td>
                            <td>0776969365</td>
                            <td>Rs.150</td>
                            <td> burger large, Milk Shake</td>
                            <td>Paypal</td>
                            <td>pending</td>
                            <td style="text-align: center;">
                                <a href="#" class="btn btn-primary btn-mini">Edit</a>
                                <a href="javascript:" rel="{{$errors->id}}" rel1="delete-category" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                            </td>
                        </tr>
                        <tr class="gradeC">
                            <td>2</td>
                            <td>Manawadu Malka</td>
                            <td>peradeniya rd, Kandy</td>
                            <td>0776562225</td>
                            <td>Rs.1000</td>
                            <td> burger large, chicken bucket</td>
                            <td>Cod</td>
                            <td>pending</td>
                            <td style="text-align: center;">
                                <a href="#" class="btn btn-primary btn-mini">Edit</a>
                                <a href="javascript:" rel="{{$errors->id}}" rel1="delete-category" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                            </td>
                        </tr>
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>
@endsection
@section('data-chart')
<?php

$dataPoints = array(
	array("label"=> 1997, "y"=> 254722.1),
	array("label"=> 1998, "y"=> 292175.1),
	array("label"=> 1999, "y"=> 369565),
	array("label"=> 2000, "y"=> 284918.9),
	array("label"=> 2001, "y"=> 325574.7),
	array("label"=> 2002, "y"=> 254689.8),
	array("label"=> 2003, "y"=> 303909),
	array("label"=> 2004, "y"=> 335092.9),
	array("label"=> 2005, "y"=> 408128),
	array("label"=> 2006, "y"=> 300992.2),
	array("label"=> 2007, "y"=> 401911.5),
	array("label"=> 2008, "y"=> 299009.2),
	array("label"=> 2009, "y"=> 319814.4),
	array("label"=> 2010, "y"=> 357303.9),
	array("label"=> 2011, "y"=> 353838.9),
	array("label"=> 2012, "y"=> 288386.5),
	array("label"=> 2013, "y"=> 485058.4),
	array("label"=> 2014, "y"=> 326794.4),
	array("label"=> 2015, "y"=> 483812.3),
	array("label"=> 2016, "y"=> 254484)
);

?>
@endsection

@section('chart-display')
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
@endsection
@section('chart')
<script>
    window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        //theme: "light2",
        title:{
            text: "Salmon Production - 1997 to 2006"
        },
        axisX:{
            crosshair: {
                enabled: true,
                snapToDataPoint: true
            }
        },
        axisY:{
            title: "in Metric Tons",
            crosshair: {
                enabled: true,
                snapToDataPoint: true
            }
        },
        toolTip:{
            enabled: false
        },
        data: [{
            type: "area",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();

    }
    </script>
@endsection
@section('jsblock')
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="{{asset('js/excanvas.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{asset('js/jquery.flot.min.js')}}"></script>
    <script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.dashboard.js')}}"></script>
    <script src="{{asset('js/jquery.gritter.min.js')}}"></script>
    <script src="{{asset('js/matrix.interface.js')}}"></script>
    <script src="{{asset('js/matrix.chat.js')}}"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script src="{{asset('js/jquery.wizard.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.popover.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="{{asset('js/matrix.form_validation.js')}}"></script>




    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {

            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {

                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                    resetMenu();
                }
                // else, send page to designated URL
                else {
                    document.location.href = newURL;
                }
            }
        }

        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
@endsection
