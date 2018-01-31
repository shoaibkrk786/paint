@extends('layouts.layouts')
@section('custom_css')
<link href="{{ URL::asset('css/paintwall.css')}}" rel="stylesheet" media="all" type="text/css"/>
@endsection

@section('content')
<?php

use Carbon\Carbon;
?>
<div id="hom_slid_marg">
    <img src="{{ URL::asset('images/newpaintwall.jpg')}}" class="img-responsive" width="100%" height="118" 	             alt="heading"/>
    <br>


</div>
<div class="alert alert-danger loginAlert" id="loginAlert" style="padding-right: 5px;display: none;">
    <strong>Login Failed!</strong> Mobile number or password incorrect, Please try again.
</div>
<div class="alert alert-success" id="loginSuccessAlert" style="padding-right: 5px;display: none;">
    <strong>Login Success!</strong> Hurray! Successfully logged In. keep enjoying..
</div>

<div class="alert alert-danger signupAlert" id="signupAlert" style="padding-right: 5px;display: none;">
    <strong>Signup Failed!</strong>Please try again with correct email or mobile number.
</div>
<div class="alert alert-success" id="signupSuccessAlert" style="padding-right: 5px;display: none;">
    <strong>Signup Success!</strong> Hurray! Successfully signed Up. keep enjoying..
