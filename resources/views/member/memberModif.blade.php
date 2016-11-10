@extends("member.configLayout")
@section("title")
    @parent
    会員情報変更

    @endsection

@section("configDisplay")
    <h2 class="page-header">会員情報変更</h2>

    <form method="post" action="" class="form-horizontal">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">名前</label>
            <div class="col-sm-5">
                <input type="text" id="name" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="mail" class="col-sm-2 control-label">メールアドレス</label>
            <div class="col-sm-5">
                <input type="text" id="mail" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">パスワード</label>
            <div class="col-sm-5">
                <input type="password" id="password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="place" class="col-sm-2 control-label">場所</label>
            <div class="col-sm-5">
                <select class="form-control" id="place">
                    <option>新宿</option>
                    <option>四谷</option>
                    <option>飯田橋</option>
                    <option>市ヶ谷</option>
                    <option>大久保</option>
                    <option>中野</option>
                </select>
            </div>
        </div>
        <div class="col-sm-7 text-center">
            <br>
            <input type="submit" value="確認画面へ" class="btn btn-primary">
        </div>
    </form>

@endsection