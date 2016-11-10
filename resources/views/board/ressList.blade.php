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
                    <button class="btn btn-danger btn-sm ressDeleteBtn">削除</button>
                @endif
                {{$ress->member["name"]}}
                投稿日: 2016年8月5日 09:52:31
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