</div>

    <div class="col-lg-12 col-sm-12" id="wall_padding">
        <div class="col-lg-3 col-sm-6"  id="Login_bg">

            <div class="col-sm-12 padding_form loginDiv" style="height: auto; padding-bottom: 3%; @if (\Auth::check())display:none;@endif">
                <h3 align="center">Login</h3>
                <div style="padding-left: 20px;padding-right: 20px;">

                    <form id="new_customer" action="" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="exampleInputEmail1">Mobile number</label>
                            <input type="text" class="form-control" id="mobile_number" name="mobile_number" aria-describedby="mobileHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your password">
                        </div>
                        <a href="javascript:void(0)" class="signupNow" style="cursor: pointer;">Register Now?</a>
                        <button type="button" class="btn btn-primary btn-lg btn_style login loginKhreedo pull-right" id="submit_size" style="margin-bottom: 0px;    margin-left: 0PX;">Login</button>
                    </form>
                </div>

            </div>

            <div class="col-md-12 padding_form signupDiv" style="height: auto;display: none;">
                <h3 align="center">Signup</h3>
                <div style="padding-left: 20px;padding-right: 20px;">

                    <form id="customer" action="" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" class="form-control" id="Name" name="name" aria-describedby="nameHelp" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mobile number</label>
                            <input type="text" class="form-control" id="mobile_number" name="mobile_number" aria-describedby="mobileHelp" placeholder="Enter mobile number">
                            <small id="mobileHelp" class="form-text text-muted">We'll never share your mobile number with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Choose a random password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company name</label>
                            <input type="text" class="form-control" id="company_name" name="company" aria-describedby="emailHelp" placeholder="Enter your company name">
                        </div>
                        <div class="form-group">
                            <label for="Detail">Write about you</label>
                            <textarea id="Detail" name="Detail" rows="6" class="form-control" placeholder="Write about you.."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" aria-describedby="cityHelp" placeholder="Enter City">
                        </div>
                        <div class="form-group">
                            <label for="State">State</label>
                            <input type="text" class="form-control" id="state" name="state" aria-describedby="StateHelp" placeholder="Enter state">
                        </div>

                        <div class="form-group">
                            <label for="Address">Address</label>
                            <textarea id="Address" name="address" rows="6" class="form-control" placeholder="Address ..."></textarea>
                        </div>

                        <a href="javascript:void(0)" class="loginNow" style="cursor: pointer;">Already Customer</a>
                        <button type="button" class="btn btn-primary btn-lg btn_style login signupKhreedo" id="submit_size" style="margin-left: 214PX;margin-bottom: 12px;">Signup</button>
                    </form>
                </div>

            </div>



            <div class="afterLoginWall">
                @if (\Auth::check())
                @include('includes/leftsidebar')
                @endif
            </div>
        </div>
     <?php
     use App\Company;
     Use App\User;
     ?>
        <div class="col-lg-7 col-sm-6" id="centr_wall">
            <div class="col-lg-12 pull-right" id="search_box_paint">
                <div class="input-group">
                    <input type="text" class="form-control pull-right" placeholder="Search Here" aria-describedby=	     									 			"basic-addon2" style="border-radius:0px;">
                    <span class="input-group-addon" id="basic-addon2" style="background-color:red; color:white;">Search</span>
                </div>
                </div>
            @if (\Auth::check())
                <div class="col-lg-12 col-sm-12" id="post_wall">
                    <div class="col-lg-3 col-sm-3" id="dp_img">
                        <img src="@if(isset($company->company_name)){{ URL::asset($company->company_logo)}} @else images/personal/default-p.png @endif"width="60" height="60"  class="img-circle" alt="dp"/>
                        <p><a href="/{{ str_slug($user->name) }}">{{ $user->name }}</a></p>
                    </div>
                    <div class="col-lg-9 col-sm-9"  id="dp_div">


                        <div class="form-group col-lg-12 col-sm-12 " id="text_form">
                            <div class="col-lg-2 col-sm-2" style="padding-right:0px;padding-left: 0px;width: 9.666667%;">
                                <img src="{{ URL::asset('images/paint-wall/icon1.png')}}" width="24"  id="icon1"/>
                            </div>
                            <div class="col-lg-10 col-sm-10" style="padding-left:0px; padding-right:0px;width: 90.333333%;">
                                <form id="sharingForm">
                                    {{ csrf_field() }}
                                    <div class="form-group col-md-12" style="padding-left: 0px">
                                        <div class="col-lg-12 col-sm-12" style="padding-left: 0px; padding-right: 0px;">
                                        <textarea class="form-control shareText" name="share" placeholder="What's new for public?" rows="6" id="text_box_b" maxlength="200"></textarea>
                                    </div>
                                   </div>

                                </form>

                            </div>
                            <div  id="button_shr">

                                <button type="button" class="btn btn-primary btn-lg btn_style shareUpdate pull-right" id="btn_size">post</button>
                            </div>

                        </div>

                    </div>
                </div>
            @endif
                <div class="col-md-12 runningUpdate" id="runningUpdate" style="padding-left: 0px; padding-right: 0px;">
                @foreach($sharings as $sharing)
                    <div class="col-lg-12 col-sm-12" id="post_add">
                        <div class="col-lg-12 col-sm-12" id="post_box">
                            <?php
                            $company = Company::where("user_id",$sharing->user_id)
                                    ->first();
                            $user = User::where("id",$sharing->user_id)
                                    ->first();
                            ?>
                            <div class="col-lg-3 col-sm-3" id="dp_width">

                                <img src="{{ URL::asset(@$company->company_logo) }}"  class="img-circle" width="60" height="60"   alt="dp"/>

                            </div>
                            <div class="col-lg-6 col-sm-6" id="dp_name">
                                <span><a href="/{{ str_slug($user->name) }}"><b>{{ $user->name }}</b></a><br> {{ $user->city }}</span>
                            </div>
                            <div class="col-lg-3 col-sm-3" style="width: 26%; margin-top: 15px">
                                <span  style="color:#000000; text-align:right;"><?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($sharing->updated_at))->diffForHumans() ?></span>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <img src="{{ URL::asset('images/paint-wall/icon2.png')}}" width="24" style="margin-left:15%;"/>

                            </div>
                                <div class="col-lg-12 col-sm-12">
                            <label class="form-control" rows="6"  id="post_boxwdth">{{ $sharing->user_text }}</label>
                        </div>

                                </div>
                    </div>
                @endforeach

        </div>
                </div>

        <div class="col-md-2 width_rite" >

            <div class="panel panel-default" id="panel_height">
                <div class="panel-body panel_text"><span style="margin-top:10px;font-weight: bold;font-size: 29px;">Featured Brands</span></div>
            </div>
            <div class="col-md-12" id="walll_rite" align="center">
                <img src="{{ URL::asset('images/paint-wall/balti1_07.png')}}" class=" img-responsive" width="184" height="192" alt="img" style="padding-top:20px" />
                <img src="{{ URL::asset('images/paint-wall/balti2_07.png')}}" class=" img-responsive" width="184" height="192" alt="img" style="padding-top:20px" />
                <img src="{{ URL::asset('images/paint-wall/balti3_07.png')}}" class=" img-responsive" width="184" height="192" alt="img" style="padding-top:20px" />
                <img src="{{ URL::asset('images/paint-wall/balti4_07.png')}}" class=" img-responsive" width="184" height="192" alt="img" style="padding-top:20px" />


            </div>



        </div>
    </div>
    <br>
</div>


