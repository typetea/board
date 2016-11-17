@extends("member.configLayout")

@section("configDisplay")
    <h2 class="page-header">サムネイル更新</h2>

    <div class="center-block" style="width: 100%;height: 500px">
        <img src="{{route("thumb")}}" style="width: 200px;height: 200px;display: block">
        <br>
        <form method="post" action="{{route("member.uploadThum")}}" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <input type="file" name="img">
            <br>
            <button class="btn btn-primary">アップロード</button>
        </form>
    </div>
@endsection