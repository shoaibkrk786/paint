@extends('layouts.layouts')

@section('content')
<style>
    .spinner input {
        text-align: right;
    }

    .input-group-btn-vertical {
        position: relative;
        white-space: nowrap;
        width: 2%;
        vertical-align: middle;
        display: table-cell;
    }

    .input-group-btn-vertical > .btn {
        display: block;
        float: none;
        width: 100%;
        max-width: 100%;
        padding: 8px;
        margin-left: -1px;
        position: relative;
        border-radius: 0;
    }

    .input-group-btn-vertical > .btn:first-child {
        border-top-right-radius: 4px;
    }

    .input-group-btn-vertical > .btn:last-child {
        margin-top: -2px;
        border-bottom-right-radius: 4px;
    }

    .input-group-btn-vertical i {
        position: absolute;
        top: 0;
        left: 4px;
    }
    #shade_hover{
        height:150;
        width:100%;
    }
    .popover-medium {
        width: 350px;
        height: 200px;
    }

    #shade_bdrm{
        padding-left:0px;
        padding-right:0px;
    }
    .borderShade{
        background-color: #3f5b71;
        border:10px solid white;
        height: 534px;
    }
    .imgBgShade{
        background-color: #3f5b71;
        border:10px solid white;
        height: 534px;
    }
    .modal-dialog {
  width: 70%;
  height: 70%;
  padding: 0;
}

.modal-content {
  height: auto;
  min-height: 70%;
  border-radius: 0;
  height: 661px;
  border-radius: 10px;
}
    @media(max-width: 1000px){
        .modal-content {
            height: auto;
            min-height: 197%;
            border-radius: 0;
            height:auto;
            border-radius: 10px;
        }
    }
</style>

<script>
    $(function () {

        $('.spinner .btn:first-of-type').on('click', function () {
            var btn = $(this);
            var input = btn.closest('.spinner').find('input');
            if (input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max'))) {
                var myVal = parseInt(input.val(), 10) + 1;
                input.val(myVal);
                getTotalPriceAfterQty(myVal, btn);
            } else {
                btn.next("disabled", true);
            }
        });
        $('.spinner .btn:last-of-type').on('click', function () {
            var btn = $(this);
            var input = btn.closest('.spinner').find('input');
            if (input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min'))) {

                var myVal = parseInt(input.val(), 10) - 1;
                input.val(myVal);
                getTotalPriceAfterQty(myVal, btn);

            } else {
                btn.prev("disabled", true);
            }
        });

    })
</script>
<?php

use App\Paking;
?>
@if($product->product_category == "Interior" )
<div>
    <img src="{{ URL::asset('images/shades/interior.jpg') }}" width="100%" height="549" class="img-responsive" alt="img"/>
</div>
@else
    <div>
        <img src="{{ URL::asset('images/shades/exterior.jpg') }}" width="100%" height="549" class="img-responsive" alt="img"/>
    </div>
    @endif
