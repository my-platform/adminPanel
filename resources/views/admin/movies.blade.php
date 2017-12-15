@extends('layout.app')
@section('content')
   <div class="pull-right">
       <br>
    <a href="/categories/add" class="btn btn-success pull-right"><i class="fa fa-upload"></i></a>
   </div>
    @foreach($movies as $movie)
    <div class="col-sm-4 col-md-4">
        <center>
            <div class="thumbnail" style="padding: 20px 0 30px 0;">
                <img src="{{$movie->image}}" alt="">
                <div class="caption">

                    <B><h3>{{$movie->title}}</h3></B>

                    <div class="row" style="padding-top:20px;"> <a href="#" class="btn btn-success"><i class="fa fa-folder"></i></a>
                        <a href="categories/add" class="btn btn-success"><i class="fa fa-plus"></i></a>
                        <a href="#" class="btn btn-success"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></div>
                </div>
            </div>
        </center>

    </div>
    @endforeach
    @endsection