@extends("member.configLayout")

@section("title")
    @parent
    投稿履歴
@endsection


@section("configDisplay")
    <h2 class="page-header">投稿履歴</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th style="width: 15%">スレッド名</th>
            <th style="width: 10%">レス番号</th>
            <th style="width: 15%">タイトル</th>
            <th style="width: 40%">内容</th>
            <th>投稿日</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ressList as $ress)
            <tr>
                <td>{{$ress->thread["title"]}}</td>
                <td>{{$ress["ress_id"]}}</td>
                <td>{{$ress["title"]}}</td>
                <td>{{$ress["body"]}}</td>
                <td>{{$ress["created_at"]}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
