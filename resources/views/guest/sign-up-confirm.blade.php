@extends("guestLayout")
@section("title")@parent確認画面@endsection

@section("content")
    @parent
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <table class="table table-bordered  table-responsive">
                <tbody>
                <tr>
                    <td  width="30%">ユーザID</td >
                    <td  width="70%">{{$data["name"]}}</td>
                </tr>
                <tr>
                    <td>メールアドレス</td>
                    <td>{{$data["email"]}}</td>

                </tr>
                <tr>
                    <td>パスワード</td>
                    <td>{{$data["password"]}}</td>
                </tr>
                <tr>
                    <td>場所</td>
                    <td>{{$data["place"]}}</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
    <div>
        <p class="text-center">上記の内容でよろしいですか？</p>
        <form method="post" class="form-horizontal" action="{{route("sign-up")}}">
            {{csrf_field()}}
            <div class="col-xs-offset-0 col-sm-4 col-sm-offset-4">
                <div><a href="{{"sign-up"}}" class="btn btn-primary form-control">入力画面へ</a> </div><br>
                <input type="submit" value="決定" class="btn btn-primary form-control">
            </div>
        </form>
    </div>

@endsection
@section("pageTitle")確認画面@endsection