@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <?php

            use App\Paking;
            ?>
            <div class="col-lg-offset-1 col-md-6 bg_shades no_padding" style="margin-top: 8%">
                <div class="col-md-12  " style="background-color:#ffffff">

                    <h1 style="text-align:center;" class="text_style" >Shades </h1>
                    <hr style="width:60%">


                    @foreach ($shades as $shade)
                        <div class=" col-md-12 col-sm-12 shades_border">
                            <input type="hidden" name="brand_id" value="{{ $shade->brand_id }}" />
                            <input type="hidden" name="product_id" value="{{ $shade->product_id }}" />
                            <input type="hidden" name="shade_id" value="{{ $shade->id }}" />

                            <div class="col-md-2 col-sm-2 paint_clr" id="{{ $shade->shade_color }}" data-toggle="popover" style="background-color:{{ $shade->shade_color }}"></div>


                            <div class="col-md-2 col-sm-2 dd_size" style="font-weight: bold;">Packing
                                <select class="selectbtn btnclr packing" name="packing">
                                    <?php
                                    $packing = Paking::where("shade_id", $shade->id)
                                            ->where("brand_id", $shade->brand_id)
                                            ->where('is_active','y')
                                            ->get();
                                    ?>
                                    @foreach ($packing as $pk)
                                        <option Value="{{ $pk->id }}">{{ $pk->paking_value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-1 price" style="font-weight: bold;">Price
                                <?php
                                $price = Paking::where("shade_id", $shade->id)
                                        ->where("brand_id", $shade->brand_id)
                                        ->first();
                                ?>
                                <div class="pricebtn packing_price">{{ $price->paking_price }} PKR</div>
                                <input type="hidden" name="packing_price_val" class="packing_price_val" value="{{ $price->paking_price }}" />
                            </div>
                            <div class="col-md-2 col-sm-2 cart kharido">
                                <button type="button" style="width: 100%">update</button>
                            </div>

                        </div>
                        <div style="margin-bottom: 16px;" id="txt_btm">
                            <span class="pBld shadeName" id="{{ $shade->shade_color }}" style="cursor:pointer;">{{ $shade->shade_name }} - {{ $shade->shade_code }}</span>
                        </div>

                    @endforeach


                </div>
                <div align="center"> {{$shades->render()}}</div>
                </div>

            </div>
        </div>
    @endsection
@section('custom_js')

    @endsection