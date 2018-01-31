

                                    <?php
                                    $cart = Cart::instance("shopping")->content();
                                    $count = Cart::instance("shopping")->count();
                                            $total=0;
                                            $result=0;
                                            $result1=0;
                                    ?>



                                    @if($count > 0)
                                        <div class="container" id="basket_container"
                                             style="margin-right: 0px; right: 0px; position: absolute;z-index: 1000000000;margin-left: -295px;top: 57px;"
                                             xmlns="http://www.w3.org/1999/html">
                                            <div class="shopping-cart" id="box_basket">
                                                <div class="col-sm-12  " align="right">
                                                    <p><b>Recently added item({{$count}})</b></p>
                                                </div>
                                                <div class="col-lg-12" style="padding:0px;"><hr style="border-top: 2px solid #c8c2bf; margin: 0px;"></div>
                                                    @foreach($cart as $ct)
                                                    <?php
                                                    $result= $ct->options->org_quantity * $ct->options->org_price;
                                                    $result1= $ct->options->org_quantity * $ct->options->discount_price;
                                                    $total=$total+$result1;
                                                    ?>
                                                    <div class="col-sm-12 ">
                                                    <div class="col-sm-4" style="margin-top:10px; padding-right:5px;">
                                                        <div id="shade_basket_code" style="background-color: {{ $ct->options->shade_color }};">
                                                        </div>
                                                        <img src="{{ URL::asset($ct->options->product_pic) }}" class="img-responsive" width="100" height="70" alt="img" style="margin-top:5px;"/>
                                                    </div>
                                                    <div class="col-sm-4" style="margin-top:8px;  width:55%;">
                                                        <p style="margin-bottom: 0px;"><b><span style="color:#900;">{{ $ct->options->shade_name }}</span></b> - <b>{{ $ct->options->shade_code }}</b></p>
                                                        <p style="color:#900; margin-bottom: 0px;"><b>{{ $ct->name }}</b></p>
                                                        <b><span style="color:#900;">Size:</span>{{ $ct->options->packing_value }}Ltr</b>
                                                        <p style="margin-bottom: 0px;"><b><span style="color:#900;">Act.Rate:</span><strike>{{ $ct->options->org_quantity }} * {{ $ct->options->org_price }} = {{$result}}Rs</strike></b></p>
                                                        <p style="margin-bottom: 0px;"><b><span style="color:#900;">Disc.Rate:</span>{{ $ct->options->org_quantity }} * {{ $ct->options->discount_price }} = {{$result1}}Rs</b></p>

                                                    </div>
                                                    <div class="col-sm-4" id="padding_no">
                                                        <button type="button" class="close remove_shopping"  id="{{ $ct->rowId }}" aria-label="Close" style="opacity:1;margin-top: -12px; width:20px;">
                                                        <span aria-hidden="true">x</span>
                                                        </button>
                                                    </div>

                                                </div>
                                                <div class="col-lg-12" style="padding:0px;"><hr style="border-top: 2px solid #c8c2bf;"></div>

                                            @endforeach


                                        <div class="col-lg-12" align="center">
                                            <a href="/khareedo"><button type="button"   class="chkbtn" >
                                                    <span>Check Out</span>
                                                </button></a>
                                        </div>
                                        </div>
                                    </div>

                                    @endif
                                    <a href="#" class="khareedo_basket" id="cart" style="text-decoration: none;"><img src="{{ URL::asset('images/cart_03.png') }}" width="40" height="40"class=" img-responsive pull-left" alt="img"
                                                                                       id="car_img"/>&emsp;<span style="margin-left:-13px; margin-right: -10px; color:black;"><b>({{$count}} item)-{{$total}}Rs</b>&emsp;</span>
                                        @if($count > 0)
                                        <span class="glyphicon glyphicon-triangle-bottom" style="color:red;"></span>
                                            @endif
                                    </a>
