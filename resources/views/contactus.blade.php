@extends('layouts.admin')

@section('content')
<div class="container" style="height:800px;">
    <h1 class="text-center fw-bolder">Contact Us</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>adress</th>
                <th>services</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @php
        $i = 1; 
        @endphp
        @foreach($contact as $key)

        <tr>
            <td>{{$i++}}</td>
            <td>{{$key->name}}</td>
            <td>{{$key->email}}</td>
            <td>{{$key->adress}}</td>
            <td>{{$key->services}}</td>
            <td>{{$key->message}}</td>
            <td><a href="{{route('deletecontact',$key->id)}}" class="btn btn-danger">Delete</a></td>

            
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection