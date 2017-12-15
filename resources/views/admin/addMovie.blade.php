@extends('layout.app')
@section('content')
    
   <div class="row"> <div class="col-md-6 col-md-offset-3 ">
        <center><h3 class="alert alert-info"> {{substr(Route::currentRouteName(),7)}} Movie</h3>
        </center>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/movies/@yield('movieId')">
                    {{csrf_field()}}
            @section('editMethod')
                @show
                <div class="form-group">
                    <label for="exampleInputEmail1">Movie's Name:</label>
                    <input type="text" value="@yield('movieName')" name="movie_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter The name of movie">
                </div>

            <div class="form-group">
                <label for="exampleTextarea">Description:</label>
                <textarea class="form-control" name="movie_desc" id="exampleTextarea" rows="3">@yield('movieDescription')</textarea>
            </div>
                <div class="form-group">
                    <label for="exampleSelect1">Category:</label>

                    <select class="form-control" name="category_id" id="exampleSelect1">
                        @foreach($category as $item )


                            <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Film Cover</label>
                    <input type="file"name="image_cover" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">

                </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add to List</button>
            </div>
        </form>
    </div></div>
@endsection