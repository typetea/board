@extends("memberLayout")

@section("content")
    @parent
    <div class="row">
        <div class="col-sm-3">
            <ul class="nav nav-pills nav-stacked ">
                <li><a href="">お気に入り</a> </li>
                <li><a href="{{route("member.modif")}}">会員情報変更</a> </li>
                <li><a href="{{route("member.ressList")}}">投稿履歴</a> </li>
                <li><a href="">退会</a> </li>

            </ul>
        </div>
        <div class="col-sm-9">
            @yield("configDisplay")


        </div>
    </div>

@stop