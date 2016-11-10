/**
 * Created by sirius-Main on 2016/11/01.
 */
$(function () {
   $("#name").on("change",function () {
        checkName();
   });

    $("#mail").on("change",function () {
       checkEmail();
    });

    $("#password").on("change",function () {
       checkPassword();
    });

    $("#btn").on("click",function () {

        if(checkName() && checkEmail() && checkPassword()){
            $("#sign-in-form").submit();

        }
    });
});

function checkName() {
    data = $("#name").val();
    if(data.length>=3){
        success($("#name"));
        return true;
    }else{
        showErrorMassege($("#name"),"3文字以上で入力してください");
        return false;
    }
}

function checkEmail() {
    data = $("#mail").val();
    if(data.length>=5){
        success($("#mail"));
        return true;

    }else{
        showErrorMassege($("#mail"),"5文字以上で入力してください");
        return false;

    }
}

function checkPassword() {
    data = $("#password").val();
    if(data.length>=3){
        success($("#password"));
        return true;
    }else{
        showErrorMassege($("#password"),"英数3文字以上で入力してください");
        return false;
    }
}


function showErrorMassege(ele,message){
    $helpBlock = $(ele).parent();
    reset(ele);
    $helpBlock.closest(".has-feedback").addClass("has-error");
    $helpBlock.append('<span class="form-control-feedback glyphicon glyphicon-remove"></span>');
    $helpBlock.append('<p class="help-block">'+message+'</p>');
}

function success(ele) {
    reset(ele);
    $helpBlock = $(ele).parent();
    $helpBlock.closest(".has-feedback").addClass("has-success");
    $helpBlock.append('<span class="form-control-feedback glyphicon glyphicon-ok"></span>');

}

function reset(ele) {
    $helpBlock = $(ele).parent();
    $helpBlock.closest(".has-feedback").removeClass("has-error");
    $helpBlock.find(".form-control-feedback").remove();
    $helpBlock.find(".help-block").remove();
}