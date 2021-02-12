$(document).ready(function(){
    $("#delivery-submit").click(sendForm);
});

function sendForm(){
    if ($("#user").val() == ""){
        $("#user").focus();
        return;
    }

    if ($("#phone").val() == ""){
        $("#phone").focus();
        return;
    }

    if ($("#email").val() == ""){
        $("#email").focus();
        return;
    }

    if ($("#address").val() == ""){
        $("#address").focus();
        return;
    }

    $.ajax({
        url: "create-order.php",
        method: "POST",
        data: {
            user: $("#user").val(),
            phone: $("#phone").val(),
            email: $("#email").val(),
            address: $("#address").val(),
            amount: $("#amount").val(),
            title: $(".title-info-title-text").text(),
            link: window.location.href
        },
        success: function(response){
            if (response != "error")
                window.location.href = "/order.php?id=" + response;
        }
    });
}