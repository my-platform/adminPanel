@extends('layout.app')
@section('content')

    <div class="row">

        <div class="col-md-12">
            @if(session()->has('message'))
                <center><h1 class="alert alert-success">{{session()->get('message')}}</h1></center>
            @endif
            <div class="col-md-12 pull-right" style="padding: 0 30px 40px 0; ">
                <br>
                <a href="/add" class="btn btn-success pull-right"><i class="fa fa-upload"></i></a>
            </div>

           <div class="col-md-12"> @foreach($movies as $movie)
                <div class="col-md-4">
                    <center>
                        <div class="thumbnail" style="padding: 20px 0 30px 0;">
                            <img src="{{$movie->image}}" alt="">
                            <div class="caption">

                                <B><h3>{{$movie->title}}</h3></B>

                                <div class="row" style="padding-top:10px;">
                                    <B><p>{{$movie->description}}</p></B>

                                    <a href="#" class="btn btn-success"><i
                                                class="fa fa-film"></i></a>

                                    <a href="/movies/{{$movie->id}}/edit" class="btn btn-success"><i
                                                class="fa fa-edit"></i></a>

                                    <form action="/movies/{{$movie->id}}" method="post" class="inline">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button style=" display: inline;" class="inline btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </center>

                </div>

        @endforeach</div>
        </div>
    </div>
@endsection