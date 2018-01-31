@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div align="center"> {{$orders->render()}}</div>
            <table border="1" style="width:95%">

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>Comments</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Address</th>
                    <th>Brand</th>
                    <th>Product</th>
                    <th>shades</th>
                    <th>Packing</th>
                    <th>Unit Price</th>
                    <th>Discount Price</th>
                </tr>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->shipping_email}}</td>
                        <td>{{$order->shipping_mobile_number}}</td>
                        <td>{{$order->comments}}</td>
                        <td>{{$order->shipping_city}}</td>
                        <td>{{$order->shipping_state}}</td>
                        <td>{{$order->shipping_address}}</td>
                        <td>{{$order->brand_id}}</td>
                        <td>{{$order->product_id}}</td>
                        <td>{{$order->shade_id}}</td>
                        <td>{{$order->packing_value}}</td>
                        <td>{{$order->unit_price}}</td>
                        <td>{{$order->discounted_price}}</td>
                    </tr>
                @endforeach

            </table>
            <div align="center"> {{$orders->render()}}</div>
        </div>
    </div>
@endsection