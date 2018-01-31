
@extends('layouts.layouts')
@section('custom_css')
    <style>
        #plum_banner{
            background:url({{ URL::asset('images/paintkhareedo-layout_02.png') }}) no-repeat ;
            padding-left:0px;
            padding-right:0px;
            background-size: cover;
            height:500px;
            width:100%;
        }

    </style>
        <link href="{{ URL::asset('css/plumber.css')}}" rel="stylesheet" media="all" type="text/css"/>
@endsection
@section('content')

    <div class=" col-lg-12  " id="plum_banner">
        <div id="top_space"></div>
        <div  id="plum_text">
            <h1 style="font-size:20px; padding-top:5px;">EXPERTS IN ALL AREAS OF<span style="color:#f8c140;"> PLUMBING</span> </h1>
            <!--<h1 align="right" style="font-size:20px;"><b> We Build Dreams...</b></h1>-->
        </div>
    </div>


    <div class=" col-lg-12 " id="yellow_clr" ></div>
    <div class="col-lg-12" style="background-color:#b7b5b5;">
        <img src="{{ URL::asset('images/paintkhareedo-layout3_06.png')}}" class="img-rounded img-responsive service_img"/>
    </div>
    <div class="col-lg-12 col-sm-12 dark_clr" >
        <div class="col-lg-3 col-sm-3">

            <h1 align="center" style="font-family:ubuntu;"> Heating</h1>
            <img src="{{ URL::asset('images/plumber/CENTRAL_HEATING.jpg')}}" width="350" height="330" class=" img-responsive" alt=" img"/>
        </div>
        <div class="col-lg-3 col-sm-3">
            <h1 align="center" style="font-family:ubuntu;"> Sewerage</h1>
            <img src="{{ URL::asset('images/plumber/SEWERAGE.jpg')}}" width="350" height="330" class=" img-responsive" alt=" img"/>
        </div>
        <div class="col-lg-3 col-sm-3">
            <h1 align="center" style="font-family:ubuntu;"> Plumbing</h1>
            <img src="{{ URL::asset('images/plumber/PLUMBING.jpg')}}" width="350" height="330" class=" img-responsive" alt=" img"/>
        </div>
        <div class="col-lg-3 col-sm-3">
            <h1 align="center" style="font-family:ubuntu;"> Sanitary</h1>
            <img src="{{ URL::asset('images/plumber/SANITARY.jpg')}}" width="350" height="330" class=" img-responsive" alt=" img"/>
        </div>

    </div>
    <div  align="center" class="col-lg-12" id="plum_port">
        <img src="{{ URL::asset('images/paintkhareedo-layout8_06.png')}}" class="img-responsive" alt="img" style="margin-top:-4%;"/>

    </div>


    <div class="col-lg-12 col-sm-12 dark_clr2">

        <div class="col-lg-4 col-sm-4" id="plum_gallery1"><img src="{{ URL::asset('images/plumber/portrait.jpg')}}"  class="img-responsive" id="img1_ht" />
            <!--<div class="best_work" align="center"><img src="New folder/images/construction_25.png"/></div>-->
        </div>
        <div class="col-lg-8 col-sm-8"id="plum_gallery4">
            <div class="col-lg-6 col-sm-6" id="plum_gallery2">

                <img src="{{ URL::asset('images/plumber/plum4.jpg')}}"  width="440" height="500" class="img-responsive" style="padding-right:10px;"/>
                <img src="{{ URL::asset('images/plumber/plum3.jpg')}}"  width="440"   height="500" class="img-responsive"  style="padding-top:20px; padding-right:10px;" id="img2_ht"/>


            </div>

            <div class="col-lg-6 col-sm-6" id="plum_gallery3">
                <img src="{{ URL::asset('images/plumber/plum2.jpg')}}"  width="440"   height="500" class="img-responsive" style="padding-right:10px;"/>

                <img src="{{ URL::asset('images/plumber/maxresdefault.jpg')}}"  width="440"  height="500"class="img-responsive"
                     style="padding-top:20px;padding-right:10px;"/>
            </div>


        </div>
    </div>


    <!--<div class="try_us col-lg-12 col-sm-12"><img src="New folder/images/construction_44.png" width="150" height="150" class="img-rounded img-responsive"/></div>
    </div>-->

    <div align="center" class="col-lg-12 col-sm-12"style="" id="plum_try">
        <img src="{{ URL::asset('images/paintkhareedo-layout14_31.png')}}" width="150" height="" class="img-responsive" alt="img" style="margin-top:-3%;"/>
    </div>


<div class="col-lg-12 col-sm-12 " id="form_rbg">
    <div id=" query_form" class=" col-lg-12 col-sm-12 query_form">
        <form enctype="multipart/form-data" method="post" id="query" >
            <input type="hidden" name="required" value="painter" />
            {{ csrf_field() }}
            <div class="col-xs-12">
                <div class="col-xs-2"></div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="ex3"><h1 style="color:#171515">Name</h1></label>
                        <input class="form-control list-inline input_style" name="name" id="ex3" type="text" style="background-color:#cdcbcc">
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <label for="ex3"><h1 style="color:#171515">Mobile</h1></label>
                        <input class="form-control list-inline  input_style" name="mobile" id="ex3" type="text" style="background-color:#cdcbcc" style="          height:20px"/>
                    </div>
                </div>
            </div>
            <div class="col-xs-2"></div>
            <div class="col-xs-12">
                <div class="col-xs-2"></div>
                <div class="col-xs-8">
                    <h1 style="color:#171515">Address</h1>
                    <div class="form-group">
                        <textarea class="form-control" name="description" rows="8" style=" background-color:#cdcbcc"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="col-xs-8"></div>
                <div class="col-xs-2">
                    <button type="button" class="btn btn-primary btn-lg btn_style send pull-right" id="btn_style" style="margin-left: -16px;">SEND</button>
                </div>
                <div class="col-xs-2"></div>
            </div>
        </form>
    </div>

    <div class="col-md-12 after_query" style="display:none;">
        <center><h3 class="support" style="font-size: 48px; font-weight: bold; margin-bottom: 70px;">Thanks for contacting us, Our Support team will contact you shortly.</h3></center>
    </div>

    <div class="col-lg-offset-2 col-md-8">
        <div class="alert alert-danger queryAlert" id="queryAlert" style="margin-top: 10px;margin-left: 10px;display: none;">
            <strong>Failed!</strong> Please fill the form completly and send again.
        </div>
    </div>

</div>

<div class="col-lg-12 col-sm-12" align="center" id="support_bg_plum">
    <h1 id="support_plum">For Instant support</h1>
    <h1 id="support_plum">+92 42 35965529-30</h1>
    <h1 id="support_plum">info@paintkhareedo.com</h1>
</div>
@endsection