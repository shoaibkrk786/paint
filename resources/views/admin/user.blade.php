@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
<div class="container">
    <div align="center"> {{$users->render()}}</div>
    <table border="1" style="width:95%">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>Company</th>
            <th>City</th>
            <th>State</th>
            <th>Address</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->mobile_number}}</td>
            <td>{{$user->company}}</td>
            <td>{{$user->city}}</td>
            <td>{{$user->state}}</td>
            <td>{{$user->address}}</td>
        </tr>
@endforeach

    </table>
    <div align="center"> {{$users->render()}}</div>
    </div>
</div>
@endsection