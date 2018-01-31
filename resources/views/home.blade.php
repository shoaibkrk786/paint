@extends('layouts.layouts')
<!-- content-->
@section ('banner')
    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
            margin: auto;
        }
    </style>
    <div id="hom_slid_marg">
        <div class="col-lg-12 col-sm-12" style="padding:0px;" >
            <div class="col-lg-9 col-sm-9 banner_paddingright">
                <br>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{ URL::asset('images/cover_new_home.jpg')}}" alt="Chania"  class="img-responsive image_height" width="460" style="height:565px;"/>
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('images/SEARCH-BAR_new_02.gif')}}" alt="Chania" class="img-responsive image_height" width="460" style="height:565px;"/>
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('images/SEARCH-BAR._2_02.gif')}}" alt="Chania" class="img-responsive image_height" width="460" style="height:565px;"/>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                </div>
            </div>
            <div class=" col-lg-3 col-sm-3 Height_contctus" style="padding-right:0px;" >
                <h4 class="text_wanttoexpert" align="center"> Want an <span style="color:red;">Expert</span> Advice for<br>
                    choosing Interior & Exterior Paints </h4>
                <div align="center" class=" col-lg-12  image_margin">
                    <img src="{{ URL::asset('images/pic_06.gif')}}" class="img-responsive" height="220" width="330"/>
                </div>
                <div class=" col-lg-12 " align="center">
                    <h3><b>CALL US:</b></h3>
                </div>
                <div class="col-lg-12 " align="center" style="margin-top:20px;">
                    <span class="glyphicon glyphicon-earphone phon_clr"></span>&emsp;
                    <span >0423 5965529-30</span><br>
                </div>
                <div class="col-lg-12 " align="center" style="padding-left:0px; margin-top:8px;">
                    <span class="glyphicon glyphicon-phone phon_clr"></span>&emsp;
                    <span style="margin-right:9px;">03211441155</span>
                </div>
                <div class="col-lg-12  button_position" align="right" style="margin-top: 30px;" >
                    <button type="button" class="btn btn-danger btn_width">Contact Us</button>
                </div>
            </div>
        </div>
        </div>

<div class="col-lg-12 col-sm-12" style="width:100%;background-color: #b8b6b7">
    <?php
Use App\Product;
    use App\Company;
    ?>
    @foreach ($brand as $bd)
    <?php
    $company = Company::where("company_brand_id", $bd->id)
            ->first();
    ?>
    <div class="col-lg-1 col-sm-3" style="width: 12.333333%;">
        <a href = "/{{ str_slug($bd->brand_name) }}" class = "thumbnail bg_clr">
            <img src="@if (!is_null($company)) {{ $company->company_logo }} @endif" alt = "img"  class="img-responsive img-circle" style="padding-top:15px">
        </a>
    </div>

    @endforeach
</div>
@endsection
@section('content')

<div class="col-md-12 col-sm-12" id="center_area">
    <h1 align="center " style="color:#FB1014; margin-left: 10%; margin-top: 30px;margin-bottom: 20px;" ><b> Choose your favorite Brand</b></h1>
</div>
@foreach($brand as $brands)
    <?php
    $company = Company::where("company_brand_id", $brands->id)
            ->first();
    ?>
<div class="col-lg-12 col-sm-12" id="full_width">

    <h1 class="shop_name"> Shop for {{$brands->brand_name}} <img src="{{ $company->company_logo }}" alt = "img"  class="img-circle" width="63" height="60" ></h1>

</div>
<div class="col-lg-12 col-sm-12" style="padding-left: 0px;padding-right: 0px;">
    <div class="container-fluid" >

        <div class = "row">
            <?php
            $product = Product::orderBy("product_sort_id","asc")
                    ->where('is_active','y')
                    ->where('brand_id',$brands->id)
                    ->Where(function ($query) {
                        $query->where('product_category', 'Interior')
                                ->orwhere('product_category', 'Interior & Exterior');
                    })
                    ->get();
            ?>


                    <div class="col-lg-7 panel_clr_div">
                        <div class="panel panel-default panel_bodyclr">
                            <div class="panel-heading heading_clr" style=" background-color:#555555;color: white;" >
                                <h1 class="panel-title">Interior Products</h1>
                            </div>
                            <div class="panel-body" style=" background-color: #b8b7b7; padding-top: 30px;">
                                @foreach($product as $products)
                                <div class = "col-lg-4 col-md-3 col-sm-4">
                                    <a href = "brand-shades/{{ $products->id }}" class = "thumbnail bg_clr">
                                        <img src="{{ URL::asset('images/discount/'.$products->discount_price .'.png')}}" class="img-responsive img-circle" width="80" height="auto" alt="img" style="position:absolute; margin-top: -25px; margin-left: -17px;"/>
                                        <img src="{{$products->product_pic}}"  width="170"  alt = "img" class="img-responsive" style="padding-top:15px">
                                    </a>
                                    <a href = "brand-shades/{{ $products->id }}"><button type="button" class="btn btn-default viewbtn" >View Detail</button></a>

                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                <div class="col-lg-5 panel_clr_div" style="padding-right:0px;">
                    <div class="panel panel-default panel_bodyclr">
                        <div class="panel-heading heading_clr" style=" background-color:#555555;color: white;" >
                            <h1 class="panel-title">Exterior Products</h1>
                        </div>
                        <?php
                        $product_ex = Product::orderBy("product_sort_id","asc")
                                ->where('is_active','y')
                                ->where('brand_id',$brands->id)
                                ->Where(function ($query) {
                                    $query->where('product_category', 'Exterior')
                                            ->orwhere('product_category', 'Interior & Exterior');
                                })

                                ->get();

                        ?>
                        <div class="panel-body" style=" background-color: #b8b7b7; padding-top: 30px;">
                            @foreach($product_ex as $products)
                            <div class = "col-lg-6 col-md-3 col-sm-4">
                                <a href = "brand-shades/{{ $products->id }}" class = "thumbnail bg_clr">
                                    <img src="{{ URL::asset('images/discount/'.$products->discount_price .'.png')}}" class="img-responsive img-circle" width="80" height="auto" alt="img" style="position:absolute; margin-top: -25px; margin-left: -17px;"/>
                                    <img src="{{$products->product_pic}}" width="170" alt = "img" class="img-responsive" style="padding-top:15px">
                                </a>
                                <a href = "brand-shades/{{ $products->id }}"><button type="button" class="btn btn-default viewbtn" >View Detail</button></a>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>





        </div>

    </div>
</div>
<!--
<div class="modal fade" tabindex="-1" role="dialog" id="promoModel">
    <div class="modal-dialog" role="document" style="width: 854px;padding: 0px;height: 583px;">
        <div class="modal-content" style="height: 600px;">

            <div class="modal-body" style="position: relative; padding: 5px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <a href = "/{{ str_slug('ici-dulux-paints') }}">
                    <div class="col-lg-12">
                        <img src="{{ URL::asset('images/ici.jpg') }}" class="img-responsive" alt="img"/>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div> -->
    <!-- /.modal -->


@endforeach

<br>

@endsection
@section('custom_js')
    <!--
<script>
    $("#promoModel").modal();
    </script>
-->
@endsection