@endsection
@section('custom_js')
<script>

    function getCompanyBar()
    {
        var params = {};

        var url = ajax_url + 'company-bar';

        var successCallback = function (res) {
            $(".loginDiv").slideUp();
            $("#loginSuccessAlert").slideDown();
            $(".afterLoginWall").html(res);
            setTimeout(function () {
                $("#loginSuccessAlert").slideUp();
            }, 5000);
        };

        ajx(url, 'get', params, successCallback, 'html');
    }

    function getSCompanyBar()
    {
        var params = {};

        var url = ajax_url + 'company-bar';

        var successCallback = function (res) {
            $(".signupDiv").slideUp();
            $("#signupSuccessAlert").slideDown();
            $(".afterLoginWall").html(res);
            setTimeout(function () {
                $("#signupSuccessAlert").slideUp();
            }, 5000);
            window.location.reload();
        };

        ajx(url, 'get', params, successCallback, 'html');
    }

    $('#new_customer').validate({
        rules: {
            mobile_number: {
                required: true,
                digits: true
            },
            password: {
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
            console.log(element);
            if (element.parent('.form-control').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {

        }
    });


    $('#new_customer').validate({
        rules: {
            mobile_number: {
                required: true,
                digits: true
            },
            password: {
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
            console.log(element);
            if (element.parent('.form-control').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {

        }
    });


    $(".loginKhreedo").click(function () {

        if ($("#new_customer").valid())
        {
            var params = $("#new_customer").serialize();

            var url = ajax_url + 'get-login';

            var successCallback = function (res) {
                res = jQuery.parseJSON(res);
                if (res.status == true)
                {
//                    getCompanyBar();
                    window.location.reload();
                } else
                {
                    $(".loginAlert").show();
                }
            };

            ajx(url, 'post', params, successCallback, 'html');
        }

    });

    setTimeout(function () {
        $("#loginAlert").slideUp();
    }, 5000);

    $(".loginNow").click(function () {

        $(".loginDiv").slideDown();
        $(".signupDiv").slideUp();


    });

    $(".signupNow").click(function () {


        $(".signupDiv").slideDown();
        $(".loginDiv").slideUp();

    });

    $('#customer').validate({
        rules: {
            mobile_number: {
                required: true,
                digits: true
            },
            email: {
                required: true,
                email: true
            },
            company: {
                required: true,
            },
            Detail: {
                required: true,
            },
            password: {
                required: true
            }
            ,
            city: {
                required: true
            },
            name: {
                required: true
            }
            ,
            state: {
                required: true
            },
            address: {
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
            console.log(element);
            if (element.parent('.form-control').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {

        }
    });


    $(".signupKhreedo").click(function () {

        if ($("#customer").valid())
        {
            var params = $("#customer").serialize();

            var url = ajax_url + 'get-register';

            var successCallback = function (res) {
                res = jQuery.parseJSON(res);
                if (res.status == true)
                {
                    //getSCompanyBar();
                    window.location.reload();
                    
                } else
                {
                    $(".signupAlert").show();
                     jumToBody();
                    
                }
            };

            ajx(url, 'post', params, successCallback, 'html');
        }

    });
    $('#sharingForm').validate({
        rules: {
            share: {
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
            console.log(element);
            if (element.parent('.form-control').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {

        }
    });

    function getSharingUpdate()
    {

    }



    $(document).on("click", ".shareUpdate", function () {

        if ($("#sharingForm").valid())
        {
            var params = $("#sharingForm").serialize();
            var shareText = $(".shareText").val();
            var url = ajax_url + 'start-sharing-update';

            var successCallback = function (res) {
                res = jQuery.parseJSON(res);
                var img = $(".companyMainlogo").attr("src");

                var sharedUpdate = '<div class="col-lg-12 col-sm-12" id="post_add">'+
                        '<div class="col-lg-12 col-sm-12" id="post_box">' +
                        '<div class="col-lg-3 col-sm-3" id="dp_width">'+
                        '<img src="' + img + '" class="img-circle" width="60" height="60"   alt="dp"/>' +
                        '</div>'+
                        '<div class="col-lg-6 col-sm-6" id="dp_name">'+
                        '<span><a href="#"><b>'+ res.name +'</b></a><br> '+ res.city+ '</span>'+
                        '</div>'+
                        '<div class="col-lg-3 col-sm-3">'+
                        '<span style="color:#000000; text-align:right;">'+ res.timeToShare +'</span>'+
                        '</div>'+
                        '<div class="col-lg-12 col-sm-12">'+
                        '<img src="images/paint-wall/icon2.png" width="24" style="margin-left:15%;"/>'+
                        '</div>'+
                        '<div class="col-lg-12 col-sm-12">'+
                        '<label class="form-control" rows="6"  id="post_boxwdth">' + res.share + '</label>' +
                        '</div>'+
                        '</div> </div>';
                if (res.status == true)
                {
                    $(".runningUpdate").prepend(sharedUpdate);
                    jumToBody();
//                    getSharingUpdate();
                }
            };

            ajx(url, 'post', params, successCallback, 'html');
        }


    });

</script>
@endsection
