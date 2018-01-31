@extends('layouts.layouts')
@section('custom_css')
<style>
    #header_bg{
        background:url({{ URL::asset('images/carpenter/paintkhareedo-layout_02.png') }}) no-repeat center center fixed; 
        background-size: cover;
        height:570px;
    }

</style>
<link href="{{ URL::asset('css/carpenter_css.css')}}" rel="stylesheet" media="all" type="text/css"/>

@endsection
@section('content')

<div  id="header_bg">
    <div class="bgsetting">
        <img src="{{ URL::asset('images/carpenter/24_service_03.png') }}" class="img-rounded img-responsive" width="134" height="134" alt="img"/>
    </div>
    <div class="bgtext">
        <h1 id="bgtext">Carpentry & Drywall</h1>
        <h3 align="right" id="bgtext" style="padding-right: 15px;">we do it all</h3>
    </div>
</div>
<!--Centre bar-->
<div class="centre_bar">
</div>
<!--our services-->
<div class="services_bg" <br><br><br>>
    <div id="services_text">
        <h1 align="right" id="no_margin">Our services</h1>
    </div><br><br><br><br>
    <div class="col-md-12 box_space ">
        <div class="col-md-2 boxes_bg">
            <div class="imgset">
                <img src="{{ URL::asset('images/carpenter/exterior_08.png')}}" class="img-circle img-responsive " width="87" height="87" alt="img"/>

            </div>
            <h1 align="center"> Exterior</h1>
            <P align="justify" style="color:#FFF">
                Building a deck provides instant drama to a home and can optimize the
                enjoyment of a home's views. Deck size and type should be determined by the activities that will take place on it
            </P>
        </div>

        <div class="col-md-1"></div>
        <div class="col-md-2 boxes_bg">
            <div class="imgset">
                <img src="{{ URL::asset('images/carpenter/office_08.png')}}" class="img-circle img-responsive" width="85" height="83" alt="img"/>
            </div>
            <h1 align="center"> Office</h1>
            <P align="justify" style="color:#FFF">
                Looking for unique pieces of furniture or office installations that are difficult
                or completely unobtainable on the market? Rezt & Relax Interior is pleased to


            </P>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2 boxes_bg">
            <div class="imgset">
                <img src="{{ URL::asset('images/carpenter/kitchen_08.png')}}" class="img-circle img-responsive" width="85" height="83" alt="img"/>
            </div>
            <h1 align="center"> Kitchen</h1>
            <P align="justify" style="color:#FFF">
                we are all you will need to have your dream kitchen fully fitted, house re-decorated,
                re-furbished or even to have your garden designed and
                constructed .
            </P>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2 boxes_bg" id="living_rm">
            <div class="imgset">
                <img src="{{ URL::asset('images/carpenter/living_room_08.png')}}" class="img-circle img-responsive" width="85" height="83" alt="img"/>
            </div>
            <h1 align="center"> Living room</h1>
            <P align="justify" style="color:#FFF">
                A typical Western living room may contain furnishings such as a sofa, chairs,
                occasional tables, coffee tables, bookshelves, electric lamps, rugs, or other furniture.
            </P>
        </div>
        <div class="col-md-1"></div>

    </div><br><br>

</div >
<!--portfolio-->
<div id="botttom_bar">
</div>
<div id="portfolio_bg">
    <div id="portfolio">
        <img src="{{ URL::asset('images/carpenter/portfolio_12.png')}}" class="img-responsive" width="435" height="112" alt="img"/>
    </div>
</div>
<div class="gallery_img">
    <div class="col-md-12 col-sm-12" id="gallery_div">
        <div class="col-md-7 col-sm-7">
            <img src="{{ URL::asset('images/carpenter/carp_1.jpg')}}" class="img-responsive" width="740" height="301" alt="img" id="imgrite"/>
        </div>
        <div class="col-md-5 col-sm-5" style="padding-left:0px; padding-right: 0px;">
            <img src="{{ URL::asset('images/carpenter/carp_2.jpg')}}" class="img-responsive" width="532"  alt="img" id="imgrite"/>
        </div>
    </div>

    <div class="col-md-12 col-sm-12" style="padding-top:20px;">
        <div class="col-md-3 col-sm-3" id="img_pading" >
            <img src="{{ URL::asset('images/carpenter/carp_3.jpg')}}" class="img-responsive" alt="img" id="img1"/>
        </div>
        <div class="col-md-2 col-sm-2" id="img_pading"  >
            <img src="{{ URL::asset('images/carpenter/carp_4.jpg')}}" class="img-responsive" alt="img" id="img2"/>
        </div>
        <div class="col-md-4 col-sm-4" id="img_pading" >
            <img src="{{ URL::asset('images/carpenter/carp_5.jpg')}}" class="img-responsive"  alt="img" id="img3"/>
        </div>
        <div class="col-md-3 col-sm-3" id="img_pading" >
            <img src="{{ URL::asset('images/carpenter/img6_12.png')}}" class="img-responsive"  alt="img" id="img4"/>
        </div>
    </div>
</div >


<div class="col-md-12 col-sm-12" id="try_us_car">
    <h1 id="try_h1" align="center">TRY US</h1>
</div>
<div class="col-lg-12 col-sm-12 " id="form_rbg_carp">
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


<div class="col-lg-12 col-sm-12" id="carp_img">
    <img src="{{ URL::asset('images/carpenter/carpenter_img.png')}}" class="img-responsive" width="148" height="171" alt="img" id="img_bottom"/>
</div>

<div class="col-lg-12 col-sm-12" align="center" id="support_bg_carp">
    <h1 id="support_carp">For Instant support</h1>
    <h1 id="support_carp">+92 42 35965529-30</h1>
    <h1 id="support_carp">info@paintkhareedo.com</h1>
</div>
@endsection