<div class="container container_bg">
    <div class="col-md-12 upward">

        <div class="col-md-5 bg_shades">

            <h1 align="center" style="font-size: 25px;">{{ $product->product_name }}</h1>
            <hr style="width:50%">
            <img src="{{ URL::asset('images/discount/'.$product->discount_price.'.png') }}" width="80px" alt = "img" class="img-responsive " id="shade_discount" style="position: absolute">
            <img src="{{ URL::asset($product->product_pic) }}" height="336" class="img-responsive img_set" alt="img" style="padding-bottom:20px;" />
           <div>
               <div id="sha_des_top" >
            <h3 align="center" style=" margin-bottom: 0px;  margin-right: 30px;">Description</h3>
               </div>
            <p align="justify" class="sha_des_pr" style="">
                {{ $product->product_detail }}
            </p>
               </div>
            <div class="row hide">

                <h2 id="rating"> Ratings:   &#9733; &#x2605; &#x2605;&#9734;&#9734; <br><br></h2><br>
                <hr width="60%" align="center">

            </div>
            <div class="row" id="feature_hide" style="margin-top: 70px;">
                <h1 align="center">Featured Brands</h1>
                <div class="hr_clr">
                    <hr style="width:50%;" >
                </div>
                <div>
                    <img src="{{ URL::asset('data/diam/frame-2.png') }}" height="185" class="img-responsive brand_img" alt="img" />
                </div><br><br><br><br>
                <div>
                    <img src="{{ URL::asset('data/brolac/3.png') }}" height="185" class="img-responsive brand_img" alt="img" />
                </div><br><br><br><br>
                <div>
                    <img src="{{ URL::asset('data/brighto/2.png') }}" height="185" class="img-responsive brand_img" alt="img" />
                </div> <br><br>

            </div>
        </div>


        <div class="col-lg-offset-1 col-md-6 bg_shades no_padding">
            <div class="col-md-12  " style="background-color:#ffffff">

                <h1 style="text-align:center;" class="text_style" >Shades </h1>
                @if($product->is_shadecard == 'y')
               <h4> <a href="javascript:void(0)" class="reqShade" id="req_shade_card" style="margin-left: 35%">Request for Shade Card</a></h4>
                @endif
                <hr style="width:60%">

                <ul class="pager hide" >

                    <li><a href="#"   >Next</a></li>
                    <u >1</u>  <u >2</u> <u >3</u> <u >4</u>..... ....................<u >110</u> 
                    <li><a href="#"   >Next</a></li>
                </ul>
                <br>
                @foreach ($shades as $shade)
                <div class=" col-md-12 col-sm-12 shades_border">
                    <input type="hidden" name="brand_id" value="{{ $shade->brand_id }}" />
                    <input type="hidden" name="product_id" value="{{ $shade->product_id }}" />
                    <input type="hidden" name="shade_id" value="{{ $shade->id }}" />

                    <div class="col-md-2 col-sm-2 paint_clr" id="{{ $shade->shade_color }}" data-toggle="popover" style="cursor: pointer;  background-color:{{ $shade->shade_color }}"></div>

                    <div class="col-lg-1 col-md-2 col-sm-2" id="counter" style="width: 16.333333%;">
                        <div class="input-group spinner spinner_size " id="counter_btn">
                            <input type="text" style="background-color: #e92327;color: white;" class="form-control quantity" value="1" min="0" max="50" name="quantity" style="background-color:#C0C0C0">
                            <div class="input-group-btn-vertical">
                                <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 dd_size" style="font-weight: bold;">Packing
                        <select class="selectbtn btnclr packing" name="packing">
                            <?php
                            $packing = Paking::where("shade_id", $shade->id)
                                    ->where("brand_id", $shade->brand_id)
                                    ->where('is_active','y')
                                    ->get();
                            ?>
                            @foreach ($packing as $pk)
                            <option Value="{{ $pk->id }}">{{ $pk->paking_value }} Ltr</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-1 price" style="font-weight: bold;">Disc.Rate
                        <?php
                        $price = Paking::where("shade_id", $shade->id)
                                ->where("brand_id", $shade->brand_id)
                                ->first();
                        ?>
                        <div class="pricebtn packing_price">{{ $price->paking_discount_price }} PKR</div>
                        <input type="hidden" name="packing_price_val" class="packing_price_val" value="{{ $price->paking_price }}" />
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-1 price" style="font-weight: bold;">Act.Rate
                        <div class="pricebtn packing_org_price" style="text-decoration: line-through">{{ $price->paking_price }}</strike> PKR</div>
                    </div>
                    <div class="col-md-2 col-sm-2 cart kharido">
                        <input type="image" src="{{ URL::asset('images/shades/khareed_button.png') }}" width="89" height="50" class="img-responsive kharidoimg khareedo_proceed" alt="Add to Cart" style="height:36px">
                    </div>

                </div> 
                <div style="margin-bottom: 16px;" id="txt_btm">
                    <span class="pBld shadeName" id="{{ $shade->shade_color }}" style="cursor:pointer;">{{ $shade->shade_name }} - {{ $shade->shade_code }}</span>
                </div>

                @endforeach
                <div>

                    <ul class="pager hide" >

                        <li><a href="#"   >Next</a></li>
                        <u >1</u>  <u >2</u> <u >3</u> <u >4</u>..... <u >110</u> 
                        <li><a href="#"   >Next</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</div>


