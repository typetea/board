/**
 * Created by sirius-Main on 2016/11/02.
 */
$(function () {
    var board = new Board(1);

    $("#threadsList").load("threads-list");
    board.showRess();

    $("#threadsList").on("click", "li", function () {
        board.setShowThread($(this).data("th-id"))
        board.showRess();

    });

    $("#res-list").on("click", "#postBtn", function () {
        board.postRess();
        board.showRess();
    });

    $('#threadBtn').on("click", function () {
        $("#threadDialog").dialog({
            title: "スレッド作成",
            width: 500,
            maxHeight: 420,
            modal: true
        });
    });

    $("#threadDialog button").on("click", function () {
        $.post("thread-post", {
            _token: $('meta[name="csrf-token"]').attr('content'),
            title: $("#threadDialog #title").val(),
            commentary: $("#threadDialog #commentary").val()
        }, function () {
            $("#threadDialog").dialog("close");
            $("#threadsList").load("threads-list");
        });
    });

    $("#res-list").on("click", ".ressDeleteBtn", function () {

        $.post("ress-delete", {
            ress_id: $(this).data("ress_id"),
            thread_id: board.showTh,
            _token: $('meta[name="csrf-token"]').attr('content')
        }, function () {
            board.showRess();
        });
        $("#deleteModal").modal("hide");
    });

    $("#res-list").on("show.bs.modal","#deleteModal",function (event) {
        var $button = $(event.relatedTarget);
        var $ress = $button.closest(".res");
        var title = $ress.find(".title").text();
        $(this).find(".modal-body h3").html("").append(title);
        $(this).find(".ressDeleteBtn").data("ress_id",$ress.data("ress_id"));

    });
});

var Board = function (showTh) {
    this.showTh = showTh;
};

Board.prototype = {
    setShowThread: function (showTh) {
        this.showTh = showTh;
    },
    showRess: function () {

        $("#res-list").load("ress-list", {
            "threadId": this.showTh,
            "_token": $('meta[name="csrf-token"]').attr('content')
        });
    },
    postRess: function () {
        $.post("ress-post", {
            "_token": $('meta[name="csrf-token"]').attr('content'),
            "title": $("#postTitle").val(),
            "body": $("#postBody").val(),
            "thread_id": this.showTh
        });
    }

};






