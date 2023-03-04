@extends('layouts.admin')

@section('content')

<div class="container" style=" height:300px;">
    <center><h1 style="margin-top: 42px;">SLIDER</h1></center>
    <center><form method="post" action="{{route('addslider')}}" enctype="multipart/form-data">
        @csrf
        <label for="image"></label><br>
        <input type="file" name="image" placeholder="images" style="border: ridge;"><br><br>
       

        <button type="submit">submit</button>


     </form></center>
    </div>

    <div class="container">
 <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i=1;
        @endphp
        @foreach($data as $top)
        
        <tr>
            <td>{{$i++}}</td>
            <td><img src="{{url('/images/'.$top->image)}}" style="width:100px;height:100px; border-radius:10px;" alt=""></td>
            <td><a class="btn btn-success" href="{{route('editslider',$top->id)}}">edit</a>
            <a class="btn btn-danger" href="{{route('deleteslider',$top->id)}}">delete</a></td>
            
        </tr>
        @endforeach
    </tbody>
 </table>

</div>


@endsection