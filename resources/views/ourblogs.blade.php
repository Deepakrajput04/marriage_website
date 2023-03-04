@extends('layouts.admin')

@section('content')
<div class="container">
    <center><h1 style="margin-top: 42px;">OUR BLOGS</h1></center>
    <center><form method="post" action="{{route('addourblogs')}}" enctype="multipart/form-data">
        @csrf
        <label for="image"></label><br>
        <input type="file" name="image" placeholder="images" style="border: ridge;"><br><br>
        <label for="title"></label><br>
        <input type="text" name="title" placeholder="title" style="width: 22%; border: ridge;"><br><br>
        <textarea name="description" placeholder="description" id="" cols="30" rows="10"></textarea><br><br>

        <button type="submit">submit</button>


     </form></center>
    </div>

    <div class="container">
 <table class="table-responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i=1;
        @endphp
        @foreach($ourblog as $top)
        
        <tr>
            <td>{{$i++}}</td>
            <td>{{$top->title}}</td>
            <td>{{$top->description}}</td>
            <td><img src="{{url('/images/'.$top->image)}}" style="width:100px;height:100px; border-radius:10px;" alt=""></td>
            <td><a class="btn btn-success" href="{{route('editourblogs',$top->id)}}">edit</a>
            <a class="btn btn-danger" href="{{route('deleteourblogs',$top->id)}}">delete</a></td>
            
        </tr>
        @endforeach
    </tbody>
 </table>

</div>









@endsection