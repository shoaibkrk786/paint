@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            @foreach($brand as $brand)
                <div class="container">
                    <h1 class="shop_name"> Shop for {{$brand->brand_name}}</h1>

                </div>
                <div class="content_clr">
                    <div class="container ">

                        <div class = "row">

                            @foreach($brand->product as $products)
                                <div class = "col-sm-6 col-md-3">
                                    <a href ="/upshade{{ $products->id }}" class ="thumbnail bg_clr">
                                        <img src="{{$products->product_pic}}" alt = "img" class="img-responsive" style="padding-top:15px">
                                    </a>
                                </div>
                            @endforeach


                        </div>

                    </div>
                </div>
            @endforeach

            <br>
        </div>
        </div>
    @endsection