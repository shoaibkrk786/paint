@extends('admin.layout')
@section('content')
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <h1 align="center">Pakinges Form</h1>
            <form class="form-horizontal" action="pkfmdata" role="form" method="post" >
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Paking Value:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pakingvalue" name="pakingvalue" placeholder="Enter packing value" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Paking Price:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pakingprice" name="pakingprice" placeholder="Enter packing price" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Discount Price:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="discountprice" name="discountprice" placeholder="Enter discounted price" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Is_discounted:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="isdiscountprice" name="isdiscountprice" placeholder="Price discounted or not" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Brand_id:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="brandid">
                            @foreach($brand as $bd)
                                <option value="{{$bd->id}}">{{$bd->brand_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Product_id:</label>
                    <div class="col-sm-10">
                        <select class="form-control productid" name="productid">

                            @foreach($product as $products)
                                <option value="{{$products->id}}">{{$products->product_name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Shade_id:</label>
                    <div class="col-sm-10">
                        <select class="form-control shadeid" name="shadeid">



                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
            <!-- Your Page Content Here -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@section('custom_js')

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


        $(".productid").change(function (){

            var params = {};
            var p_id = $(this).val();
            params.id = p_id;
            var url = ajax_url + 'admin/getshades';

            var successCallback = function (res) {
                var options = '';
                res = jQuery.parseJSON(res);
                $.each(res, function( index, value ) {
                    console.log( value.shade_name );
                    options += '<option value="'+value.id+'">'+value.shade_name+'</option>';
                });

                $(".shadeid").html(options);
            };

            ajx(url, 'get', params, successCallback, 'html');

        });

    </script>

    @endsection