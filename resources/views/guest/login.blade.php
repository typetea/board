@extends("guestLayout")


@section("title")
    @parent
    ログイン
@endsection

@section("content")
    @parent

    <form method="post" action="{{route("login")}}">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="userName">ユーザID</label>
                    <input type="text" id="userName" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <p class="text-center" style="color: red">{{Session::get("message")}}</p>
            <div class="col-md-5 hidden-xs"></div>
            <div class="col-md-2">
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary btn-block" value="ログイン">
                    <br>
                    <a href="{{route("sign-up")}}">新規登録はこちら</a>
                </div>
            </div>
        </div>
    </form>
@endsection

@section("pageTitle")ログイン@endsection