<div class="modal fade" tabindex="-1" role="dialog" id="shadeModel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <img src="{{ URL::asset('images/paintkhareedo-layout_03.png')}}" height="43" width="150" alt="logo" class="img-responsive" />
                <center><h4 class="modal-title shadeTitle"></h4></center>
            </div>
            <div class="modal-body">
                <div class="col-lg-12" id="shade_bdrm">
                    <div class="col-lg-6 borderShade"></div>
                    <div class="col-lg-6 imgBgShade" style="padding-left:0px; padding-right:0px;">
                        <img src="{{ URL::asset('images/png.png') }}" class="img-responsive" style="height: 514px;" width="736" alt="img"/>
                    </div>
                </div>
            </div>
            <div class="modal-footer hide">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="modal fade" tabindex="-1" role="dialog" id="requestShade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <img src="{{ URL::asset('images/paintkhareedo-layout_03.png')}}" height="43" width="150" alt="logo" class="img-responsive" />
            </div>
            <div class="modal-body">
            <div class="col-md-12">
                <div class="col-md-6 " align="center">
                    <h4 class="modal-title shadeTitle">
                        <h4><b>{{ $product->product_name  }}</b></h4>
                    </h4>
                    <img SRC="{{ URL::asset("images/scard/".$product->product_name.".jpg")}}" style="width: 350px;"/>
                </div>
                <div class="col-md-6">

                <div class="col-md-10">
                    <div class="alert alert-danger queryAlert" id="queryAlert" style="margin-top: 10px;margin-left: 40px;display: none;">
                        <strong>Failed!</strong> Please fill the form completly and send again.
                    </div>
                </div>
                    <div id="query_form" class=" col-lg-12 col-sm-12 query_form">

                        <form enctype="multipart/form-data" method="post" id="query" >
                            <input type="hidden" name="required" value="request for shade card - {{ $product->product_name  }}}" />
                            {{ csrf_field() }}
                            <div class="col-xs-12">
                                <div class="col-xs-12">
                                    <div class="form-group" style="margin-bottom: 0px">
                                        <label for="ex3"><h3 style="color:#171515">Name</h3></label>
                                        <input class="form-control list-inline input_style" name="name" id="ex3" type="text" style="background-color:#cdcbcc">
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px">
                                        <label for="ex3"><h3 style="color:#171515">Mobile Number</h3></label>
                                        <input class="form-control list-inline  input_style" name="mobile" id="ex3" type="text" style="background-color:#cdcbcc" style="          height:20px"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-xs-12" >
                                    <h3 style="color:#171515">Address</h3>
                                    <div class="form-group" >
                                        <textarea class="form-control" name="description" rows="3" style=" background-color:#cdcbcc"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-primary pull-right btn-sm send" style="background-color: red">Send</button>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12">
                    <div class="col-md-12 after_query" style="display:none;">
                        <center><h3 class="support" style="font-size: 22px; font-weight: bold; margin-bottom: 70px;">Thanks for contacting us, Our Support team will contact you shortly.</h3></center>
                    </div>


                    </div>


                </div>
            </div>


            </div>
            <div class="modal-footer hide">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary saveRequestShade">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<script>

    $(".packing").change(function () {

        var params = {};
        params.id = $(this).val();
        var thiss = $(this);
        var url = ajax_url + 'get-price-packing';

        var successCallback = function (res) {
            res = jQuery.parseJSON(res);
            thiss.parent().next().find(".packing_price").text(res.paking_discount_price + " PKR");
            thiss.parent().next().find(".packing_price_val").val(res.paking_discount_price);
            thiss.parent().next().next().find(".packing_org_price").text(res.paking_price + " PKR");

            thiss.parent().prev().find(".quantity").val("1");
        };

        ajx(url, 'post', params, successCallback, 'html');

    });
    $(".reqShade").click(function (){

       $("#requestShade").modal();

    });
    function getTotalPriceAfterQty(q_ty, thiss) {
        console.log(q_ty, thiss);
        var packing = thiss.parent().parent().parent().next().find(".packing").val();
        var params = {};
        params.id = packing;
        var url = ajax_url + 'get-price-packing';

        var successCallback = function (res) {
            res = jQuery.parseJSON(res);

            var price = res.paking_discount_price;
            var org_price = res.paking_price;

            var total_price = parseInt(q_ty) * parseInt(price);
            var total_org_price = parseInt(q_ty) * parseInt(org_price);
            thiss.parent().parent().parent().next().next().find(".packing_price").next().val(total_price);

            thiss.parent().parent().parent().next().next().find(".packing_price").html(total_price + " PKR");
            thiss.parent().parent().parent().next().next().next().find(".packing_org_price").html(total_org_price + " PKR");

        };

        ajx(url, 'post', params, successCallback, 'html');

    }


    $(".khareedo_proceed").click(function () {

        var params = $(this).parents(".shades_border").find("input, textarea, select").serialize();
        var url = ajax_url + 'kahredo-proceed';

        var successCallback = function (res) {
            res = jQuery.parseJSON(res);
            if (res.status == true)
            {
                get_basket();
            }
        };

        ajx(url, 'post', params, successCallback, 'html');

    });



</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover({
            placement: 'right',
            trigger: 'hover',
            html: true,
            content: function () {
//                var color = $(this).attr("id");
//                var imgLink = "{{ URL::asset('images/shade_view/shades-pop-up-transperant.png') }}";
//                return '<div id="shade_hover" style="background:' + color + '"><img src="' + imgLink + '" class="img-responsive" alt="img"/></div>';
            return "Click to view large view.";
            },

            template: '<div class="popover popover_medium" style="max-width:100%;"><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title"></h3><div class="popover-content"><p></p></div></div></div>',
        });
    });

    $(".shadeName").click(function () {
    var shadeName = $(this).text();
    var color = $(this).attr("id");
    console.log(color);
        $('#shadeModel').modal('show');
        $(".shadeTitle").text(shadeName);
        $(".borderShade").css("background-color",color);
        $(".imgBgShade").css("background-color",color);
        
    });
    
    $(".paint_clr").click(function (){
       
        $(this).parent().next().find(".shadeName").click();
    });

</script>
@endsection
