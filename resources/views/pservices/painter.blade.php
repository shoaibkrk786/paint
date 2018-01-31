@extends('layouts.layouts')
@section('custom_css')

@endsection
@section('content')

<div id="hom_slid_marg">
    <img src="{{ URL::asset('images/11111.jpg') }}" height="511" width="100%" class="img-responsive" alt="img"/>
</div>
<h1 align="center" style="color:#FB1014" >OUR BEST WORK</h1>
<div  class="body_bg">
    <img src="{{ URL::asset('images/services/images/services_img2_04.png') }}" height="487" width="100%" class="img-responsive" alt="img"/>

    <div class="col-md-12 body_bg_id">
        <div class="col-md-3 col-sm-6" style="padding-top: 10px;>
            <a href="#" ><img src="{{ URL::asset('images/services/images/painter1.jpg') }}" height="177" width="300" class="img-responsive"           alt="img"/></a>
        </div>
        <div class="col-md-3" style="padding-top: 10px;>
            <a href="#" ><img src="{{ URL::asset('images/services/images/painter5.jpg') }}" height="177" width="300" class="img-responsive" alt="img"/></a>
        </div>
        <div class="col-md-3 col-sm-6" style="padding-top: 10px;>
            <a href="#" ><img src="{{ URL::asset('images/services/images/painter3.jpg') }}" height="177" width="300" class="img-responsive" alt="img"/></a>
        </div>
        <div class="col-md-3" style="padding-top: 10px;>
            <a href="#" ><img src="{{ URL::asset('images/services/images/painter4.jpg') }}" height="177" width="300" class="img-responsive" alt="img"/></a>
        </div>
    </div>
    <div class="col-md-12 body_bg_id2">
        <br>
        <div class="col-md-3 col-sm-6" style="padding-top: 10px;">
            <a href="#" ><img src="{{ URL::asset('images/services/images/painter2.jpg') }}" height="177" width="300" class="img-responsive" alt="img"/></a>
        </div>
        <div class="col-md-3" style="padding-top: 10px;>
            <a href="#" ><img  src="{{ URL::asset('images/services/images/painter9.jpg') }}" height="177" width="300" class="img-responsive" alt="img"/></a>
        </div>
        <div class="col-md-3 col-sm-6" style="padding-top: 10px;>
            <a href="#" ><img id="p_img" src="{{ URL::asset('images/services/images/painter6.jpg')}}" height="177" width="300" class="img-responsive" alt="img"/></a>
        </div>
        <div class="col-md-3" style="padding-top: 10px;>
            <a href="#" ><img id="p_img" src="{{ URL::asset('images/services/images/painter8.jpg')}}" height="177" width="300" class="img-responsive" alt="img"/></a>
        </div>
    </div>
</div>
<div  class="bgclr">
</div>
<div class="col-md-12" id="form_bg">
    <div id="try_us">

        <img src="{{ URL::asset('images/services/images/try_us_04.png')}}"  class=" img-circle img-responsive" alt="Cinque Terre" width="150"  >
    </div>
    <div id="query_form" class="query_form">
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
                    <button type="button" class="btn btn-primary btn-lg btn_style send pull-right" style="margin-left: -16px;">SEND</button>
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

<div id="support_paint" style="background-color: darkgrey">
    <h1 class="support">For Instant support</h1>
    <h1 class="support">+92 42 35965529-30</h1>
    <h1 class="support">info@paintkhareedo.com</h1>
</div>
@endsection