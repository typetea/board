@extends("layout")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron text-center" >
                <h1><a href="{{route("login")}}" style="text-decoration:none;color: black">掲示板システム</a> </h1>
            </div>
            <h1 class="page-header text-center">@yield("pageTitle")</h1>

        </div>
    </div>

@stop