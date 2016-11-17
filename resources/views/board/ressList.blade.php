<div class="well well-sm text-center" style="height: 80px">
    <h2>スレッド名</h2>
</div>
<ul style="list-style-type: none;padding: 0">
    @foreach($ressList as $ress)
        <li class="res" data-ress_id="{{$ress["ress_id"]}}">
            <h4 class="title page-header">{{$ress["ress_id"]}} : {{$ress["title"]}}</h4>
            <p class="res-body">
                {{$ress["body"]}}
            </p>
            <div class="text-right res-footer">
                @if(Auth::user()->id==$ress["member_id"])
                    <!--<button class="btn btn-success btn-sm">編集</button>-->
                    <button class="btn btn-danger btn-sm " data-toggle="modal" data-target="#deleteModal">
                        削除
                    </button>
                @endif
                {{$ress->member["name"]}}
                <span>
                    　投稿日 {{date("Y年n月j日H:i分s秒",strtotime($ress["created_at"]))}}
                </span>
            </div>
        </li>
    @endforeach
</ul>
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div style="background-color: gainsboro;margin-bottom: 30px;padding: 20px;border-radius: 20px">
            <p class="h2 text-center" style="color: black">投稿</p>
            <div class="form-group">
                <p class="control-label">タイトル</p>
                <input type="text" id="postTitle" class="form-control">
            </div>
            <div class="form-group">
                <p>内容</p>
                <textarea rows="10" id="postBody" class="form-control"></textarea>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-offset-5 col-sm-2">
                    <button id="postBtn" class="btn btn-primary btn-block">投稿</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-1"></div>

</div>

<!--モーダル・ダイアログ-->
<div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" aria-hidden="true" data-dismiss="modal"><span>&times;</span></button>
                <h4>削除確認</h4>
            </div>
            <div class="modal-body">
                本当に削除しますか？
                <h3></h3>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger ressDeleteBtn">削除</button>
            </div>
        </div>
    </div>
</div>
