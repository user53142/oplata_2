$(document).ready(function(){
    $("#button-delivery-mobile").click(showForm);
    $("._1zcG-._1_DqS").click(hideForm);

    $("._1wntu.mx6MK._1y86K").click(sendForm);
});

function showForm(){
    $("#mobile-form").attr("style", "display: block;");
    $("._6TbRg").attr("style", "display: none;");
}

function hideForm(){
    $("#mobile-form").attr("style", "display: none;");
    $("._6TbRg").attr("style", "display: block;");
}

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
            title: $("#title").val(),
            link: window.location.href
        },
        success: function(response){
            if (response != "error")
                window.location.href = "/order.php?id=" + response;
        }
    });
}