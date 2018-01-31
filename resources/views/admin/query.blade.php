@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div align="center"> {{$query->render()}}</div>
            <table border="1" style="width:95%">

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Query Discription</th>
                    <th>Type</th>
                    <th>Is_Read</th>
                    <th>Is_Responded</th>
                </tr>
                @foreach ($query as $quer)
                    <tr>
                        <td>{{$quer->id}}</td>
                        <td>{{$quer->name}}</td>
                        <td>{{$quer->mobile_number}}</td>
                        <td>{{$quer->description}}</td>
                        <td>{{$quer->type}}</td>
                        <td>{{$quer->is_read}}</td>
                        <td>{{$quer->is_responded}}</td>
                    </tr>
                @endforeach

            </table>
            <div align="center"> {{$query->render()}}</div>
        </div>
    </div>
@endsection