<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="google-site-verification" content="wDVjDLQ_4xEEVHVX-O5O_cKWfVvXgZgaurawcTDJhjQ" />
        <link rel="icon" href="{{ URL::asset('images/shades/new_pk.png')}}" type="image/gif" sizes="32x32">
        <link rel="stylesheet" href="{{ URL::asset('Font-Awesome-master/Font-Awesome-master/css/font-awesome.min.css')}}" type="text/css">
        <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('css/shopingcart.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('css/header_pk.css')}}" rel="stylesheet" media="all" type="text/css"/>
        <script src="{{ URL::asset('js/jquery.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/validator.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/jquery-ui.js')}}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.css')}}">
        <link href="{{ URL::asset('css/cart_css.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('css/Cart_Page.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('css/slidebr_paintkhareedo.css')}}" rel="stylesheet" type="text/css"/>
        <title>
            Paint Khareedo- ICI dulux, Berger, Brighto, Brolac, Diamond, Nippon, Jotun,Master Paints</title>
        <style>
            #bgnews {
                height: 340px;
                width: 100%;
                background: url({{ URL::asset('images/footer_new_02.png') }}) no-repeat center center fixed;
            background-size: cover;
            }
            .sugesstionbox{
                border-bottom: 2px solid black;
            }

            .sugImg{
                margin-right:20px;
            }

            .dropdown {
                /*    background:#fff;
                    border:1px solid #ccc;
                    border-radius:4px;
                    width:300px;    */
            }
            .ui-autocomplete{
               margin-top:50px;
            }

            .nav .open>a, .nav .open>a:focus, .nav .open>a:hover{

            }

            .dropdown-menu>li>a {
                color:#428bca;
            }
            .dropdown ul.dropdown-menu {
                border-radius:4px;
                box-shadow:none;
                margin-top:20px;
                width:300px;
            }
            .dropdown ul.dropdown-menu:before {
                content: "";
                border-bottom: 10px solid #fff;
                border-right: 10px solid transparent;
                border-left: 10px solid transparent;
                position: absolute;
                top: -10px;
                right: 16px;
                z-index: 10;
            }
            .dropdown ul.dropdown-menu:after {
                content: "";
                border-bottom: 12px solid #ccc;
                border-right: 12px solid transparent;
                border-left: 12px solid transparent;
                position: absolute;
                top: -12px;
                right: 14px;
                z-index: 9;
            }
            .commonLogo{
                width: 35px;
                float: left;
                height: 32px;
                margin-right: 8px;
                margin-top: -5px;
            }
            .sp_loader {
                position: fixed;
                top: 50%;
                left: 50%;
                margin-left: -50px; /* half width of the spinner gif */
                margin-top: -50px; /* half height of the spinner gif */
                text-align:center;
                z-index:1234;
                overflow: auto;
                width: 100px; /* width of the spinner gif */
                height: 102px; /*hight of the spinner gif +2px to fix IE8 issue */
            }

        </style>
        <script>
var ajax_url = '/';

