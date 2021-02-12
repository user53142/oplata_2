var galleryTouched = false;
var startX = null;
var lastX = null;

var galleryIndex = 0;

$(document).ready(function(){
    for (i in document.getElementsByClassName("_16DDi FYXp7")){
        if (!isNaN(i)){
            element = document.getElementsByClassName("_16DDi FYXp7")[i];

            element.addEventListener("touchstart", galleryTouchStart, false);
            element.addEventListener("touchmove", galleryTouchMove, false);
            element.addEventListener("touchend", galleryTouchEnd, false);
        }
    }
});

function galleryTouchStart(){
    galleryTouched = true;
}

function galleryTouchMove(e){
    if (startX == null)
        startX = e.touches[0].pageX;

    lastX = e.touches[0].pageX;
}

function galleryTouchEnd(){
    galleryTouched = false;

    if (startX - lastX > 0){
        if (galleryIndex < $("._16DDi.FYXp7").length - 1){
            galleryIndex++;
            $("#gallery").attr("style", "margin-left: -" + galleryIndex * 100 + "%");
        }
    } else if (startX - lastX < 0){
        if (galleryIndex > 0){
            galleryIndex--;
            $("#gallery").attr("style", "margin-left: -" + galleryIndex * 100 + "%");
        }
    }

    $("._3c5P_").text((galleryIndex + 1) + " / " + $("._16DDi.FYXp7").length);

    startX = null;
    lastX = null;
}