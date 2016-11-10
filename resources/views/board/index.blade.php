@extends("memberLayout")
@section("title")
    @parent
    トップ
@endsection
@section("content")
    @parent

    <div class="row">
        <div class="col-sm-2" style="background-color: silver">
            <div class="text-center">
                <button class="btn btn-primary" style="margin: 20px auto" id="threadBtn">スレッド作成</button>
                <p >スレッド一覧</p>
            </div>
            <div id="threadsList">

            </div>
        </div>
        <div class="col-sm-8" style="background-color: rgba(0, 0, 0, 0.87);">
            <div id="res-list">

            </div>

        </div>
        <div class="col-sm-2" style="background-color: blueviolet"></div>

    </div>

    <div id="threadDialog" hidden>
        <title>dffd</title>
        <p >
            <div class="form-group">
            <label for="title">スレッド名</label>
            <input type="text" name="title" id="title" class="form-control">

        </div>
        <div class="form-group">
            <label for="commentary">解説</label>
            <textarea id="commentary" rows="7" name="commentary" class="form-control"></textarea>
        </div>
            <button class="btn btn-primary">作成</button>
        </p>
    </div>

@endsection

@section("css")
    @parent
    <link rel="stylesheet" href="{{asset("assets/css/board-index.css")}}">
ssss
@endsection

@section("js")
@parent
    <script src="{{asset("assets/js/board-index.js")}}"></script>

@endsection

@section("header")
    <meta name="csrf-token" content="{{csrf_token()}}">
@endsection