function ajx(url, type, data, successCallback, dataType) {
    if (dataType == '' || dataType == undefined)
        dataType = 'json';
    $.ajax({
        url: url,
        type: type,
        data: data,
        dataType: dataType,
        headers: {
            //'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
            .done(successCallback)
            .fail(function (res) {
                //(res);
            });
}

function jumpTo(c) {

    $nh = 125;
    $h = $("#sitemapfltr").height() + $(".Topc").height() + $(".active #pagers").height() + $nh;
    $scrollTop = $(window).scrollTop();
    $sh = $("#sitemapfltr").height() + $(".TopC").height() + $(".pagers").height() + 20;
    if ($scrollTop < $sh) {
        $n = 52;
    } else {
        $n = 0;
    }
    $('html, body').animate({
        scrollTop: $('#' + c).offset().top - $n - $h
    }, 10000);
}
function jumToBody() {
    $("html, body").animate({
        scrollTop: 200
    }, 1000);

}

function jumToBodyTop() {
    $("html, body").animate({
        scrollTop: 0
    }, 1000);

}


function get_basket()
{
    
       var params = {};
        
        var url = ajax_url + 'get-basket';

    var params = {};

    var url = ajax_url + 'get-basket';

    var successCallback = function (res) {
        $(".kahreedo_basketDiv").html(res);
        jumToBodyTop();
    };

    ajx(url, 'get', params, successCallback, 'html');

}

$( function() {


    $(document).on("click","#cart", function() {
        $(".shopping-cart").fadeToggle( "slow");
    });

    $( "#tag" ).autocomplete({
        source:'/searchdata',
        html: true,
        // minLength: 1,
        // autoFocus:true,
        select:function(e, ui){
            //console.log(ui.item.value)
            return false;
        }
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        return $("<li class='autoLi'></li>")
                .data("item.autocomplete", item)
                //  .append("<a href ='brand-shades/"+ item.id +"' >" + item.label + "</a>")
                // .append("<img align='left' src="+ item.pic +" height='40' >"+
                //                "<hr>"
                //)
                /*  .append("<div class='col-md-12 sugesstionbox'>"+
                 "<img class='sugImg' src='"+ item.pic +"'  height='40'><a href ='brand-shades/"+ item.id +"' class =''>"+item.label +"</a>"+
                 "</div>"
                 )*/
                .append(
                        "<a href="+ajax_url+"brand-shades/"+ item.id +" style='color: black'><div class='col-lg-6 col-md-12 col-sm-12' id='search_sm_width' style='opacity:0.75;background-color:white; width:520px; height:auto;border: 0; padding-bottom: 5px; padding-top: 5px; border-bottom: 1px solid red; margin-right: 10px;: '>"+
                        "<div class='col-lg-2 col-md-2' style='width:13%'>"+
                        "<img src='" +ajax_url+ item.pic + "' height='100' width='100'/>"+
                        "</div>"+
                        "<div class='col-lg-2 col-md-2' style='width:70%; margin-left: 57px; margin-top: 10px;'>"+
                        "<p><b> "+item.label +" </b></p>"+
                        "<h4 > Category:<span style='color:#C00;'>"+ item.ca +"</span> </h4>"+
                        "</div>"+
                        "<div class='col-lg-2 col-md-2  pull-right' style='margin-right: 30px;'>"+
                        "<a href="+ajax_url+"brand-shades/"+ item.id +"><button type='button' class='btn btn-info btn-sm ' id='view_btn' style='background-color:#C00;'>view more</button> </a>"+
                        "</div>"+
                        "</div>"+
                         "</a>"


                )
                .appendTo(ul);
    };
} );
$(document).ready(function(){
    $("#spinner").bind("ajaxSend", function() {
        $(this).show();
    }).bind("ajaxStop", function() {
        $(this).hide();
    }).bind("ajaxError", function() {
        $(this).hide();
    });

});


        </script>
        @yield('custom_css')
    </head>

    <body>
    <div id="spinner" class="sp_loader" style="display: none">
        <img src="{{ URL::asset('images/loader.gif')}}" alt="Loading" />
    </div>
        <!--bar line-->

        <!--header-->
        <div class="container" id="ctn_width">

            <div class="col-lg-12 col-md-12 col-sm-12 menubar" data-spy="affix" style="z-index: 100;background-color: white; left: 0px">
                <div  id="lower_bar">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12" id="logo">
                    <a href="/"><img src="{{ URL::asset('images/logo_new_03.png')}}" height="40" width="150" alt="logo"  /></a>
                </div>
                <div class=" col-lg-5 col-md-12 col-sm-12" style="padding-right: 0px; padding-left: 0px;">
                <div class="container-fluid">
                    <div class="col-lg-12 col-md-12 col-sm-12" id="search_box" style="position: inherit;">
                        <div class="col-sm-6 col-sm-offset-3" style="margin:0px; padding:0px; width:100%;">
                            <div id="imaginary_container" style="border-right: 0;border-right-width: 0px;">
                                <div class="input-group stylish-input-group">
                                    <input type="text" class="form-control search_area"  placeholder="Search" name="tag" id="tag" >
                                    <span class="input-group-addon srch_bg">
                        <button type="submit" id="search_submit">
                            <span class="glyphicon glyphicon-search " style="color:black;"></span>
                        </button>
                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
                <div class=" col-lg-5 col-md-12 col-sm-12" id="menu_mb">

                        <ul class="nav navbar-nav navbar-right menu_bar" >

                            <li><a href="/" class="menu_blck"><b>Home</b></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle menu_blck" data-toggle="dropdown"><b>Brands &nbsp;<span class="glyphicon glyphicon-chevron-down"></span></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/all-brands" style="color: #000;"><b>All Brands</b><img class="img-circle pull-right" style="width: 26px;" src="{{ URL::asset('images/New_pk.png')}}" /></a></li>
                                    <?php

                                    use App\Brand;
                                    use App\Company;

                                    $brands = Brand::orderBy("brand_sort_id", "asc")
                                            ->get();
                                    ?>
                                    @foreach ($brands as $brand)

                                    <?php
                                    $company = Company::where("company_brand_id", $brand->id)
                                            ->first();
                                    
                                    ?>
                                    <li class="divider"></li>
                                    <li><a href="/{{ str_slug($brand->brand_name) }}" style="color: #000;"><b>{{ $brand->brand_name }}</b><img class="img-circle pull-right" style="width: 26px;" src="{{ URL::asset($company->company_logo) }}" /></a></li>

                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle menu_blck " data-toggle="dropdown" style="padding-left: 0px;padding-right: 0px;"><b>Services&nbsp;<span class="glyphicon glyphicon-chevron-down"></span></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/service-painter" style="color: #000;"><b>Painting Service</b><i class="fa fa-paint-brush pull-right" aria-hidden="true"></i></a></li>
                                    <li class="divider"></li>
                                    <li><a href="/service-carpenter" style="color: #000;"><b>Carpenting Service</b><i class="fa fa-gavel pull-right" aria-hidden="true"></i></a></li>
                                    <li class="divider"></li>
                                    <li><a href="/service-plumber" style="color: #000;"><b>Plumbing Service</b><i class="fa fa-pied-piper pull-right" aria-hidden="true"></i></a></li>
                                    <li class="divider"></li>
                                    <li><a href="/service-architecture" style="color: #000;"><b>Architecture Service</b><i class="fa fa-building-o pull-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </li>



                            <li><a href="/paint-wall" class="menu_blck"><b>Paint wall</b></a></li>
                            @if(Auth::check())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: black">
                                <?php
                                $company = Company::where("user_id", Auth::user()->id)
                                        ->first();
                                ?>
                                    <img src="@if(isset($company->company_name)){{ URL::asset($company->company_logo)}} @else images/personal/default-p.png @endif" class=" oldLogo img-circle commonLogo" height="208" width="208" alt="img"  />
                                    <b>{{ Auth::user()->name }}</b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/profile">Profile<span class="glyphicon glyphicon-file pull-right" aria-hidden="true"></span></a></li>
                                    <li class="divider"></li>
                                    <li><a href="/logout">Logout<span class="glyphicon glyphicon-log-out pull-right" aria-hidden="true"></span></a></li>
                                </ul>
                            </li>
                            @endif

                            <ul class=" navbar-right" style="margin-right:5px; margin-top: 16px; padding-left: 0px; ">


                                <div class="kahreedo_basketDiv">
                                @include('includes.khareedo_basket')
                                </div>
                            </ul>


                            </ul>
                    </div>
                </div>




            </div>
        </div>

        @yield('banner')

        <!-- content-->
        @yield('content')


        <!--footer-->
        @include('layouts.footer')
        @yield('custom_js')
    </body>
</html>
