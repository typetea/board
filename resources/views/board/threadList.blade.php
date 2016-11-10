<ul class="list-group">


    @foreach($threads as $thread)
        <li href="" class="list-group-item" data-th-id="{{$thread->id}}">{{$thread["title"]}}</li>
    @endforeach

</ul>