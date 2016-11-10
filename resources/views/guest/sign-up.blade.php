@extends("guestLayout")
@section("title")@parent新規登録@endsection
@section("content")
    @parent


    <form id="sign-in-form" class="form-horizontal" method="post" action="{{route("sign-up-confirm")}}">
        {{csrf_field()}}
        <div class="form-group  has-feedback">
            <!--
            <div class="col-sm-4 col-sm-offset-4">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="control-label" for="name">名前</label>
                        <input type="text" id="name" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label class="control-label" for="name">名前</label>
                        <input type="text" id="name" class="form-control">
                    </div>
                </div>
            </div>
            -->
            <label class="col-sm-2 col-sm-offset-4" for="name"><span style="color: red">※</span>ユーザID</label>
            <div class="col-sm-4 col-sm-offset-4">
                <input type="text" id="name" class="form-control" name="name" value= "{{old("name")}}">

            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="col-sm-2 col-sm-offset-4" for="mail" ><span style="color: red">※</span>メールアドレス</label>
            <div class=" col-sm-4 col-sm-offset-4">
                <input type="text" class="form-control" name="email" id="mail">
            </div>
        </div>
        <div class="form-group has-feedback ">
            <label class="col-sm-2 col-sm-offset-4 " for="password" ><span style="color: red">※</span>パスワード</label>
            <div class="col-sm-4 col-sm-offset-4">
                <input type="password" class="form-control" name="password" id="password">
                <p class="help-block">※英数8文字以上</p>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 col-sm-offset-4" for="place"><span style="color: red">※</span>場所</label>
            <div class="col-sm-4 col-sm-offset-4">
                <select class="form-control" id="place" name="place">
                    <option>テスト1</option>
                    <option>テスト2</option>
                    <option>テスト3</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2 col-sm-offset-5">
                <br>
                <input type="button" value="確認画面へ" id="btn" class="btn btn-primary btn-block">
            </div>
        </div>
    </form>

@endsection

@section("pageTitle")新規登録@endsection
@section("js") <script src="{{asset("assets/js/sign-up.js")}}"></script> @endsection