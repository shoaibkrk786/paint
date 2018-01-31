@extends('admin.layout')
@section('content')
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <h1 align="center">Shades form</h1>
            <form class="form-horizontal" action="senddata" role="form" method="post" >
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Shade name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="shadename" name="shadename" placeholder="Enter shade name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Shade code:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="shadecode" name="shadecode" placeholder="Enter shade code" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">shade color code:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="shadecolor" name="shadecolor" placeholder="Enter shade color code" required>
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
                        <select class="form-control" name="productid">
                            @foreach($product as $products)
                            <option value="{{$products->id}}">{{$products->product_name}}</option>
                            @endforeach
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