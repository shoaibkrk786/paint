@extends('layouts.layouts')
@section('custom_css')
    <style>
        #cons_banner{
            background:url({{ URL::asset('images/architecture/0.2.jpg') }}) no-repeat center center fixed;
            background-size: cover;
            padding-left:0px;
            padding-right:0px;
            background-size: cover;
            height:500px;
            width:100%;
        }

    </style>
    <link href="{{ URL::asset('css/constraction.css')}}" rel="stylesheet" media="all" type="text/css"/>

@endsection
@section('content')

    <div class=" col-lg-12  " id="cons_banner">
        <div id="top_space"></div>
        <div  id="cons_text">
            <h1 style="font-size:20px;">We Don't Just Construct Buildings... </h1>
            <h1 align="right" style="font-size:20px;"><b> We Build Dreams...</b></h1>
        </div>
    </div>


    <div class=" col-lg-12 " id="purple" ></div>
    <div class="col-lg-12" style="background-color:#b7b5b5;">
        <img src="{{ URL::asset('images/architecture/construction_11.png')}}" class="img-rounded img-responsive service_img"/>
    </div>
    <div class="col-lg-12 col-sm-12 dark_clr" >
        <div class="col-lg-3 col-sm-3">
            <h1 align="center" style="font-family: Ubuntu;">Corporate</h1>
            <img src="images/architecture/01.jpg" width="350" height="330" class="img-responsive" alt="img" />

        </div>
        <div class="col-lg-3 col-sm-3">
            <h1 align="center" style="font-family: Ubuntu;">Interior</h1>
            <img src="images/architecture/04.jpg" width="350" height="330" class="img-responsive" alt="img" />
        </div>
        <div class="col-lg-3 col-sm-3">
            <h1 align="center" style="font-family: Ubuntu;">Residential</h1>
            <img src="images/architecture/03.jpg" width="350" height="330" class="img-responsive" alt="img" />

        </div>
        <div class="col-lg-3 col-sm-3">
            <h1 align="center" style="font-family: Ubuntu;">Restoration</h1>
            <img src="images/architecture/02.jpg" width="350" height="330" class="img-responsive" alt="img" />
        </div>

    </div>
    <div  align="center" class="col-lg-12" id="arch_port">
        <img src="{{ URL::asset('images/architecture/construction_06.png')}}" class="img-responsive" alt="img" style="margin-top:-4%;"/>

    </div>


    <div class="col-lg-12 col-sm-12 dark_clr2">

        <div class="col-lg-4 col-sm-4" id="arch_gallery1"><img src="{{ URL::asset('images/architecture/construction_27.png')}}" width="390"
                                                               class="img-responsive" id="img1_ht" />
            <!--<div class="best_work" align="center"><img src="New folder/images/construction_25.png"/></div>-->
        </div>
        <div class="col-lg-8 col-sm-8"id="arch_gallery4">
            <div class="col-lg-6 col-sm-6" id="arch_gallery2">

                <img src="{{ URL::asset('images/architecture/arch3.jpg')}}" width="412" height="350" class="img-responsive"  style="padding-right:10px;"/>
                <img src="{{ URL::asset('images/architecture/arch4.jpg')}}" width="412" class="img-responsive"  style="padding-top:20px; padding-right:10px;" id="img2_ht"/>


            </div>

            <div class="col-lg-6 col-sm-6" id="arch_gallery3">
                <img src="{{ URL::asset('images/architecture/arch2.jpg')}}" width="412" height="350" class="img-responsive" style="padding-right:10px;"/>

                <img src="{{ URL::asset('images/architecture/arch1.jpg')}}" width="412" height="350" class="img-responsive"
                     style="padding-top:20px;padding-right:10px;"/>
            </div>


        </div>
    </div>


    <!--<div class="try_us col-lg-12 col-sm-12"><img src="New folder/images/construction_44.png" width="150" height="150" class="img-rounded img-responsive"/></div>
    </div>-->

    <div align="center" class="col-lg-12 col-sm-12"style="" id="arch_try">
        <img src="{{ URL::asset('images/architecture/construction_44.png')}}" width="150" height="" class="img-responsive" alt="img" style="margin-top:-4%;"/>
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

    <div class="col-lg-12 col-sm-12" id="support_bg">
        <h1 id="support_arch">For Instant support</h1>
        <h1 id="support_arch">+92 42 35965529-30</h1>
        <h1 id="support_arch">info@paintkhareedo.com</h1>
    </div>
@endsection