@extends('layouts.layouts')
@section('content')
<style>
    .alert-purple { border-color: #694D9F;background: #694D9F;color: #fff; }
.alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; }
.alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff; }
.alert-warning-alt { border-color: #F3F3EB;background: #E9CEAC;color: #fff; }
.alert-success-alt { border-color: #19B99A;background: #20A286;color: #fff; }
.alert a {color: gold;}
    </style>
<div class="" id="kha_top_marg">
    <center><img src="{{ URL::asset('images/shopingcart/Khareedo-Shopping-Cart-Layout_03.png') }}" /></center>
</div>
<br>
<br>

<div class="container gryclr"> 
    <div class="col-md-12 ">

        <div class="col-md-4">
            <?php $totalsub = 0; ?>
            @foreach ($cart as $ct)
            <div class="col-md-12">
            <br>
            <br>
            <div class="white_clr" style="height:auto;">
                    <div class="col-lg-6"><img src="{{ URL::asset($ct->options->product_pic) }}" height="136" width="70"  class="img-responsive img_center" /></div>
                    <div  class="col-lg-6"><div class="clour_img" style="background-color: {{ $ct->options->shade_color }};"></div></div>
                    <table class="table">
                        <tr class="tr_kh">
                            <td class="td_kh" style="padding-left:15px;">Product Name</td>
                            <td>{{ $ct->name }}</td>
                        </tr>

                        <tr class="tr_kh">
                            <td class="td_kh" style="padding-left:15px;">Color Code</td>
                            <td>{{ $ct->options->shade_code }}</td>
                        </tr>
                        <tr class="tr_kh">
                            <td class="td_kh" style="padding-left:15px;">Pack Size</td>
                            <td>{{ $ct->options->packing_value }} ltr</td>
                        </tr>
                        <tr class="tr_kh">
                            <td class="td_kh" style="padding-left:15px;">Quantity</td>
                            <td>{{ $ct->options->org_quantity }}</td>
                        </tr>
                        <tr class="tr_kh">
                            <td class="td_kh" style="padding-left:15px;">Actual Rate</td>
                            <td><strike>{{ $ct->options->org_price }}</strike> PKR</td>
                        </tr>
                        <tr class="tr_kh">
                            <td class="td_kh" style="padding-left:15px;">Discounted Rate</td>
                            <td>{{ $ct->price }} PKR</td>
                        </tr>

                        <tr class="tr_kh">
                            <td class="td_kh" style="padding-left:15px;">Net Rate</td>
                            <td>{{ $ct->price*$ct->options->org_quantity }} PKR</td>
                        </tr>

                        <?php

                        $totalsub += $ct->price*$ct->options->org_quantity;
                        ?>
                </table>


                <br>
                <br>
                <br>
            </div>
            </div>
            @endforeach
        </div>



        <div class="col-md-1"></div>
        <div class="col-md-8">
            <a href="/" class="pull-right" style="margin-top:3px;"><button class="btn btn-success btn-md">Continue shopping</button></a>
            
            <br>
            <br>
            <div class="panel panel-default  panel_clr ">
                <div class="panel-body panel_clr"><strong><p class="font_text3" style="color:white">Fill the form to get the order</p></strong></div>
            </div>

            <div class="border">
                <br>
                
                <label><b><p class="font_text">&nbsp;&nbsp;Your Personal Details</p></b></label>
                <div align="right" class="checkbox_padding">
                    @if(! \Auth::check())
                    <div class="checkbox font_text2" style="height: 99px;">
                        <button class="btn btn-md btn-danger pull-right checkbox-primary customerLog"><b>New Customer</b></button>
                            <button class="btn btn-md btn-success pull-right newCustomerLog" style="margin-right: 15px;" /><b>Already Customer</b></button>
                        </div>
                    @else
                    <br><br><br>
                    @endif
                    <br>
                </div>
                <form id="already_customer">
                    {{ csrf_field() }}
                <div class="form-horizontal textbox_padding ">
                    <div class="form-group form-group-lg">
                        <div class="col-md-3 control-label pull-left" for="lg"><b class="font_text3">*Full Name</b></div>
                        <div class="col-md-9">
                            <input class="form-control" name="name" value="@if( \Auth::check()){{ $user->name }}@endif" type="text" id="lg" placeholder="Full Name">
                        </div>
                    </div>


                </div>
               
                <div class="form-horizontal textbox_padding">
                    <div class="form-group form-group-lg">
                        <div class="col-md-3 control-label pull-left" for="lg"><b class="font_text3">Company</b></div>
                        <div class="col-md-9 box_width">
                            <input class="form-control" name="company" value="@if( \Auth::check()){{ $user->company }}@endif" type="text" id="lg" placeholder="company">
                        </div>
                    </div>


                </div>
                <div class="form-horizontal textbox_padding">
                    <div class="form-group form-group-lg">
                        <div class="col-md-3 control-label pull-left" for="lg"><b class="font_text3">*Contact no.</b></div>
                        <div class="col-md-9 box_width">
                            <input class="form-control" name="mobile_number" value="@if( \Auth::check()){{ $user->mobile_number }}@endif" type="text" id="lg" placeholder="Contact no">
                        </div>
                    </div>


                </div>

                <div class="form-horizontal textbox_padding">
                    <div class="form-group form-group-lg">
                        <div class="col-md-3 control-label pull-left" for="lg"><b class="font_text3">*Email</b></div>
                        <div class="col-md-9 box_width">
                            <input class="form-control" type="text" name="email" value="@if( \Auth::check()){{ $user->email }}@endif" id="lg" placeholder="Email">
                        </div>
                    </div>


                </div>

                <div class="form-horizontal textbox_padding">
                    <div class="form-group form-group-lg">
                        <div class="col-md-3 control-label pull-left" for="lg"><b class="font_text3">*City</b></div>
                        <div class="col-md-9 box_width">
                            <input class="form-control" type="text" name="city" value="@if( \Auth::check()){{ $user->city }}@endif" id="lg" placeholder="City">
                        </div>
                    </div>


                </div>
                <div class="form-horizontal textbox_padding">
                    <div class="form-group form-group-lg">
                        <div class="col-md-3 control-label pull-left" for="lg"><b class="font_text3">*Region/State</b></div>
                        <div class="col-md-9 box_width">
                            <input class="form-control" type="text" name="state" value="@if( \Auth::check()){{ $user->state }}@endif" id="lg" placeholder="Region/State">
                        </div>
                    </div>
                </div>
                    
                <div class="form-horizontal textbox_padding">
                    <div class="form-group form-group-lg">
                        <div class="col-md-3 control-label pull-left" for="lg"><b class="font_text3">*Address</b></div>
                        <div class="col-md-9 box_width">
                            <textarea class="form-control" name="address" rows="7" placeholder="Please tell us your exact location where you want to get order by today!">@if( \Auth::check()){{ $user->address }}@endif</textarea>
                        </div>
                    </div>
                </div>
                @if(! \Auth::user())
                <div class="form-horizontal textbox_padding">
                    <div class="form-group form-group-lg">
                        <div class="col-md-12 control-label" for="lg"><b class="font_text3 wantRegister" style="cursor: pointer;text-decoration: underline;font-size: 22px;">Do you want to register yourself?</b></div>
                    </div>
                </div>
                @endif
                    <div class="form-horizontal textbox_padding choosePassword" style="display: none;">
                    <div class="form-group form-group-lg">
                        <div class="col-md-3 control-label" for="lg"><b class="font_text3">*Choose Password</b></div>
                        <div class="col-md-9 box_width">
                            <input class="form-control" type="password" name="password" id="lg" placeholder="Write your secret password">
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <label><b><p class="font_text">&emsp;Shipping Rate</b></p></label>
                    <div class="checkbox">
                        <label> &emsp;&emsp;&emsp;<input type="checkbox" checked="checked" name="shipping_rate" value="0">Flat Shipping Rate - Rs 0.00</label>
                    </div>
                <label><b class="font_text"> &emsp;Comments</b></label>
                <div class="comentbox_padding">
                    <div class="form-group">
                        <label for="comment"></label>
                        <textarea class="form-control" name="comments" rows="5" id="comment"></textarea>
                    </div>
                </div>
                <br>
                <br>

                <div  class="btn_padding2" >
                    <button type="button" class="btn btn-primary btn_size3  "><label style="color:#000000">Sub Total:</label></button>
                    <button type="button" class="btn btn-primary btn_size "><label style="color:#000000">{{ $totalsub  }} PKR</label></button>

                </div>
                <div class="btn_padding1"><button type="button" class="btn btn-primary btn_background confirm_order" ><label >Confirm Order</label></button></div>
                </form>
                <form id="new_customer" style="display:none;">
                    {{ csrf_field() }}
                    <div class="form-horizontal textbox_padding ">
                        <div class="form-group form-group-lg">
                            <div class="col-md-3 control-label" for="lg"><b class="font_text3">Mobile number</b></div>
                            <div class="col-md-9">
                                <input class="form-control" type="text" id="lg" placeholder="Please enter your mobile number" name="mobile_number">
                            </div>
                        </div>

                    </div>
                    <div class="form-horizontal textbox_padding">
                        <div class="form-group form-group-lg">
                            <div class="col-md-3 control-label" for="lg"><b class="font_text3">Password</b></div>
                            <div class="col-md-9 box_width">
                                <input class="form-control" type="password" id="lg" placeholder="Please enter your password.." name="password" >
                            </div>
                        </div>
                    </div>
                    <div class="form-horizontal textbox_padding">
                        <div class="form-group form-group-lg">
                            <div class=" col-lg-offset-3  col-md-9 box_width">
                                <button class="btn btn-success pull-right loginKhreedo">Login</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            
            <div class="alert alert-purple alert-dismissable orderDoneMsg" style="display:none;">
                <span class="glyphicon glyphicon-certificate" style="margin-right: 10px;"></span>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button><strong>Well done!</strong> Your order has been placed, Our Sales Team will contact you shortly.</div>
            
            <br>
            <br>
        </div></div>

</div>
</div>


<script>
    $(".newCustomerLog").click(function (){
        
       $("#already_customer").slideUp("slow");
       $("#new_customer").slideDown("slow");
       
    });
    
    $(".customerLog").click(function (){
        
       $("#new_customer").slideUp("slow");
       $("#already_customer").slideDown("slow");
       
    });
    
    $('#already_customer').validate({
    rules: {
        name: {
            required: true
        },
        mobile_number: {
            required: true,
            digits: true,
            minlength: 7,
            maxlength: 13
        },
        city: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        state: {
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
    },
    submitHandler: function (form) {
        //loginFormSubmitHandler(form);
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
    },
    submitHandler: function (form) {
        //loginFormSubmitHandler(form);
    }
});

    
$(".confirm_order").click(function (){
   
   if($("#already_customer").valid())
   {
       var params = $("#already_customer").serialize();
        
        var url = ajax_url + 'place-order';

        var successCallback = function (res) {
            res = jQuery.parseJSON(res);
            if(res.status == true)
            {
                $(".panel_clr").slideUp();
                $(".border").slideUp();
                $(".orderDoneMsg").slideDown();
                jumToBody();
            }
        };

        ajx(url, 'post', params, successCallback, 'html');
   }
   else
   {
       jumToBody();
   }
   
});

$(".loginKhreedo").click(function (){
   
   if($("#new_customer").valid())
   {
       var params = $("#new_customer").serialize();
        
        var url = ajax_url + 'get-verified-for-order';

        var successCallback = function (res) {
            res = jQuery.parseJSON(res);
            if(res.status == true)
            {
                window.location.reload();
            }
        };

        ajx(url, 'post', params, successCallback, 'html');
   }
   
});
$(".wantRegister").click(function (){
   
   $(".choosePassword").slideDown();
   
});



</script>
@endsection
