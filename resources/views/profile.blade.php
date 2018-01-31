@extends('layouts.layouts')
@section('custom_css')
<link href="{{ URL::asset('css/company.css')}}" rel="stylesheet" media="all" type="text/css"/>
<style>
    .oldLogo:hover {

    }
    .privateLogo{
        margin-top: 1px;
        border: solid 6px #564d53;
    }
</style>
@endsection
@section('content')
    <?php
    Use App\Product;
    ?>
<div >  
    <img src="@if(isset($company->company_name)){{ URL::asset($company->company_cover)}}@else images/cover/default-p.jpg @endif" height="600" width="100%"/>
</div>

<div class="dark_klr">
    <div class="abc" align="left">
        <a href="javascript:void(0)" class="uploadLogo" ><img src="@if(isset($company->company_name)){{ URL::asset($company->company_logo)}} @else images/personal/default-p.png @endif" class=" oldLogo img-circle privateLogo" height="150" width="150" alt="img"  /></a>
    </div>
    <form id="logoUpload" class="hide" enctype="multipart/form-data" >
        <input type="hidden" class="logoTken" name="_token" value="{{ csrf_token()}}">
        <input type="file" class="logoImg" name="logoImg" />
    </form>
    <div class="text"><h1><p style="color:white">@if(isset($company->company_name)){{ $company->company_name }}@else {{ $user->name }} @endif</p></h1></div>
    <div class="btn_padding" align="right">
        <button type="button" class="hide btn btn-default btn_size" style="height:50px">Verified</button>

    </div>
    <div class="container">
        <div class="col-md-12 " style="padding-top: 30px;">
            <br>
            <div class="col-md-3 about_us whit_clr" >

                <div class="panel panel-default" id="abt_us" align="center">
                    <div class="panel-body abt_text" > About Us</div>
                </div>
                <div>
                    <form id="aboutForm" >
                        <input type="hidden" class="logoTken" name="_token" value="{{ csrf_token()}}">

                        <textarea class="form-control aboutusText" rows="10" name="aboutus" placeholder="Please write some thing about you..">@if(isset($company->company_name)){{ $company->company_about }}@else {{ $user->name }} @endif</textarea>
                        <br/>
                        <button class="btn btn-sm btn-success pull-right updateAbout">Update</button>
                    </form>

                    <br/>
                    <br/>
                    <br/>
                </div>
                <div class="alert alert-success" id="SuccessAlert" style="padding-right: 5px;display: none;">
                    <strong>Updated!</strong> Hurray! Successfully updated..
                </div>
            </div>

            <div class="col-md-9 " >
                <div class="col-md-12 whit_clr" style="background-color: white;height: auto;padding-bottom: 67px;">
                    <div class="panel panel-default panel_width" id="our_products" align="center">
                        <div class="panel-body abt_text" > OUR PRODUCTS</div>
                    </div>
                    <div class="col-md-12">
                        @if (isset($brands->product))
                            <?php
                            $product = Product::where('is_active','y')
                                    ->where('brand_id',$brands->id)
                                    ->get();
                            ?>
                        @foreach ($product as $products)
                        <div class = "col-sm-1 col-md-3">
                            <a href ="brand-shades/{{ $products->id }}" >
                                <img src="{{$products->product_pic}}" alt = "img" class="img-responsive" style="padding-top:15px">
                            </a>
                        </div>
                        @endforeach
                        @endif
                    </div>


                </div>
            </div>

            <div class="col-md-12">
                <br>
                <div class="col-md-12  whit_clr1  back_colour hide" align="center">
                    <br>
                    <div class="panel panel-default panel_width2" id="get_intouch" align="center">
                        <div class="panel-body abt_text" > Get in touch</div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <form>
                                <div class="form-group " align="left">
                                    <label for="usr">Name:</label>
                                    <input type="text" class="form-control border_area " id="usr">
                                </div>


                        </div>
                        <div class="col-md-6>"
                             <form>
                                <div class="form-group " align="left" >
                                    <label for="usr">Mobil</label>
                                    <input type="text" class="form-control txtbox_width border_area" id="usr" >
                                </div>


                        </div>
                        <div class="col-md-12">

                            <div class="form-group " align="left" >
                                <label for="usr">Email</label>
                                <input type="text" class="form-control  txtbox_width2 border_area" id="usr" >
                            </div>


                        </div>
                        <div  class="col-md-12">
                            <div class="col-md-4" align="left">
                                <label for="usr">Chose your product</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="dropdown " align="right">
                                <button class="btn btn-default dropdown-toggle dropdown_width  border_area " type="button" data-toggle="dropdown">
                                    <span class="caret "></span></button>
                            </div>
                            <br>
                        </div>
                        <div class="col-md-12">

                            <div class="form-group" align="left">
                                <label for="comment"  >Message</label>
                                <textarea class="form-control txtbox_width3 border_area" rows="8" id="comment"></textarea>
                            </div>

                        </div>

                    </div>
                    <div align="right" class="button_size"> <button type="button" class="btn btn-primary btn-md btn_size1 ">Send</button> </div>   
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    @endsection
    @section('custom_js')
    <script>

        $(".uploadLogo").click(function () {

            $(".logoImg").click();

        });

        $(".logoImg").change(function () {

            $.ajax({
                url: 'add-logo',
                data: new FormData($("#logoUpload")[0]),
                dataType: 'json',
                async: false,
                type: 'post',
                processData: false,
                contentType: false,
                success: function (response) {
                    $(".oldLogo").attr("src", response.path);
                },
            });

        });

        $(".updateAbout").click(function (e) {

            var params = $("#aboutForm").serialize();

            var url = ajax_url + 'aboutus-update';

            var successCallback = function (res) {
                res = jQuery.parseJSON(res);
                if (res.status == true)
                {
                    $("#SuccessAlert").show();
                }
            };

            ajx(url, 'post', params, successCallback, 'html');
            e.preventDefault();
        });

    </script>
    @endsection