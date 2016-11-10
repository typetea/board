
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{route("board")}}" class="navbar-brand">掲示板</a>
        </div>
        <ul class="nav navbar-nav navbar-right" id="topNav">
            <li><a href="{{route("member.changeThum")}}" style="padding: 0"> <img src="{{route("thumb")}}" width="50px" height="50px" class="img-thumbnail"></a></li>
            <li><a href="">{{Auth::user()->name}} さん</a> </li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" >メニュー<span class="glyphicon glyphicon-chevron-down"></span></a>

                <ul class="dropdown-menu">
                    <li><a href="">マイページ</a> </li>
                    <li><a href="{{route("member.ressList")}}">投稿履歴</a> </li>
                    <li><a href="{{route("logout")}}">ログアウト</a> </li>
                </ul>

            </li>
        </ul>
    </div>

</nav>

@section("css")
    @parent
    <link rel="stylesheet" href="{{asset("assets/css/navbar.css")}}">
@stop
