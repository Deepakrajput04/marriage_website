@extends('layouts.admin')

@section('content')


<div class="container">
    <center><h1 style="margin-top: 42px;">OUR BLOGS</h1></center>
    <center><form method="post" action="{{route('updateourorganizers',$ourorganizer->id)}}" enctype="multipart/form-data">
        @csrf
        <label for="image"></label><br>
        <input type="file" name="image" placeholder="images" style="border: ridge;">
        <div>
        <img src="{{url('/images/'.$ourorganizer->image)}}" style="width:100px;height:100px" alt="">
        </div>
        <br><br>
        <label for="title"></label><br>
        <input type="text" name="title" placeholder="title" value="{{$ourorganizer->title}}" style="width: 22%; border: ridge;"><br><br>
        <label for="profession"></label><br>
        <input type="text" name="profession" placeholder="profession" value="{{$ourorganizer->profession}}" style="width: 22%; border: ridge;"><br><br>
       

        <button type="submit">submit</button>


     </form></center>
    </div>
    @endsection