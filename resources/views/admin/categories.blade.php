@extends('layout.app')
@section('content')


    @foreach($category as $item)
        <div class="col-sm-4 col-md-4">
            <center>
                <div class="thumbnail" style="padding: 20px 0 30px 0;">
                    <img src="" alt="">
                    <div class="caption">

                        <B><h1>{{$item->title}}</h1></B>

                       <div class="row" style="padding-top:50px">
                           <a href="/categories/{{$item->id}}" class="btn btn-success"><i class="fa fa-folder"></i></a>
                        <a href="/categories/{{$item->id}}/edit" class="btn btn-success"><i class="fa fa-edit"></i></a>
                           <form action="/categories/{{$item->id}}" method="post" class="inline">
                               {{csrf_field()}}
                               {{method_field('DELETE')}}
                               <button style=" display: inline;" class="inline btn btn-danger"><i class="fa fa-trash-o"></i></button>
                           </form>
                       </div>
                    </div>
                </div>
            </center>

        </div>
    @endforeach
@endsection