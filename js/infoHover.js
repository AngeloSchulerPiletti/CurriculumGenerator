
var infoContainer = document.getElementById("info_container"),
    message,
    xContainer,
    yContainer;

function infoHover(el) {
    xContainer = el.clientX;
    yContainer = el.clientY;

    infoContainer.style.left = xContainer + "px";
    infoContainer.style.top = yContainer + "px";
    infoContainer.style.display = "block";


    if (el.toElement.id == "") {
        message = "Na seção, você pode criar um título próprio para seu objetivo e uma respectiva mensagem";

    }
    else {
        message = "Adicione uma foto 3x4 com até 1.5MB de tamanho para compor seu currículo";
    }
    infoContainer.querySelector("p").innerHTML = message;
}
function infoHide() {
    infoContainer.style.display = "none";
}


document.body.onload = function () {
    var info1 = document.getElementById("info1"),
        info2 = document.getElementsByClassName("info2");

    if (info2.length > 1) {
        info1.addEventListener("mouseover", infoHover);
        for (var i = 0; i < info2.length; i++) {
            info2[i].addEventListener("mouseover", infoHover);
        }
    }

}

